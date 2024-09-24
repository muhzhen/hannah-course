<div class="flex flex-col gap-4 lg:gap-12">

            <div class="w-full overflow-hidden h-fit rounded-xl">
                <!-- Gantilah src dengan URL video YouTube yang sesuai -->
                <iframe src="https://www.youtube.com/embed/{{$urlCourse->url}}" class="w-full h-[220px] md:h-[400px] lg:h-[500px]" allowfullscreen></iframe>
            </div>

            <div class="flex flex-col gap-6 lg:gap-8">
                <h1 class="text-lg font-bold lg:text-xl">{{$urlCourse->judul}}</h1>

                <div class="flex flex-col gap-4 lg:flex-row">
                    <div class="w-full p-4 border rounded-xl">
                        <div class="flex gap-4">
                            <div class="flex items-center justify-center w-12 h-12 p-3 bg-blue-100 rounded-xl">
                                <svg width="80%" style="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.3125 10.6875C16.3125 14.727 13.0395 18 9 18C4.96055 18 1.6875 14.727 1.6875 10.6875C1.6875 7.03125 4.36992 4.00078 7.875 3.46289V2.25H6.89062C6.65859 2.25 6.46875 2.06016 6.46875 1.82812V0.421875C6.46875 0.189844 6.65859 0 6.89062 0H11.1094C11.3414 0 11.5312 0.189844 11.5312 0.421875V1.82812C11.5312 2.06016 11.3414 2.25 11.1094 2.25H10.125V3.46289C11.4434 3.6668 12.6457 4.22227 13.6301 5.03086L14.5969 4.06406C14.7621 3.89883 15.0293 3.89883 15.1945 4.06406L16.1895 5.05898C16.3547 5.22422 16.3547 5.49141 16.1895 5.65664L15.1559 6.69023L15.1348 6.71133C15.8801 7.85039 16.3125 9.21797 16.3125 10.6875ZM10.125 11.9531V6.62695C10.125 6.39492 9.93516 6.20508 9.70312 6.20508H8.29688C8.06484 6.20508 7.875 6.39492 7.875 6.62695V11.9531C7.875 12.1852 8.06484 12.375 8.29688 12.375H9.70312C9.93516 12.375 10.125 12.1852 10.125 11.9531Z" fill="#2563EB"/>
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1">
                                <h1 class="text-base font-bold lg:text-base">{{$urlCourse->durasi_video}}</h1>
                                <p class="text-sm text-[#94A3B8]">Durasi Video</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full p-4 border rounded-xl">
                        <div class="flex gap-4">
                            <div class="flex items-center justify-center w-12 h-12 p-3 bg-violet-100 rounded-xl">
                               <svg width="80%" style="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#fire_clip0-4287-498)">
                                    <path d="M9.84375 0.838851C9.84375 0.00213175 8.76621 -0.31322 8.2916 0.380413C3.9375 6.74475 10.125 7.03127 10.125 10.125C10.125 11.3776 9.1016 12.3912 7.84512 12.3747C6.60867 12.3589 5.625 11.3281 5.625 10.0916V7.08541C5.625 6.32252 4.69441 5.95233 4.16848 6.50534C3.22734 7.49393 2.25 9.18741 2.25 11.25C2.25 14.972 5.27801 18 9 18C12.722 18 15.75 14.972 15.75 11.25C15.75 5.26327 9.84375 4.46487 9.84375 0.838851Z" fill="#7C3AED"/>
                                    </g>
                                    <defs>
                                    <clipPath id="fire_clip0-4287-498">
                                    <rect width="18" height="18" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1">
                                <h1 class="text-base font-bold lg:text-base">{{$urlCourse->tingkat_kesulitan}}</h1>
                                <p class="text-sm text-[#94A3B8]">Tingkat Kesulitan</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full p-4 border rounded-xl">
                        <div class="flex gap-4">
                            <div class="flex items-center justify-center w-12 h-12 p-3 bg-yellow-100 rounded-xl">
                                <svg width="80%" style="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.125 16.3125C1.125 17.2441 1.88086 18 2.8125 18H15.1875C16.1191 18 16.875 17.2441 16.875 16.3125V6.75H1.125V16.3125ZM12.375 9.42188C12.375 9.18984 12.5648 9 12.7969 9H14.2031C14.4352 9 14.625 9.18984 14.625 9.42188V10.8281C14.625 11.0602 14.4352 11.25 14.2031 11.25H12.7969C12.5648 11.25 12.375 11.0602 12.375 10.8281V9.42188ZM12.375 13.9219C12.375 13.6898 12.5648 13.5 12.7969 13.5H14.2031C14.4352 13.5 14.625 13.6898 14.625 13.9219V15.3281C14.625 15.5602 14.4352 15.75 14.2031 15.75H12.7969C12.5648 15.75 12.375 15.5602 12.375 15.3281V13.9219ZM7.875 9.42188C7.875 9.18984 8.06484 9 8.29688 9H9.70312C9.93516 9 10.125 9.18984 10.125 9.42188V10.8281C10.125 11.0602 9.93516 11.25 9.70312 11.25H8.29688C8.06484 11.25 7.875 11.0602 7.875 10.8281V9.42188ZM7.875 13.9219C7.875 13.6898 8.06484 13.5 8.29688 13.5H9.70312C9.93516 13.5 10.125 13.6898 10.125 13.9219V15.3281C10.125 15.5602 9.93516 15.75 9.70312 15.75H8.29688C8.06484 15.75 7.875 15.5602 7.875 15.3281V13.9219ZM3.375 9.42188C3.375 9.18984 3.56484 9 3.79688 9H5.20312C5.43516 9 5.625 9.18984 5.625 9.42188V10.8281C5.625 11.0602 5.43516 11.25 5.20312 11.25H3.79688C3.56484 11.25 3.375 11.0602 3.375 10.8281V9.42188ZM3.375 13.9219C3.375 13.6898 3.56484 13.5 3.79688 13.5H5.20312C5.43516 13.5 5.625 13.6898 5.625 13.9219V15.3281C5.625 15.5602 5.43516 15.75 5.20312 15.75H3.79688C3.56484 15.75 3.375 15.5602 3.375 15.3281V13.9219ZM15.1875 2.25H13.5V0.5625C13.5 0.253125 13.2469 0 12.9375 0H11.8125C11.5031 0 11.25 0.253125 11.25 0.5625V2.25H6.75V0.5625C6.75 0.253125 6.49687 0 6.1875 0H5.0625C4.75312 0 4.5 0.253125 4.5 0.5625V2.25H2.8125C1.88086 2.25 1.125 3.00586 1.125 3.9375V5.625H16.875V3.9375C16.875 3.00586 16.1191 2.25 15.1875 2.25Z" fill="#D97706"/>
                                </svg>
                            </div>

                            <div class="flex flex-col gap-1">
                                <h1 class="text-base font-bold lg:text-base">1 Sep 2024</h1>
                                <p class="text-sm text-[#94A3B8]">Tanggal Posting</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="deskripsi-section" class="flex flex-col gap-6">
                    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px">
                            <li class="me-2">
                                <button class="inline-block p-4 text-[#3BBD9C] border-b-2 border-[#3BBD9C] rounded-t-lg active dark:text-[#3BBD9C] dark:border-[#3BBD9C]" aria-current="page">Deskripsi</button>
                            </li>
                            <li class="me-2">
                                <button id="materiBtn" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">Materi & Latihan Soal</button>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-2 lg:gap-4">
                        <h1 class="text-lg font-bold lg:text-xl">Deskripsi Video</h1>
                        <p class="text-base text-[#94A3B8] font-normal leading-relaxed">
                        <span id="deskripsi">{{$urlCourse->deskripsi}}</span>
                        <span id="toggleButton" class="text-[#3ABE9C] text-bold cursor-pointer">Selanjutnya</span>
                        </p>
                    </div>
                </div>

                <div id="materi-section" class="hidden gap-6 ">
                    <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px">
                            <li class="me-2">
                                <button id="deskripsiBtn" class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" aria-current="page">Deskripsi</button>
                            </li>
                            <li class="me-2">
                                <button class="inline-block p-4 text-[#3BBD9C] border-b-2 border-[#3BBD9C] rounded-t-lg active dark:text-[#3BBD9C] dark:border-[#3BBD9C]">Materi & Latihan Soal</button>
                            </li>
                        </ul>
                    </div>

                    <div class="flex flex-col gap-2 lg:flex-row lg:gap-4">

                        <div class="flex flex-col w-full gap-4 px-8 py-8 border border-slate-200 lg:w-[300px] rounded-xl">
                            <div class="p-3 bg-red-100 rounded-lg w-fit">
                                <svg class="w-5 h-5 text-red-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 17v-5h1.5a1.5 1.5 0 1 1 0 3H5m12 2v-5h2m-2 3h2M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m6 4v5h1.375A1.627 1.627 0 0 0 14 15.375v-1.75A1.627 1.627 0 0 0 12.375 12H11Z"/>
                                </svg>
                            </div>

                             <p class="font-bold text-slate-900">Materi Pembelajaran</p>

                            <a href="{{$urlCourse->materi}}" target="_blank" type="button" class="text-white w-full bg-[#3BBD9C] hover:bg-[#1b5546] focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center me-2 dark:bg-[#3BBD9C] dark:hover:bg-[#3BBD9C] ">


                                <svg class="w-4 h-4 text-white me-2 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V4M7 14H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2m-1-5-4 5-4-5m9 8h.01"/>
                                </svg>

                            Download
                            </a>
                        </div>

                        <div class="flex flex-col w-full gap-4 px-8 py-8 border border-slate-200 lg:w-[300px] rounded-xl">
                            <div class="p-3 bg-blue-100 rounded-lg w-fit">
                                <svg class="w-5 h-5 text-blue-600 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/>
                                </svg>
                            </div>

                             <p class="font-bold text-slate-900">Latihan Soal</p>

                            <a href="{{$urlCourse->kuis}}" target="_blank" type="button" class="text-white w-full bg-[#3BBD9C] hover:bg-[#1b5546] focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex justify-center items-center me-2 dark:bg-[#3BBD9C] dark:hover:bg-[#3BBD9C] ">
                                <svg class="w-4 h-4 text-white me-2 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                            Isi Soal
                            </a>
                        </div>

                    </div>
                </div>

            </div>
