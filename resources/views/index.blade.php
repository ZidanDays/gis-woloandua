@extends('layouts-landing.main')

@section('container')


  <!-- billboard start  -->
  <section id="billboard">
    <div class="container ">
      <div class="row flex-lg-row-reverse align-items-center ">

        <div class="col-lg-6">
          <br>
<br>
          <img src="assets-landing/images/billboard.png" style="border-radius: 10px" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
            height="500" loading="lazy">
        </div>

        <div class="col-lg-6">
            <h1 class="text-capitalize lh-1 my-3">Sistem Informasi Geografis Zona Nilai Tanah Woloan Dua</h1>
            <p class="lead">Dapatkan data zona nilai tanah Woloan Dua secara akurat dan real-time untuk mempermudah perencanaan tata ruang dan penilaian lahan. Sistem kami mendukung pengambilan keputusan yang lebih baik bagi masyarakat dan pemerintah.</p>
            
          <nav class="navbar navbar-expand-lg billboard-nav">
            <div class="container billboard-search p-0">

              {{-- <div class="row billboard-row">
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Purpose">
                    <option selected>Purpose</option>
                    <option value="1">Buy</option>
                    <option value="2">Rent</option>
                    <option value="3">Sell</option>
                    <option value="4">Something else here</option>

                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Location">
                    <option selected>Location</option>
                    <option value="1">Texas</option>
                    <option value="2">Miami</option>
                    <option value="3">Chicago</option>
                    <option value="4">New York</option>
                    <option value="5">Something else here</option>
                  </select>
                </div>
                <div class="col-lg-3 billboard-select">
                  <select class="form-select mb-2 mb-lg-0" aria-label="Type">
                    <option selected>Type</option>
                    <option value="1">House</option>
                    <option value="2">Appartment</option>
                    <option value="3">Villa</option>
                    <option value="4">Loft</option>
                    <option value="5">Bungalow</option>
                    <option value="3">Something else here</option>
                  </select>
                </div>

                <div class="col-lg-3 billboard-btn">
                  <button type="submit" class="btn btn-primary btn-lg billboard-search">Search</button>
                </div>
              </div> --}}


            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>





  <!--About us start  -->
  <section id="about-us">
    <div class="container">
      <div class="row py-lg-5">
  
        <h2 class="text-capitalize text-center m-0 py-lg-5">Mengapa Memilih Kami</h2>
  
        <div class="text-center col-lg-4">
          <img src="assets-landing/images/search.png" class="bd-placeholder-img rounded-circle" alt="Data Akurat" width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Data Akurat</h4>
          <p>Sistem kami menyediakan data zona nilai tanah yang akurat dan terpercaya, membantu Anda memahami nilai properti secara menyeluruh di Woloan Dua.</p>
        </div>
  
        <div class="text-center col-lg-4">
          <img src="assets-landing/images/price.png" class="bd-placeholder-img rounded-circle" alt="Harga Terjangkau" width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Akses Mudah</h4>
          <p>Platform kami memberikan akses mudah dan cepat untuk mendapatkan informasi terkait nilai tanah, memudahkan Anda dalam proses pengambilan keputusan.</p>
        </div>
  
        <div class="text-center col-lg-4">
          <img src="assets-landing/images/time.png" class="bd-placeholder-img rounded-circle" alt="Efisien" width="140" height="140" loading="lazy">
          <h4 class="fw-normal mt-5">Efisien & Cepat</h4>
          <p>Dengan proses yang efisien, sistem kami menyediakan data nilai tanah dengan cepat sehingga mempermudah analisis dan pengelolaan properti.</p>
        </div>
  
      </div>
    </div>
  </section>

      <!-- Testimonial start  -->
  <section id="testimonial">
    <div class="container my-5">
  
      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">
  
          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="assets-landing/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">"Sistem GIS Zona Nilai Tanah Woloan Dua sangat membantu kami dalam memahami nilai tanah di daerah kami dengan mudah dan akurat. Sangat bermanfaat untuk pengambilan keputusan investasi."</p>
  
                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Andi Setiawan</p>
                    <p class="">Pengusaha Properti</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="assets-landing/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">"Dengan adanya informasi zona nilai tanah yang transparan, kami dapat merencanakan pembangunan yang lebih efektif di Woloan Dua. Ini adalah sistem yang sangat inovatif."</p>
  
                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Budi Santoso</p>
                    <p class="">Pengembang Infrastruktur</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="swiper-slide">
            <div class="row my-5 py-lg-5">
              <div class="col-md-8 mx-auto">
                <img src="assets-landing/images/quote.png" class="rounded mx-auto d-inline" alt="...">
                <p class="testimonial-p mt-4">"Akses ke data nilai tanah yang mudah digunakan ini benar-benar membantu kami memahami potensi lahan dengan lebih baik di Woloan Dua. Sangat direkomendasikan!"</p>
  
                <div class="row">
                  <div class="col-md-8">
                    <p class="pt-5 mb-1">Siti Nurhaliza</p>
                    <p class="">Konsultan Real Estate</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="testimonial-swiper-button col-md-3 position-absolute">
          <div class="swiper-button-prev testimonial-arrow"></div>
          <div class="arrow-divider"> | </div>
          <div class="swiper-button-next testimonial-arrow"></div>
        </div>
  
      </div>
    </div>
  </section>
@endsection