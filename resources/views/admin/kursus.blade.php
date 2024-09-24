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

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<style>
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
                    <a href="{{route('admin.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
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
                            <a href="#" class="text-sm font-medium text-gray-700 ms-1 hover:text-[#3ABE9C] md:ms-2 dark:text-gray-400 dark:hover:text-white">Kursus</a>
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

            <h1 class="text-2xl font-bold text-gray-800">List Kursus</h1>

            <div class="p-4 mb-4 rounded h-fit bg-gray-50">

                    <div class="flex justify-center w-full mb-2 md:justify-end lg:justify-end">
                        <button id="crud-button" class="w-fit text-white bg-[#3BBD9C] hover:bg-[#237963]  font-medium rounded-lg text-sm px-4 py-2.5 text-center " type="button">
                        Tambah Kursus
                        </button>
                    </div>

                     <table id="example" class="table" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Judul</th>
                                <th>Durasi</th>
                                <th>Url</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Tambahkan baris lainnya -->
                        </tbody>
                    </table>
            </div>

        </div>
    </div>

    <!-- Modal Tambah Kursus -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 hidden w-full h-full overflow-y-auto bg-gray-600 bg-opacity-50">
        <div class="w-full h-screen px-2 py-6 md:py-8 md:px-4 lg:px-0 lg:w-fit">
            <!-- Modal content -->
            <div class="relative bg-white lg:w-[800px] rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Tambah Kursus
                    </h3>
                    <button type="button" id="hide-kursus" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="addCourseForm" class="p-4 md:p-5">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul Video" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="durasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Video</label>
                            <input type="text" name="durasi" id="durasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0 Jam 00 Menit" required>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tingkat Kesulitan</label>
                            <select id="category" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#3CBC9C] dark:focus:border-[#3CBC9C]" required>
                                <option value="" disabled selected>--- Pilih ----</option>
                                <option value="Mudah">Mudah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Sulit">Sulit</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="kodeUrl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode URL</label>
                            <input type="text" name="kodeUrl" id="kodeUrl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Kode URL" required>
                            <p class="text-sm text-amber-600">Contoh : Rs3PZQDFaH8</p>
                        </div>

                        <div class="flex items-end h-full col-span-2 pb-[28px] sm:col-span-1">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="checkbox" id="publikasi" name="publikasi" class="sr-only peer" required>
                                <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#3CBC9C]"></div>
                                <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Status Publikasi</span>
                            </label>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="kuis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Kuis</label>
                            <input type="text" name="kuis" id="kuis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Link Kuis" required>
                            <p class="text-sm text-amber-600">Contoh : https://www.google.com/</p>
                        </div>

                        <div class="col-span-2 sm:col-span-1">
                            <label for="materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Materi</label>
                            <input type="text" name="materi" id="materi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Link Materi" required>
                            <p class="text-sm text-amber-600">Contoh : https://www.google.com/</p>
                        </div>

                        <div class="col-span-2">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#3CBC9C] focus:border-[#3CBC9C] dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#3CBC9C] dark:focus:border-[#3CBC9C]" placeholder="Tuliskan Deskripsi Video disini" required></textarea>
                        </div>
                    </div>
                    <div class="w-full">
                        <button type="submit" class="block w-full text-white bg-[#3BBD9C] hover:bg-[#237963] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Simpan
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Edit Tambah Kursus -->
    <div id="edit-modal" tabindex="-1" aria-hidden="true" class="fixed inset-0 z-50 justify-center hidden w-full h-full overflow-y-auto bg-gray-600 bg-opacity-50">
        <div class="w-full h-screen px-2 py-6 md:py-8 md:px-4 lg:px-0 lg:w-fit">
            <!-- Modal content -->
            <div class="relative bg-white w-full lg:w-[800px] rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Kursus
                    </h3>
                    <button type="button" id="hide-btn" class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form id="editCourseForm" class="p-4 md:p-5">
                    <div class="grid grid-cols-2 gap-4 mb-4">
                        <input class="hidden text-black" id="idEditID"></input>
                        <div class="col-span-2">
                            <label for="edit-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                            <input type="text" name="edit-name" id="edit-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Judul Video" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit-durasi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durasi Video</label>
                            <input type="text" name="edit-durasi" id="edit-durasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0 Jam 00 Menit" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit-category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tingkat Kesulitan</label>
                            <select id="edit-category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#3CBC9C] dark:focus:border-[#3CBC9C]">
                                <option selected="">--- Pilih ----</option>
                                <option value="Mudah">Mudah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Sulit">Sulit</option>
                            </select>
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="edit-kodeUrl" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode URL</label>
                            <input type="text" name="edit-kodeUrl" id="edit-kodeUrl" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="UKZfhqP2-Gg" required="">
                            <p class="text-sm text-amber-600">Contoh : Rs3PZQDFaH8</p>
                        </div>
                        <div class="flex items-end h-full col-span-2 pb-[28px] sm:col-span-1">
                            <label class="inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="editPublikasi" value="" class="sr-only peer">
                            <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#3CBC9C]"></div>
                            <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Status Publikasi</span>
                            </label>
                        </div>

                         <div class="col-span-2 sm:col-span-1">
                            <label for="edit-kuis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Kuis</label>
                            <input type="text" name="edit-kuis" id="edit-kuis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Link Kuis" required="">
                            <p class="text-sm text-amber-600">Contoh : https://www.google.com/</p>
                        </div>

                          <div class="col-span-2 sm:col-span-1">
                            <label for="edit-materi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Materi</label>
                            <input type="text" name="edit-materi" id="edit-materi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#3CBC9C] focus:border-[#3CBC9C] block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Masukan Link Kuis" required="">
                            <p class="text-sm text-amber-600">Contoh : https://www.google.com/</p>
                        </div>

                        <div class="col-span-2">
                            <label for="edit-description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                            <textarea id="edit-description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#3CBC9C] focus:border-[#3CBC9C] dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#3CBC9C] dark:focus:border-[#3CBC9C]" placeholder="Tuliskan Deskripsi Video disini"></textarea>
                        </div>
                    </div>
                    <div class="w-full">
                        <button type="submit" class="block w-full text-white bg-[#3BBD9C] hover:bg-[#237963] font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Simpan
                        </button>
                    </div>
                </form>
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
        "ajax": "{{ route('data.table.kursus') }}",
        "deferRender": true,
        "columns": [
            { "data": "judul" },
            { "data": "durasi_video" },
            { "data": "url" },
            {
                "data": null,
                "defaultContent": `
                <div class='flex gap-2'>
                    <button id='edit-btn' class='block text-white bg-[#3BBD9C] hover:bg-[#237963] font-medium rounded-lg text-sm px-5 py-2.5 text-center' type='button'>Edit</button>
                    <button id='delete-btn' class='block text-white bg-red-600 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center' type='button'>Delete</button>
                </div>
                `
            }
        ]
        });


        // Event listener untuk submit form tambah kursus
        $('#addCourseForm').on('submit', function(e) {
            e.preventDefault(); // Cegah form dari reload halaman

            // Ambil nilai dari form
            var name = $('#name').val();
            var durasi = $('#durasi').val();
            var category = $('#category').val();
            var kodeUrl = $('#kodeUrl').val();
            var description = $('#description').val();
            var publikasi = $('#publikasi').is(':checked') ? 1 : 0;
            var kuis = $('#kuis').val();
            var materi = $('#materi').val();

            // Cek apakah input kosong
            if (!name || !durasi || !category || !kodeUrl || !description || !kuis || !materi) {
                alert('Semua field harus diisi!');
                return;
            }

            // Ambil data dari form
            var formData = {
                judul: $('#name').val(),
                durasi: $('#durasi').val(),
                tingkat_kesulitan: $('#category').val(),
                kode_url: $('#kodeUrl').val(),
                deskripsi: $('#description').val(),
                publikasi: $('#publikasi').is(':checked') ? 1 : 0,
                kuis: $('#kuis').val(),
                materi: $('#materi').val(),
                _token: $('meta[name="csrf-token"]').attr('content') // Mengambil CSRF token
            };

            // Kirim data menggunakan AJAX
            $.ajax({
                url: "{{ route('admin.kursus.store') }}", // Route untuk menyimpan kursus
                method: 'POST',
                data: formData,
                success: function(response) {
                    alert('Kursus berhasil ditambahkan');
                    table.ajax.reload(); // Reload tabel setelah kursus ditambahkan
                    $('#crud-modal').addClass('hidden'); // Tutup modal setelah sukses
                    location.reload();  // Muat ulang halaman untuk melihat perubahan
                },
                error: function(error) {
                    console.error("Terjadi kesalahan:", error);
                    alert('Terjadi kesalahan, coba lagi.');
                }
            });
        });


        // Event listener untuk simpan edit
        $('#editCourseForm').on('submit', function(e) {
            e.preventDefault();  // Mencegah form agar tidak melakukan submit default

            // Ambil nilai dari form
            var id = $('#idEditID').val();  // Pastikan modal menyimpan ID kursus
            var judul = $('#edit-name').val();
            var durasi = $('#edit-durasi').val();
            var tingkat_kesulitan = $('#edit-category').val();
            var kode_url = $('#edit-kodeUrl').val();
            var deskripsi = $('#edit-description').val();
            var publikasi = $('#editPublikasi').is(':checked') ? 1 : 0;
            var kuis = $('#edit-kuis').val();
            var materi = $('#edit-materi').val();

            // Kirim data ke server menggunakan AJAX
            $.ajax({
                url: '/kursus/update',  // Endpoint untuk update data kursus di backend
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    judul: judul,
                    durasi: durasi,
                    tingkat_kesulitan: tingkat_kesulitan,
                    kode_url: kode_url,
                    deskripsi: deskripsi,
                    publikasi: publikasi,
                    kuis:kuis,
                    materi:materi
                },
                success: function(response) {
                    if(response.success) {
                        // Jika berhasil
                        alert('Data berhasil diperbarui');
                        $('#edit-modal').addClass('hidden');  // Sembunyikan modal
                        location.reload();  // Muat ulang halaman untuk melihat perubahan
                    } else {
                        alert('Gagal memperbarui data');
                    }
                },
                error: function(error) {
                    console.error("Terjadi kesalahan:", error);
                    alert('Terjadi kesalahan, coba lagi.');
                }
            });
        });

        // Delete button click event
        $('#example').on('click', '#delete-btn', function() {
            var data = table.row($(this).parents('tr')).data();
            var id = data.id;



            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                $.ajax({
                    url: '/kursus/delete/' + id,  // Endpoint untuk menghapus data
                    method: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            alert('Data berhasil dihapus');
                            table.ajax.reload(); // Reload tabel setelah data dihapus
                        } else {
                            alert('Gagal menghapus data');
                        }
                    },
                    error: function(error) {
                        console.error('Terjadi kesalahan:', error);
                        alert('Terjadi kesalahan, coba lagi.');
                    }
                });
            }
        });


        // Edit button click event
        $('#example').on('click', '#edit-btn', function() {

            // Mengambil data dari row tabel yang sedang diklik
            var data = table.row($(this).parents('tr')).data();

            // Mengisi data ke dalam input modal

            $('#idEditID').val(data.id); // Mengisi judul video
            $('#edit-name').val(data.judul); // Mengisi judul video
            $('#edit-durasi').val(data.durasi_video); // Mengisi durasi video
            $('#edit-category').val(data.tingkat_kesulitan); // Mengisi tingkat kesulitan
            $('#edit-kodeUrl').val(data.url); // Mengisi kode URL
            $('#edit-description').val(data.deskripsi); // Mengisi deskripsi video
            $('#edit-kuis').val(data.kuis);
            $('#edit-materi').val(data.materi);

            // Mengisi status publikasi
            if(data.is_active == 1) {
                $('input[type="checkbox"]').prop('checked', true); // Ceklist checkbox jika publikasi aktif
            } else {
                $('input[type="checkbox"]').prop('checked', false); // Uncheck checkbox jika publikasi tidak aktif
            }

            $('#edit-modal').removeClass('hidden');
            $('#edit-modal').addClass('flex justify-center items-center');
        });

        // Event ketika tombol tampil modal kursus diklik
        $('#crud-button').on('click', function() {
            $('#crud-modal').removeClass('hidden'); // Menambah class hidden untuk menyembunyikan modal
            $('#crud-modal').addClass('flex justify-center items-center');
        });

        // Event ketika tombol close modal kursus diklik
        $('#hide-kursus').on('click', function() {
            $('#crud-modal').addClass('hidden'); // Menambah class hidden untuk menyembunyikan modal
        });

        // Event ketika tombol close diklik
        $('#hide-btn').on('click', function() {
            $('#edit-modal').addClass('hidden'); // Menambah class hidden untuk menyembunyikan modal
        });

    });


</script>

</html>
