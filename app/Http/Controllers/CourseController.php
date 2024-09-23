<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($url);

         $user = Auth::user();

         if(!$user->is_active){
            // Simpan email pengguna ke session flash
            session()->flash('auth_name', $user->name);
            session()->flash('auth_email', $user->email);

            // Logout pengguna
            Auth::logout();



            // Redirect ke rute 'inactive'
            return redirect()->route('inactive');
         }

         else if ($user->hasRole('user')) {
            $selectFirst = Course::orderBy('id')->pluck('url')->first();
            // dd($selectFirst);
            return redirect()->route('dashboardURL', ['url' => $selectFirst]);
         }

          else if ($user->hasRole('admin')) {
           return redirect()->route('admin.index');
         }

         else {
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
         }


    }

    public function url($url)
    {

        $urlCourse = Course::where('url', $url)->first();
        $courses = Course::all();
        return view('user.user', compact('urlCourse','courses'));
    }

}
