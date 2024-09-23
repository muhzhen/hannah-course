<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.index');
    }

    public function indexKursus()
    {
        //
        return view('admin.kursus');
    }

    public function getData(Request $request)
    {
        // Ambil query builder dari model
        $query = User::query();

        // Filter untuk role "user" saja
        $query->where('role', 'user');

        // Menangani pencarian berdasarkan email
        if ($request->has('search') && $request->input('search.value')) {
            $query->where('email', 'like', '%' . $request->input('search.value') . '%');
        }

        // Total records tanpa filter
        $totalRecords = $query->count();

        // Total records dengan filter
        $filteredRecords = $query->clone()->where('email', 'like', '%' . $request->input('search.value') . '%')->count();

        // Ambil data yang sesuai dengan parameter start dan length
        $data = $query->skip($request->input('start'))
                    ->take($request->input('length'))
                    ->get()
                    ->map(function ($item) {
                        return [
                            'name' => $item->name,
                            'email' => $item->email,
                            'role' => $item->role,
                            'is_active' => $item->is_active,
                            'id' => $item->id // Pastikan ID disertakan untuk keperluan toggle
                        ];
                    });

        // Kirim data dalam format JSON
        return response()->json([
            "draw" => intval($request->input('draw')),
            "recordsTotal" => $totalRecords,
            "recordsFiltered" => $filteredRecords,
            "data" => $data
        ]);
    }

    public function getDataKursus(Request $request)
    {
        // Ambil query builder dari model Course
        $query = Course::query();

        // Menangani pencarian berdasarkan judul (jika ada pencarian)
        if ($request->has('search') && $request->input('search.value')) {
            $searchValue = $request->input('search.value');
            $query->where('judul', 'like', '%' . $searchValue . '%');
        }

        // Total records tanpa filter
        $totalRecords = Course::count();

        // Total records dengan filter (pencarian)
        $filteredRecords = $query->count();

        // Ambil data yang sesuai dengan parameter start dan length dari DataTables
        $data = $query->skip($request->input('start'))
                      ->take($request->input('length'))
                      ->get()
                      ->map(function ($item) {
                          return [
                              'id' => $item->id,
                              'judul' => $item->judul,
                              'durasi_video' => $item->durasi_video,
                              'deskripsi' => $item->deskripsi,
                              'tingkat_kesulitan' => $item->tingkat_kesulitan,
                              'is_active' => $item->is_active,
                              'url' => $item->url
                          ];
                      });

        // Kirim data dalam format JSON yang dipahami oleh DataTables
        return response()->json([
            "draw" => intval($request->input('draw')), // Draw count dari DataTables
            "recordsTotal" => $totalRecords,           // Total data sebelum filter
            "recordsFiltered" => $filteredRecords,     // Total data setelah filter
            "data" => $data                            // Data yang akan ditampilkan
        ]);

    }

    public function toggleStatus(Request $request)
    {
         Log::info('Request data:', $request->all()); // Untuk memeriksa apakah data terkirim dengan benar

        $user = User::find($request->id);

        if ($user) {
            // Update status
            $user->is_active = $request->is_active;
            $user->save();

            return response()->json([
                'success' => true,
                'message' => 'Status updated successfully.',
                'new_status' => $user->is_active // Kirim status terbaru
            ]);
        }

        return response()->json(['success' => false, 'message' => 'User not found.']);

    }

    public function resetPassword(Request $request)
    {
        $user = User::find($request->id);
        if ($user) {
            $defaultPassword = 'default123'; // Ganti dengan nilai default
            $user->password = bcrypt($defaultPassword);
            $user->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false]);
        }
    }

    public function tambahKursus(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'durasi' => 'required|string',
            'tingkat_kesulitan' => 'required|string',
            'kode_url' => 'required|string',
            'deskripsi' => 'nullable|string',
            'publikasi' => 'required|boolean',
        ]);

        // Simpan data kursus
        Course::create([
            'judul' => $validated['judul'],
            'durasi_video' => $validated['durasi'],
            'tingkat_kesulitan' => $validated['tingkat_kesulitan'],
            'url' => $validated['kode_url'],
            'deskripsi' => $validated['deskripsi'],
            'is_active' => $validated['publikasi'],
        ]);

        return response()->json(['message' => 'Kursus berhasil ditambahkan']);
    }

    public function updateKursus(Request $request)
    {
        try {
        $validatedData = $request->validate([
            'id' => 'required|integer|exists:courses,id',
            'judul' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'tingkat_kesulitan' => 'required|in:Mudah,Sedang,Sulit',
            'kode_url' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'publikasi' => 'required|boolean',
        ]);

        // Temukan kursus dengan ID dan perbarui
        $course = Course::findOrFail($validatedData['id']);
        $course->update([
            'judul' => $validatedData['judul'],
            'durasi_video' => $validatedData['durasi'],
            'tingkat_kesulitan' => $validatedData['tingkat_kesulitan'],
            'url' => $validatedData['kode_url'],
            'deskripsi' => $validatedData['deskripsi'],
            'is_active' => $validatedData['publikasi'],
        ]);

        return response()->json(['message' => 'Data berhasil diperbarui','success' => true,]);
        } catch (\Exception $e) {
            // Log exception dan tampilkan pesan kesalahan
            Log::error('Terjadi kesalahan saat memperbarui data: ' . $e->getMessage());
            return response()->json(['message' => 'Terjadi kesalahan'], 500);
        }
    }

    public function destroy($id)
    {
        $kursus = Course::find($id);

        if (!$kursus) {
            return response()->json(['error' => 'Kursus tidak ditemukan'], 404);
        }

        $kursus->delete();

        return response()->json(['success' => 'Kursus berhasil dihapus'], 200);
    }

}
