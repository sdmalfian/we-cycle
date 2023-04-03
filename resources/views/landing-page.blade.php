<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>
      We Cycle
   </title>
   <meta content="" name="keywords" />
   <meta content="" name="description" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   {{-- Typography --}}
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
      rel="stylesheet">
   {{-- Template Stylesheet --}}
   <link href="{{ asset('we-cycle-app/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
   <link href="{{ asset('we-cycle-app/bootstrap/css/main.css') }}" rel="stylesheet" />
   {{-- Libraries --}}
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

</head>

<body>
   <main class="my-0 mx-auto min-h-full max-w-screen-sm">
      <header class="header-container gradient-brand">
         <div class="header-wrapper">
            <div class="container text-center">
               <img src="{{ asset('images/logo-white.png') }}" alt="we-cycle-logo" srcset="">
            </div>
         </div>
      </header>
      <main id="home-page">
         <!-- Hero -->
         <section class="hero text-center bg-image">
            <div class="d-flex justify-content-center align-items-center h-100">
               <div class="text-white">
                  <img src="{{ asset('images/logo-hero.png') }}" alt="we-cycle-brand">
                  <h5 class="text-center pt-2">Kelola sampah jadi mudah</h5>
               </div>
            </div>
         </section>
         <!-- Hero End -->
         {{-- Slider --}}
         <section class="container pt-5 px-4">
            <div class="row text-center">
               <div class="col">
                  <!-- Swiper -->
                  <div class="swiper sampahSlider">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <img class="w-100" src="{{ asset('images/kaos.png') }}" alt="test" srcset="">
                        </div>
                        <div class="swiper-slide">
                           <img class="w-100" src="{{ asset('images/kaos.png') }}" alt="test" srcset="">
                        </div>
                        <div class="swiper-slide">
                           <img class="w-100" src="{{ asset('images/kaos.png') }}" alt="test" srcset="">
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <h1 class="mt-4 fw-bold mb-0">
                     Halo!
                  </h1>
                  <h3 class="fw-bold">
                     Selamat Datang di We-Cycle!
                  </h3>
                  <p class="mt-3">
                     Ayo Tukarkan Sampahmu Dan Dapatkan <br> Reward Menarik Sekarang Juga!
                  </p>
               </div>
            </div>
            {{-- Login action --}}
            <div class="row">
               <div class="col">
                  <div class="d-grid gap-2">
                     <a class="btn btn-primary rounded-pill fw-bold my-2" href="#">Login</a>
                     <a class="btn btn-outline-primary rounded-pill fw-bold" href="#">Buat Akun</a>
                  </div>
               </div>
            </div>
         </section>
         {{-- Alur penanganan Sampah --}}
         <section class="container mt-5 pt-2 px-4">
            <div class="row">
               <div class="col">
                  <h4 class="fw-bold">
                     Alur Penanganan Sampah<br>
                     Oleh <span style="color: #407BFF">We-Cycle</span>
                  </h4>
                  <img class="w-100" src="{{ asset('images/waste-art-1.png') }}" alt="Alur Penanganan Sampah" srcset="">
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="card mb-1 landing-card-shadow border-light">
                     <div class=" row g-0">
                        <div class="col-sm-3 ps-3 pe-2 d-flex align-items-center text-center">
                           <img class="w-100 px-2" src="{{ asset('images/icons/peoples.png') }}"
                              class="img-fluid rounded-start" alt="peoples">
                        </div>
                        <div class="col-sm-9">
                           <div class="card-body">
                              <h5 class="card-title fw-bold">
                                 Pemberdayaan Masyarakat
                              </h5>
                              <p class="card-text">
                                 Mengajak Komunitas Masyarakat Mengikuti Campaign We-Cycle
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-1 landing-card-shadow border-light">
                     <div class=" row g-0">
                        <div class="col-sm-3 ps-3 pe-2 d-flex align-items-center text-center">
                           <img class="w-100 px-3" src="{{ asset('images/icons/book.png') }}"
                              class="img-fluid rounded-start" alt="education">
                        </div>
                        <div class="col-sm-9">
                           <div class="card-body">
                              <h5 class="card-title fw-bold">
                                 Edukasi
                              </h5>
                              <p class="card-text">
                                 Mengajarkan Ilmu & Keterampilan Terkait Kepada Masyarakat
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-1 landing-card-shadow border-light">
                     <div class=" row g-0">
                        <div class="col-sm-3 ps-3 pe-2 d-flex align-items-center text-center">
                           <img class="w-100 px-3" src="{{ asset('images/icons/gift.png') }}"
                              class="img-fluid rounded-start" alt="reward">
                        </div>
                        <div class="col-sm-9">
                           <div class="card-body">
                              <h5 class="card-title fw-bold">
                                 Reward
                              </h5>
                              <p class="card-text">
                                 Masyarakat mendapatkan Reward Berdasarkan Kontribusinya
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card mb-1 landing-card-shadow border-light">
                     <div class=" row g-0">
                        <div class="col-sm-3 ps-3 pe-2 d-flex align-items-center text-center">
                           <img class="w-100 px-3" src="{{ asset('images/icons/cycle.png') }}"
                              class="img-fluid rounded-start" alt="economic-cycle">
                        </div>
                        <div class="col-sm-9">
                           <div class="card-body">
                              <h5 class="card-title fw-bold">
                                 Siklus Ekonomi
                              </h5>
                              <p class="card-text">
                                 Menjalankan Roda Ekonomi Melalui Transaksi di We-Cycle
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         {{-- ACHIEVEMENT --}}
         <section class="mt-4 pb-4" style="background-color: #407BFF">
            <div class="row pt-5">
               <h4 class="fw-bold text-center text-light">
                  ACHIEVEMENT
               </h4>
               <div class="col-sm-6 pt-5 text-center">
                  <img src="{{ asset('images/icons/users.png') }}" alt="users">
                  <h5 class="text-light fw-bold mb-0 mt-1">1000</h5>
                  <p class="text-light fw-medium">User Baru</p>
               </div>
               <div class="col-sm-6 pt-5 text-center">
                  <img src="{{ asset('images/icons/weight.png') }}" alt="weight">
                  <h5 class="text-light fw-bold mb-0 mt-1">10 Ton</h5>
                  <p class="text-light fw-medium">Sampah dikelola</p>
               </div>
               <div class="col-sm-6 pt-5 text-center">
                  <img src="{{ asset('images/icons/users.png') }}" alt="users">
                  <h5 class="text-light fw-bold mb-0 mt-1">25</h5>
                  <p class="text-light fw-medium">Mitra UMKM</p>
               </div>
               <div class="col-sm-6 pt-5 text-center">
                  <img src="{{ asset('images/icons/trash.png') }}" alt="trash">
                  <h5 class="text-light fw-bold mb-0 mt-1">100</h5>
                  <p class="text-light fw-medium">Bank Sampah Unit</p>
               </div>
            </div>
         </section>
         {{-- PENYETORAN SAMPAH --}}
         <section class="container mt-4 pt-2 px-4">
            <div class="row">
               <div class="col-sm-12 text-center">
                  <h4 class="fw-bold">
                     Penyetoran Sampah Ke <span style="color: #407BFF">We-Cycle</span>
                  </h4>
                  <img class="w-100 px-5 mt-3" src="{{ asset('images/waste-management.png') }}"
                     alt="alur penyetoran sampah" srcset="">
               </div>
               <div class="col-sm-12">
                  <ol class="list-group list-group-numbered fw-bold">
                     <li class="list-group-item d-flex border-0 justify-content-between align-items-start ">
                        <div class="ms-2 me-auto fw-normal">
                           <div class="fw-bold">
                              Setor Langsung ke Bank Sampah
                           </div>
                           <ul class="list-group border-light">
                              <li class="list-group-item border-0">
                                 <img src="{{ asset('images/icons/location-sm.png') }}" alt="location">
                                 Jln. Sengkuni No. 07, Depok Selatan, Banten
                              </li>
                              <li class="list-group-item border-0">
                                 Senin-Jum'at : 08.00 - 15.00 WIB <br>
                                 Sabtu : 08.00 - 13.00 WIB <br>
                                 Minggu/Tanggal Merah
                                 <span class="fw-bold" style="color: red"> LIBUR</span>
                              </li>
                           </ul>
                        </div>
                     </li>
                     <li class="list-group-item d-flex border-0 justify-content-between align-items-start">
                        <div class="ms-2 me-auto fw-normal">
                           <div class="fw-bold">
                              Setor ke Bank Sampah Keliling
                           </div>
                           Jadwal bank sampah keliling di update setiap minggu dan dapat diakses di highlight Instagram
                           <i>@we_cycle</i>
                        </div>
                     </li>
                     <li class="list-group-item d-flex border-0 justify-content-between align-items-start">
                        <div class="ms-2 me-auto fw-normal">
                           <div class="fw-bold">
                              Kirim Menggunakan Ekspedisi/Gosend dll
                           </div>
                           Pengiriman menggunakan ekspedisi hanya berlaku untuk sampah anorganik yang sudah terpilah
                           (plastik, kaca, kertas, logam, limbah tekstil, e-waste).<br>
                           <span class="fw-bold">
                              *Ongkos kirim ditanggung oleh pengirim
                           </span>
                        </div>
                     </li>
                     <li class="list-group-item d-flex border-0 justify-content-between align-items-start">
                        <div class="ms-2 me-auto fw-normal">
                           <div class="fw-bold">
                              Penimbangan akan dilakukan ditempat
                           </div>
                           Penimbangan akan dilakukan oleh petugas. Untuk selanjutnya nasabah mendapatkan
                           <span class="fw-bold">
                              form penimbangan
                           </span>
                        </div>
                     </li>
                     <li class="list-group-item d-flex border-0 justify-content-between align-items-start">
                        <div class="ms-2 me-auto fw-normal">
                           <div class="fw-bold">
                              Nasabah Mendapat Rekap Hasil
                           </div>
                           Nasabah akan menerima<strong> hasil penimbangan </strong>beserta jumlah pembayaran yang
                           didapatkan setelah penimbangan.
                        </div>
                     </li>
                  </ol>
               </div>
            </div>
         </section>
      </main>
   </main>
   <script src="{{ asset('we-cycle-app/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
   <!-- Initialize Swiper -->
   <script>
      var swiper = new Swiper(".sampahSlider", {
      pagination: {
       el: ".swiper-pagination",
      },
      });
   </script>
</body>

</html>