<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- font awesome --}}
        <script src="https://kit.fontawesome.com/1e0ad3d965.js" crossorigin="anonymous"></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
        <link rel="icon" href="{{ asset('icon.png') }}">
        
        <!-- Google Fonts -->
        <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <a class="navbar-brand" href="#"><img src="{{ asset('icon.png') }}" width="100"></a>
      <button class="navbar-toggler" type="button" onclick="openSidenav();">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse font-weight-bold" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link nav-home border-right-low" href="/">HOME</a>
          </li>
        </ul>
        <span class="navbar-text">
          <ul class="navbar-nav ml-auto">
            <!-- Category -->
            <li class="nav-item nav-item-submenu">
              <a class="nav-link nav-other" href="javascript:;">KATEGORI <span class="fa fa-chevron-down ml-2"></span></a>

              <!-- Category - Submenu -->
              <ul class="submenu">
                @foreach ($categories as $category)
                  <li><a class="nav-link" href="{{route('house.list.category', $category->id)}}">{!! $category->name !!}</a></li>
                @endforeach
              </ul>
              <!-- End Category - Submenu -->
            </li>
            <!-- End Category -->
            
            <!-- Category -->
            <li class="nav-item nav-item-submenu">
              <a class="nav-link nav-other" href="javascript:;">LOKASI <span class="fa fa-chevron-down ml-2"></span></a>

              <!-- Location - Submenu -->
              <ul class="submenu">
                @foreach ($locations as $location)
                  <li><a class="nav-link" href="{{route('house.list.location', $location->id)}}">{!! $location->name !!}</a></li>
                @endforeach
              </ul>
              <!-- End Location - Submenu -->
            </li>
            <!-- End Location -->
          </ul>
        </span>
      </div>
    </nav>
    <!-- Navbar -->
    <div id="sidenav-menu" class="m-sidenav">
      <div class="close" onclick="closeSidenav();">&times;</div>
      <div class="sidenav-header">
          <h2>MENU</h2>
      </div>
      <div class="sidenav-content">
          <ul>
              <li class="menu-title"><a href="javascript:;">KATEGORI</a></li>
              @foreach ($categories as $category)
                <li><a class="" href="{{route('house.list.category', $category->id)}}">{!! $category->name !!}</a></li>
              @endforeach
              <li class="menu-title"><a href="javascript:;">LOKASI</a></li>
              @foreach ($locations as $location)
                <li><a class="" href="{{route('house.list.location', $location->id)}}">{!! $location->name !!}</a></li>
              @endforeach
          </ul>
      </div>
      <div class="sidenav-footer">
          <a href="javascript:;" class="sidenav-close" onclick="closeSidenav();"><span class="fa fa-long-arrow-alt-left mr-1"></span> tutup</a>
      </div>
    </div>
    
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid my-0 py-0">
      <img src="{{ asset('images/Foto-Akad-1.png') }}" class="jumbotron-img">
    </div>
    <!-- Jumbotron -->

    <div class="container-fluid">
    <!-- About -->
      <div class="row text-center mb-0 bg-white">
        <div class="col-lg">
          <img src="{{ asset('icon.png') }}">
        </div>
      </div>

      <div class="row justify-content-center bg-white">
        <div class="col-lg-8 text-center text-cyan-blue">
          <h5 class="font-weight-bold">INDONESIA PROPERTY SYARIAH</h5>
          <hr class="divider-h5">
        </div>
      </div>
      
      <div class="row justify-content-center bg-white">
        <div class="col-lg-8 text-center text-cyan-blue">
          <p class="font-weight-bold">
            Rahasia memiliki rumah tanpa melibatkan pihak Bank atau Lembaga Pembiayaan apapun itu bentuknya, tanpa was-was kejaran debt kolektor dan terhindar dari bunga RIBA yang ditantang PERANG oleh Allah Subhanahu Wa Ta'ala dan Rasul-Nya
          </p>
        </div>
      </div>

      <div class="row justify-content-center has-bg" style="background-image: url({{asset('images/img_background/sudah_saatnya_sahabat_bisa_memiliki.png')}});">
        <div class="col-lg-8 pt-4 text-center">
          <p class="font-weight-bold text-white">
            Sudah saatnya Sahabat bisa memiliki rumah dengan cara yang insyaAllah HALAL & BERKAH dengan lingkungan tetangga yang berkualitas.
          </p>
        </div>
      </div>

      <div class="row justify-content-center bg-white">
        <div class="col-lg-8 text-center pt-4 text-blue-navy">
          <p class="font-weight-bold">
            Sering kali kebanyakan pencari rumah saat ini membeli rumah melalui KPR BANK yang di dalamnya terdapat unsur RIBA misalnya seperti bunga dan denda keterlambatan pembayaran
          </p>
          <p class="font-weight-bold">
            <span class="text-black">Padahal</span>, MUI <span class="text-black">telah mengeluarkan fatwa bahwa hukum</span> bunga (interest) <span class="text-black">baik pada</span> Bank, Asuransi Pasar Modal, Pegadaian, Koperasi dan Lembaga Keuangan <span class="text-black">lainnya adalah</span> HARAM (RIBA).
          </p>
          <p class="text-black font-italic">
            "Keputusan Rapat Komisi Fatwa MUI, Tanggal 11 Dzulqa'idah 1424 / 03 Januari 2004; 28 Dzulqa'iqah 1424 / 17 Januari 2004 dan 05 Dzulqa'idah 1424 / 24 Januari 2004"
          </p>
        </div>
      </div>
      
      <div class="row justify-content-center py-4 has-bg" style="background-image: url({{ asset('images/img_background/Tahukahsahabat.png') }});">
        <div class="col-lg-8 text-white">
          <p class="text-center">
            <span class="text-yellow">Tahukah Sahabat?</span> Kelihatannya memang skema KPR Bank sangat membantu dan sangat menjadi solusi untuk memenuhi kebutuhan rumah untuk keluarga. Namun, <span class="text-yellow">kenyataannya</span> tidak sedikit nasabah KPR Bank harus <span class="text-yellow">merelakan rumahnya</span> karena <span class="text-yellow">ketidak sanggupan</span> membayar cicilan dikemudian harinya. Bahkan banyak <span class="text-yellow">kisah nyata</span> keluarga yang sering <span class="text-yellow">ditimpa musibah</span> atau keluarga menjadi tidak harmonis setelah melakukan transaksi akad RIBA ini. Karena bisa jadi <span class="text-yellow">akad RIBA</span> inilah salah satu faktor pengundang <span class="text-yellow">murka Allah</span> Subhanahu Wa Ta'ala. Na'udzubillahi min dzalik. 
          </p>

          <div class="row justify-content-end"> 
            <div class="col-sm-3 mb-2">
              <a href="https://wa.me/+6281315511500?text=Assalamu%27alaikum,%20saya%20mau%20tanya%20soal%20Indonesia%20Property%20Syariah.." class="px-4 btn btn-light wa-btn font-weight-bold rounded-pill shadow-whatsapp"><i class="fab fa-fw fa-whatsapp mr-2"></i> Whatsapp</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row justify-content-center pb-5 bg-white">
        <div class="col-lg-8 text-center pt-5">
          <img src="{{ asset('images/img_background/gambar_tanda_tanya.png') }}">
          <h5 class="mt-4 pt-4 pb-5 font-weight-bold">Pernah kah Sahabat mendengar hal-hal di bawah ini?</h5>
        </div>
      </div>
          
      <div class="row justify-content-center py-5 has-bg" style="background-image: url({{asset('images/img_background/pernahkah_sahabat_mendengar_hal_hal_di_bawah_ini.png')}});">
        <div class="col-lg-8">
          <ul class="list-style-none list-box">
            <li class="my-4">
              Sudah bertahun-tahun mencicil rumah namun saat hendak melunaskannya pokok hutang masih sangat besar?
            </li>
            <li class="my-4">
              Rumah diberi tanda cat / pilox yang bertandakan <span class="font-weight-bold font-italic">"Sedang dalam pengawasan bank"</span>
            </li>
            <li class="my-4">
              Melunaskan cicilan lebih cepat malah dikenakan pinalty
            </li>
            <li class="my-4">
              Saat hendak akad dikenakan biaya KPR yang besar dan wajib diasuransikan
            </li>
            <li class="my-4">
              Rumah dilelang tanpa ada pengembalian uang muka & cicilan yang sudah berjalan
            </li>
            <li class="my-4">
              Bahkan, sering tertimpa musibah atau keluarga jadi kurang harmonis setelah tinggal di rumah yang dibeli dengan cara RIBA
            </li>
          </ul>
        </div>
      </div>

      <div class="row justify-content-center py-5 custom-rounded-box">
        <div class="col-lg-8 p-5 text-center">
          <p class="font-weight-bold text-white">
            Jika Sahabat pernah mendengar atau mungkin mengalami langsung hal tersebut.. Berarti Sahabat harus simak skema kepemilikan rumah dengan cara yang insyaAllah HALAL & BERKAH ini!
          </p>
        </div>
      </div>
      <div class="row pb-2 pt-3 bg-blue-navy justify-content-end"> 
        <div class="col-sm-3 mb-2">
          <a href="https://wa.me/+6281315511500?text=Assalamu%27alaikum,%20saya%20mau%20tanya%20soal%20Indonesia%20Property%20Syariah.." class="px-4 btn btn-light wa-btn font-weight-bold rounded-pill shadow-whatsapp"><i class="fab fa-fw fa-whatsapp mr-2"></i> Whatsapp</a>
        </div>
      </div>

      <div class="row justify-content-center bg-white mt-5">
        <div class="col-lg-8 text-center">
          <div class="img-container-overflow">
            <img src="{{ asset('images/img_background/kenapa_harus_property_syariah.png') }}">
          </div>
        </div>
      </div>

      <div class="row justify-content-center bg-blue-navy text-white py-3">
        <div class="col-lg-8 text-center">
          <h5 class="font-weight-bold text-font-30">Kenapa harus Property Syariah?</h5>
        </div>
      </div>
      
      <div class="row justify-content-center py-5 has-bg" style="background-image: url({{ asset('images/img_background/kenapa_harus_prperty_syariah_1.png') }});">
        <div class="col-lg-8">
          <ul class="list-red-dot">
            <li>
              <p>
                <span class="font-weight-bold">Terhindar</span> dari dosa 
                <span class="font-weight-bold">RIBA</span>, satu-satunya dosa yang diancam 
                <span class="font-weight-bold">PERANG</span> oleh Allah.
              </p>
            </li>
            <li>
              <p>
                <span class="font-weight-bold">Nilai keberkahan</span> yang saat ini sangat sulit didapatkan.
              </p>
            </li>
            <li>
              <p>
                langsung ke Developer 
                <span class="font-weight-bold">tanpa Bank</span>
                atau Lembaga Pembiayaan apapun.</p>
            </li>
            <li>
              <p>
                <span class="font-weight-bold">Tanpa BI Checking</span> dan 
                <span class="font-weight-bold">tanpa biaya KPR</span> yang nilainya cukup besar.
              </p>
            </li>
            <li>
              <p>
                <span class="font-weight-bold">Tanpa ada Penalty</span> saat hendak akan melunaskan cicilan cepat lebih cepat
              </p>
            </li>
            <li>
              <p>
                <span class="font-weight-bold">Tanpa ada Denda</span> keterlambatan saat terjadi keterlambatan pembayaran.
              </p>
            </li>
            <li>
              <p><span class="font-weight-bold">Tanpa ada Sita</span> saat terjadi gagal bayar.</p>
            </li>
            <li>
             <p> Lingkungan yang <span class="font-weight-bold">berkualitas.</span> </p>
            </li>
            <li>
              <p> Membantu <span class="font-weight-bold">membangun peradaban</span> yang menanamkan nilai-nilai islami. </p>
            </li>
            <li>
              <p> 
                Solusi untuk Sahabat yang 
                <span class="font-weight-bold">bekerja</span> dibidang 
                <span class="font-weight-bold">informal.</span>
              </p>
            </li>
            <li>
              <p> Solusi untuk Sahabat yang memiliki kemampuan namun BI Checking jelek</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="row justify-content-center has-bg" style="background-image: url({{ asset('images/img_background/indonesia_property_syariah_hadir.png') }});">
        <div class="col-lg-8 text-center py-4">
          <hr class="divider-h4-white">
          <h4 class="font-weight-bold text-white">Indonesia Property Syariah</h4>
          <hr class="divider-h4-white">
          <p class="font-weight-bold text-white">
            Kami hadir untuk memberikan solusi untuk Sahabat dapat memiliki rumah dengan cara yang insyaAllah Halal & Berkah tanpa harus berdosa RIBA
          </p>
        </div>
      </div>
      
      <div class="row justify-content-center py-5 bg-white">
        <div class="col-lg-8 text-center">
          <img src="{{ asset('icon.png') }}">
          <h5 class="font-weight-bold text-font-30 mt-2">Kenapa Indonesia Property Syariah?</h5>
        </div>
      </div>

      <div class="row justify-content-center py-5 has-bg" style="background-image: url({{ asset('images/img_background/kenapa_indonesia_property_syariah.png') }});">
        <div class="col-lg-8">
          <ul class="list-white-dot">
            <li>Hanya menjual project-project dari Developer yang insyaAllah Aman dan Amanah.</li>
            <li>Hanya menjual project-project dari Developer yang sudah terbukti Track Recordnya dan Verifed</li>
            <li>Sahabat akan diberikan solusi yang terbaik sesuai dengan kemauan dan kapasitas yang Sahabat inginkan.</li>
            <li>Pelayanan full service dimana insyaaAllah akan didampingi mulai dari proses awal edukasi, survey lokasi, proses verifikasi, akad jual beli hingga serah terima kunci. Semua itu FREE sebagai bentuk pelayanan kami.</li>
          </ul>
        </div>
      </div>

      <div class="row pb-2 pt-3 bg-whitte justify-content-end"> 
        <div class="col-sm-3 mb-2">
          <a href="https://wa.me/+6281315511500?text=Assalamu%27alaikum,%20saya%20mau%20tanya%20soal%20Indonesia%20Property%20Syariah.." class="px-4 btn btn-success wa-btn font-weight-bold rounded-pill shadow-whatsapp"><i class="fab fa-fw fa-whatsapp"></i> Whatsapp</a>
        </div>
      </div>

      <div class="row justify-content-center py-4 has-bg" style="background-image: url({{ asset('images/img_background/indonesia_property_syariah_hadir.png') }});">
        <div class="col-lg-8 font-weight-bold text-center">
          <p class="text-white">
            <span class="text-yellow">Ratusan Project</span> Tersebar Hampir Di Seluruh Kota-Kota Besar Indonesia Kami Disini Adalah Spesialist Untuk Wilayah <span class="text-yellow">JABODETABEK</span> & Beberapa Kota Besar Lainnya.
          </p>
        </div>
      </div>
      
      <!-- Jakarta -->
      <div class="row justify-content-center text-center mt-4 mb-2">
        <div class="col-lg">
          <a href="{{route('house.list.location', getLocId('jakarta'))}}" class="custom-big-btn">PROJECT JAKARTA<a>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg font-italic">
          <h6>Klik disini untuk liat listing Jakarta</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 content-bg" style="background-image: url({{asset('images/listing_kota/jakarta.png')}})">
        </div>
      </div>
      <!-- Jakarta -->

      <!-- Bogor -->
      <div class="row justify-content-center text-center mt-4 mb-2">
        <div class="col-lg">
          <a href="{{route('house.list.location', getLocId('bogor'))}}" class="custom-big-btn">PROJECT BOGOR</a>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg font-italic">
          <h6>Klik disini untuk liat listing Bogor</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 content-bg" style="background-image: url({{asset('images/listing_kota/bogor.png')}})">
        </div>
      </div>
      <!-- Bogor -->
      
      <!-- Depok -->
      <div class="row justify-content-center text-center mt-4 mb-2">
        <div class="col-lg">
          <a href="{{route('house.list.location', getLocId('depok'))}}" class="custom-big-btn">PROJECT DEPOK</a>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg font-italic">
          <h6>Klik disini untuk liat listing Depok</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 content-bg" style="background-image: url({{asset('images/listing_kota/depok.png')}})">
        </div>
      </div>
      <!-- Depok -->

      <!-- Tangerang/Tangsel -->
      <div class="row justify-content-center text-center mt-4 mb-2">
        <div class="col-lg">
          <a href="{{route('house.list.location', getLocId('tangerang selatan'))}}" class="custom-big-btn">PROJECT TANGERANG/TANGSEL</a>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg font-italic">
          <h6>Klik disini untuk liat listing Tangerang/Tangsel</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 content-bg" style="background-image: url({{asset('images/listing_kota/tangerang_tangsel.png')}})">
        </div>
      </div>
      <!-- Tangerang/Tangsel -->

      <!-- Bekasi -->
      <div class="row justify-content-center text-center mt-4 mb-2">
        <div class="col-lg">
          <a href="{{route('house.list.location', getLocId('bekasi'))}}" class="custom-big-btn">PROJECT BEKASI</a>
        </div>
      </div>

      <div class="row mt-2 text-center">
        <div class="col-lg font-italic">
          <h6>Klik disini untuk liat listing Bekasi</h6>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 content-bg" style="background-image: url({{asset('images/listing_kota/bekasi.png')}})">
        </div>
      </div>
      <!-- Bekasi -->

      <div class="row mt-5 pt-4 pb-3 justify-content-center has-bg" style="background-image: url({{ asset('images/img_background/indonesia_property_syariah_hadir.png') }});">
        <div class="col-lg-8 text-center">
          <p class="text-white font-weight-bold">
            Alhamdulillah, sudah banyak Sahabat yang bisa memiliki rumah dengan cara yang insyaAllah Halal & Berkah
          </p>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 divider-bg">
        </div>
      </div>

      <div class="img-content-container">
        <div class="row">
          <div class="col-6">
            <img class="width-100" src="{{ asset('images/foto_akad_2.png') }}">
          </div>
          <div class="col-6">
            <img class="width-100" src="{{ asset('images/foto_akad_3.png') }}">
          </div>
          <div class="col-6">
            <img class="width-100" src="{{ asset('images/foto_akad_4.png') }}">
          </div>
          <div class="col-6">
            <img class="width-100" src="{{ asset('images/foto_akad_5.png') }}">
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 divider-bg">
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0">
          <div class="img-container-nopadding">
            <img class="width-100" src="{{ asset('images/foto_akad_6.png') }}">
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-lg px-0 divider-bg">
        </div>
      </div>

      <!-- Qoutes -->
      <div class="row justify-content-center py-5 text-center has-bg" style="background-image: url({{asset('images/img_background/anda_tidak_berdosa_jika_tidak_memiliki_rumah.png')}})">
        <div class="col-lg-8 text-center">
          <p class="font-italic font-weight-bold text-white">
            "Anda tidak berdosa jika tidak memiliki rumah / mobil mewah namun Anda berdosa jika memilikinya dengan cara RIBA"
          </p>

          <p><img src="{{asset('images/dotted.png')}}"></p>
          
          <p class="text-white">
            Sekarang giliran Sahabat untuk membuktikannya, jangan terlalu lama menunggu untuk beli, karena kunci sukses investasi property adalah
          </p>

          <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
              <p class="text-white font-italic font-weight-bold text-yellow-box">
                "Jangan tunggu lalu beli tapi beli dan tunggu lah.."
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Qoutes -->

      <!-- Footer -->
      <footer>
        <div class="leftside text-center">
          <div class="logo-container">
            <img class="width-50" src="{{ asset('images/warna.png') }}">
          </div>
          <p class="mt-3">
            Indonesia Property Syariah hadir untuk memenuhi kebutuhan akan rumah dengan skema kepemilikan yang tidak melanggar syariat islam.
          </p>
        </div>
        <div class="rightside">
          <!-- Kontak -->
          <h5 class="font-weight-bold">Kontak Kami</h5>
          <ul>
            <li>
              <i class="fa fa-map-marker"></i>
              <span>Panorama Serpong, Jl. Puspitek Tangerang Selatan 15315</span></li>
            <li>
              <i class="fa fa-phone"></i>
              <span>0813-1551-1500</span></li>
            <li>
              <i class="fa fa-envelope"></i>
              <span>info@iprosyar.com</span></li>
          </ul>
          <!-- Kontak -->

          <!-- Sosial Media -->
          <h5 class="font-weight-bold">Sosial Media</h5>
          <ul>
            <li>
              <a href="https://instagram.com/indopropertysyariah" target="_blank">
                <img src="{{ asset('images/img_background/icon_ig.png') }}">
                indopropertysyariah
              </a>
            </li>
            <li>
              <a href="https://facebook.com/iprosyar" target="_blank">
                <img src="{{ asset('images/img_background/icon_fb.png') }}">
                facebook.com/iprosyar
              </a>
            </li>
          </ul>
          <!-- Sosial Media -->
        </div>
      </footer>

      <div class="row mt-5">
        <div class="col-lg">
          <hr>
          <p>Copyright &copy; Indonesia Property Syariah 2019</p>
        </div>
      </div>

      <!-- Footer -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function openSidenav(){
            $('.sidenav, .m-sidenav').removeClass('active');
            $('#sidenav-menu').addClass('active');
            $('.overlay').addClass('active');
            $('body').addClass('d-scroll');
        }
        function closeSidenav(){
            $('.sidenav, .overlay, .m-sidenav').removeClass('active');
            $('body').removeClass('d-scroll');

        }
    </script>
  </body>
</html>