<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hannah Asa Indonesia</title>

    <!-- jQuery (required by DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.js"></script>

    <script type="module" crossorigin src="bundle.js"></script>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<style>
  .toggle-btn {
    cursor: pointer;
    padding: 5px 10px;
    border: none;
    border-radius: 4px;
    color: white;
  }
  .toggle-btn.active {
    background-color: #4CAF50; /* Green */
  }

    .toggle-btn.active:hover {
    background-color: #226425; /* Warna background saat di-hover */
    }

  .toggle-btn.inactive {
    background-color: #f44336; /* Red */
  }

  .toggle-btn.inactive:hover {
    background-color: #C93227; /* Red */
  }

  .reset-btn {
    cursor: pointer;
    padding: 5px 10px;
    border: solid;
    border-radius: 4px;
    color: white;
    border-color:red;
    color:red;
  }


  /* Custom CSS for pagination */

        /* Style for normal pagination buttons */
        .page-item .page-link {
            color: #3ABE9C !important; /* Default text color */
        }

        /* Style for active pagination button */
        .page-item.active .page-link {
            background-color: #3ABE9C !important; /* Background color for active page */
            color: white !important; /* Text color for active page */
            border-color: #3ABE9C;
        }

        /* Hover effect for pagination buttons */
        .page-item .page-link:hover {
            background-color: #247762 !important; /* Background color on hover */
            color: white !important;
        }

        /* Disabled button styling */
        .page-item.disabled .page-link {
            color: #cccccc !important; /* Disabled button color */
        }

    /* Targeting the search input with specific classes */
        input[type="search"].form-control.form-control-sm {
            border: 2px solid #E2E8F0;  /* Custom border color */
            background-color: #F1F5F9;  /* Custom background color */
            color: #1E293B;             /* Text color */
            padding: 5px 10px;          /* Padding inside input */
            border-radius: 5px;         /* Rounded corners */
        }

        /* Styling placeholder text */
        input[type="search"].form-control.form-control-sm::placeholder {
            color: #3ABE9C;             /* Placeholder text color */
        }

        /* Change border color on focus */
        input[type="search"].form-control.form-control-sm:focus {
            --tw-ring-color: #3ABE9C;
            border-color: #3ABE9C;      /* Border color when input is focused */
            outline: none;              /* Remove default focus outline */
        }

</style>

<body>

    {{-- navbar --}}
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 ">
        <div class="flex justify-between px-3 py-3 lg:px-5 lg:pl-3">

            {{-- logo --}}
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="#" class="flex ms-2 md:me-24">
                    <img src="{{ asset('images/hannahLogo.png') }}" class="h-6 me-3" alt="hannahasaindonesia" />
                </a>
            </div>

            {{-- menu --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button" class="flex text-sm rounded-full bg-gray-50 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="{{asset('images/user.png')}}" alt="user photo">
                        </button>
                    </div>

                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow " id="dropdown-user">

                    {{-- menu akun button --}}
                    <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 " role="none">
                                {{ auth()->user()->name }}
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate " role="none">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf

                                        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block px-4 py-2 text-sm text-gray-700 cursor-pointer hover:bg-gray-100" role="menuitem">Sign Out</a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </nav>


    {{-- sidebar --}}
    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 " aria-label="Sidebar">
        <div class="h-full px-4 pb-4 overflow-y-auto bg-white ">

            {{-- menu --}}
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="w-5 h-5 text-gray-800 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                        <span class="font-normal ms-3">Pengguna</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.kursus')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <svg class="w-5 h-5 text-gray-800 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M7.111 20A3.111 3.111 0 0 1 4 16.889v-12C4 4.398 4.398 4 4.889 4h4.444a.89.89 0 0 1 .89.889v12A3.111 3.111 0 0 1 7.11 20Zm0 0h12a.889.889 0 0 0 .889-.889v-4.444a.889.889 0 0 0-.889-.89h-4.389a.889.889 0 0 0-.62.253l-3.767 3.665a.933.933 0 0 0-.146.185c-.868 1.433-1.581 1.858-3.078 2.12Zm0-3.556h.009m7.933-10.927 3.143 3.143a.889.889 0 0 1 0 1.257l-7.974 7.974v-8.8l3.574-3.574a.889.889 0 0 1 1.257 0Z"/>
                        </svg>
                        <span class="font-normal ms-3">Kursus</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>


    {{-- body --}}
    <div class="p-4 sm:ml-64">
        <div class="flex flex-col gap-4 p-4 border-2 border-gray-200 border-dashed rounded-lg mt-14">


            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-[#3ABE9C] dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                            </svg>
                            Home
                        </a>
                    </li>

                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <a href="#" class="text-sm font-medium text-gray-700 ms-1 hover:text-[#3ABE9C] md:ms-2 dark:text-gray-400 dark:hover:text-white">Pengguna</a>
                        </div>
                    </li>

                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="text-sm font-medium text-gray-500 ms-1 md:ms-2 dark:text-gray-400">List</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <h1 class="text-2xl font-bold text-gray-800">List Pengguna</h1>

            <div class="p-4 mb-4 rounded h-fit bg-gray-50">
                     <table id="example" class="table" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Status Aktivasi</th>
                                <th>Reset Password</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Tambahkan baris lainnya -->
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

</body>

<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
    "processing": true,
    "serverSide": true,
    "responsive": true,
    "ajax": "{{ route('data.table.user') }}",
    "deferRender": true,
    "columns": [
        { "data": "name" },
        { "data": "email" },
        { "data": "role" },
        {
            "data": "is_active",
            "render": function(data, type, row) {
                var statusClass = data ? 'active' : 'inactive';
                var statusText = data ? 'Aktif' : 'Tidak Aktif';
                return '<button class="toggle-btn ' + statusClass + '" data-id="' + row.id + '">' + statusText + '</button>';
            }
        },
        {
            "data": null,
            "render": function(data, type, row) {
                return '<button class="reset-btn" data-id="' + row.id + '">Reset Password</button>';
            }
        }
    ]
    });

    // Event listener untuk toggle button
    $('#example').on('click', '.toggle-btn', function() {
    var button = $(this);
    var userId = button.data('id');
    var isActive = button.hasClass('inactive'); // true jika user tidak aktif, false jika user aktif

    $.ajax({
            url: "{{ route('user.toggle') }}",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                id: userId,
                is_active: isActive ? 1 : 0 // Kirim 1 jika isActive false, 0 jika true
            },
            success: function(response) {
                if (response.success) {
                    button.toggleClass('active inactive');
                    button.text(button.hasClass('inactive') ? 'Tidak Aktif' : 'Aktif');

                    // Pastikan tabel diperbarui
                    table.draw(false); // atau ajax.reload()
                } else {
                    alert('Failed to update status.');
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error);
                alert('An error occurred while updating the status.');
            }
        });
    });


    // Event listener untuk reset password
    $('#example').on('click', '.reset-btn', function() {
        var button = $(this);
        var userId = button.data('id');

        if (confirm('Apakah Anda yakin ingin mengatur ulang kata sandi pengguna ini ke nilai default?')) {
            $.ajax({
                url: "{{ route('user.resetPassword') }}", // Rute untuk reset password
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: userId
                },
                success: function(response) {
                    if (response.success) {
                        alert('Kata sandi telah direset ke nilai default.');
                        // Jika ingin mengupdate tabel atau menambahkan aksi lain, lakukan di sini
                    } else {
                        alert('Gagal mereset kata sandi.');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', status, error);
                    alert('Terjadi kesalahan saat mereset kata sandi.');
                }
            });
        }
    });


  });
</script>

</html>