</div>

<script>
  const deskripsiText = `{{$urlCourse->deskripsi}}`; // Gantikan dengan teks yang akan dipotong
  const deskripsi = document.getElementById('deskripsi');
  const toggleButton = document.getElementById('toggleButton');
  let isExpanded = false; // Variabel untuk melacak apakah teks telah diperluas

  // Fungsi untuk memotong dua kalimat terakhir
  function truncateSentences(text, numSentencesToRemove) {
    const sentences = text.match(/[^.!?]+[.!?]*/g); // Pisahkan berdasarkan kalimat
    if (sentences.length > numSentencesToRemove) {
      return sentences.slice(0, -numSentencesToRemove).join(' ') + '...'; // Gabungkan kembali tanpa dua kalimat terakhir
    }
    return text;
  }

  // Tampilkan teks yang sudah dipotong
  deskripsi.textContent = truncateSentences(deskripsiText, 2);

  toggleButton.addEventListener('click', function() {
    // Periksa apakah teks sudah diperluas
    if (!isExpanded) {
      deskripsi.textContent = deskripsiText; // Tampilkan teks lengkap
      toggleButton.textContent = 'Lebih Sedikit'; // Ubah teks tombol
    } else {
      deskripsi.textContent = truncateSentences(deskripsiText, 2); // Tampilkan teks yang dipotong
      toggleButton.textContent = 'Selanjutnya'; // Kembalikan teks tombol
    }
    isExpanded = !isExpanded; // Ubah status diperluas
  });

  //kondisi untuk tab
  $('#deskripsiBtn').click(function(){
    $('#deskripsi-section').removeClass('hidden');
    $('#materi-section').addClass('hidden');
  });

  $('#materiBtn').click(function(){
    $('#materi-section').removeClass('hidden');
    $('#materi-section').addClass('flex flex-col');
    $('#deskripsi-section').addClass('hidden');
  });
</script>
