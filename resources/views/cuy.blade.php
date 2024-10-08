<x-landing-page>
  <style>
    .gallery-item {
      margin-bottom: 20px;
    }
    .gallery-item img {
    object-fit: cover;
    width: 100%;
    height: 400px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .gallery-item img:hover {
      transform: scale(1.05);
    }
  </style>
  <div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" style="background-image: url({{ asset('template/images/bg_home2.jpg') }})">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-5" data-aos="fade-right">
            <h1 class="mb-3 text-white">Wisata Buken Cuy</h1>
            <p>Nikmati Petualangan di Taman Satwa dan Segarkan Diri di Kolam Renang</p>
            <p class="d-flex align-items-center">
              {{-- <a href="https://vimeo.com/191947042" data-fancybox class="play-btn-39282 mr-3"><span class="icon-play"></span></a>  --}}
              <a class="btn btn-primary" href="payment-ticket">Beli Tiket Disini</a>
              {{-- <span class="small">Watch the video</span> --}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="site-section py-5" id="about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="heading-39101 mb-5">
            <span class="subtitle-39191">Tentang Kami</span>
            <h3>Kenali Lebih Dekat Tempat Wisata dan Pengalaman yang Kami Tawarkan</h3>
          </div>
          <p>Terletak di jantung Purwokerto, Wisata Buken (Bukit Kenangan) menawarkan pengalaman wisata alam yang menyegarkan bagi keluarga dan pecinta alam. Dengan suasana yang sejuk dan pemandangan alam yang memukau, tempat ini menghadirkan kombinasi sempurna antara rekreasi dan edukasi.</p>
          {{-- <p>Tempat unggulan kami, Taman Satwa dan Kolam Renang, menjadikan Wisata Buken destinasi favorit bagi pengunjung yang ingin menikmati keindahan satwa sambil bersantai di kolam yang bersih dan menyegarkan. Tidak hanya itu, kami juga menyediakan berbagai spot foto yang instagramable dan fasilitas yang nyaman untuk seluruh keluarga.</p> --}}
          <p>Dari perjalanan bersama teman hingga petualangan bersama keluarga, Wisata Buken adalah tempat di mana kenangan indah tercipta. Kami bangga menjadi bagian dari liburan tak terlupakan Anda.</p>
        </div>
        <div class="col-md-6" data-aos="fade-right">
          <img src="images/traveler.jpg" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="site-section" id="facility">

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <div class="heading-39101 mb-5">
            <span class="subtitle-39191">Fasilitas dan Pengalaman</span>
        <h3>Temukan Beragam Aktivitas dan Kenyamanan di Sini</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{ asset("template/images/about_2.png") }}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <h2 class="mb-1"><a href="trip-single.html">Taman Satwa</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{ asset("template/images/about_2.png") }}" alt="Image" class="img-fluid">

            </div>
            <div class="listing-item-content">
              <h2 class="mb-1"><a href="trip-single.html">Kolam Renang</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{ asset("template/images/about_3.jpg") }}" alt="Image" class="img-fluid">
           

            </div>
            <div class="listing-item-content">
              <h2 class="mb-1"><a href="trip-single.html">Taman Kanak-Kanak</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9pi7bqIeTBxfv18jv7ryFuooOylYj6wd6zw&s" alt="Image" class="img-fluid">

            </div>
            <div class="listing-item-content">
              <h2 class="mb-1"><a href="trip-single.html">Tempat Makan</a></h2>
            </div>
          </div>
        </div>
{{-- 
        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{ asset("template/images/img_1.jpg") }}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="#">$330.00</a>
              <h2 class="mb-1"><a href="trip-single.html">Consectetur adipisicing</a></h2>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{ asset("template/images/img_1.jpg") }}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              <a class="px-3 mb-3 category bg-primary" href="#">$450.00</a>
              <h2 class="mb-1"><a href="trip-single.html">Consectetur Amet</a></h2>
            </div>
          </div>
        </div> --}}

      </div>

    </div>
  </div>

  <div class="container my-5" id="gallery">
    <div class="heading-39101 mb-5 text-center">
      <span class="subtitle-39191">Galeri Cuy</span>
      <h3>Lihat Aktivitas dan Fasilitas yang Kami Tawarkan</h3>
    </div>
    <div class="row mx-auto">
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1rDa5LHl8AGNMUpaFywo_yL7Ko8r4BFlOaQ&s" alt="Image 1">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL8gTMQ-iHWlxYInGzaPakAuDBxrdzewJJ7g&s" alt="Image 2">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="{{ asset('template/images/about_1.jpeg') }}" alt="Image 3">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://dolanbanyumas.banyumaskab.go.id/assets/gambar_objek/pagubugan-melung.jpeg" alt="Image 4">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://dolanbanyumas.banyumaskab.go.id/assets/gambar_objek/waroenk-ora-umum.jpg" alt="Image 5">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://dolanbanyumas.banyumaskab.go.id/assets/gambar_objek/coffee-shop-karaoke-doelbada.jpg" alt="Image 6">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://lh5.googleusercontent.com/p/AF1QipM7n_SMXvcjwoUU8JYZh_6ZTtsK02qg6147Mv32=w608-h351-n-k-no" alt="Image 7">
      </div>
      <div class="col-lg-3 col-md-4 col-12 gallery-item">
        <img  src="https://lh5.googleusercontent.com/p/AF1QipMGGmDUj9PUz0ptc4f4vr-T3OXXQWxFRFpQo0pG=w608-h351-n-k-no" alt="Image 8">
      </div>
    </div>
  </div>

  
  <div class="container">
   



  



  <div class="site-section" id="news">

    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-10">
          <div class="heading-39101 mb-5">
            <span class="subtitle-39191">Berita</span>
            <h3>Dapatkan Update Berita Terbaru Disini</h3>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach ($data as $val)
        <a href="/news/{{ $val->id }}">
          <div class="col-lg-4 col-md-6 mb-4" style="cursor: pointer">
            <div class="post-entry-1 h-100">
          
              <div class="post-entry-1-contents">
                
                <h2><a href="/news/{{ $val->id }}">{{ $val->title }}</a></h2>
                <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($val->created_at)->format('d F Y') }}<span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p> {!! Str::limit(strip_tags($val->news), 150, '...')  !!}</p>
              </div>
            </div>
          </div>
        </a>
          
        @endforeach
       

        
      </div>
    </div>
  </div>
  

  <div class="site-section " id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126204.44700519809!2d109.2425821!3d-7.3588069!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70800f00000001%3A0x1234567890abcdef!2sYour%20Location!5e0!3m2!1sen!2sus!4v1607895385435"
          width="100%"
          height="450"
          style="border:0;"
          allowfullscreen=""
          loading="lazy">
        </iframe>
        
        </div>
        <div class="col-md-4">
          <div class="bg-white p-3 p-md-5">
            <h3 class="text-black mb-4">Contact Info</h3>
            <ul class="list-unstyled footer-link">
              <li class="d-block mb-3">
                <span class="d-block text-black">Address:</span>
                <span>34 Street Name, City Name Here, United States</span>
              </li>
              <li class="d-block mb-3">
                <span class="d-block text-black">Phone:</span>
                <span>+1 242 4942 290</span>
              </li>
              <li class="d-block mb-3">
                <span class="d-block text-black">Email:</span>
                <span>info@yourdomain.com</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</x-landing-page>