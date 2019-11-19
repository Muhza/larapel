<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Landing House - Property Grid | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('icon.png') }}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/ion-rangeslider/css/ion.rangeSlider.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/chartist/dist/chartist.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fancybox/jquery.fancybox.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

  {{-- custom css style --}}
  <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--navbar-bg">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar ipr-nav navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <!-- Logo -->
          <a class="navbar-brand border-right-low" href="{{ route('landing-page') }}" aria-label="Iprosyar">
            <img src="{{ asset('icon.png') }}" width="100">
            <span class="normal-text-nav">HOME</span>
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Category -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
              data-event="hover"
              data-animation-in="slideInUp"
              data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">KATEGORI</a>

                <!-- Category - Submenu -->
                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                  @foreach ($categories as $category)
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="{{route('house.list.category', $category->id)}}">{!! $category->name !!}</a></li>
                  @endforeach
                </ul>
                <!-- End Category - Submenu -->
              </li>
              <!-- End Category -->
    
              <!-- Location -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">LOKASI</a>

                <!-- Location - Submenu -->
                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                  @foreach ($locations as $location)
                    <li><a class="nav-link u-header__sub-menu-nav-link" href="{{route('house.list.location', $location->id)}}">{!! $location->name !!}</a></li>
                  @endforeach
                </ul>
                <!-- End Location - Submenu -->
              </li>
              <!-- End Location -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    @yield('main')
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="border-top">
    <div class="container">
      <div class="text-center py-7">
        <!-- Copyright -->
        <p class="small text-muted mb-0">Copyright &copy; Indonesia Property Syariah 2019</p>
        <!-- End Copyright -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{ asset('vendor/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
  <script src="{{ asset('vendor/chartist/dist/chartist.min.js') }}"></script>
  <script src="{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('js/hs.core.js') }}"></script>
  <script src="{{ asset('js/components/hs.header.js') }}"></script>
  <script src="{{ asset('js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('js/components/hs.focus-state.js') }}"></script>
  <script src="{{ asset('js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('js/components/hs.selectpicker.js') }}"></script>
  <script src="{{ asset('js/components/hs.range-slider.js') }}"></script>
  <script src="{{ asset('js/components/hs.chartist-area-chart.js') }}"></script>
  <script src="{{ asset('js/components/hs.fancybox.js') }}"></script>
  <script src="{{ asset('js/components/hs.svg-injector.js') }}"></script>
  <script src="{{ asset('js/components/hs.go-to.js') }}"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]:not(#filter3DropdownInvoker)'));

      $.HSCore.components.HSUnfold.init($('#filter3DropdownInvoker'), {
        afterOpen: function() {
          $.HSCore.components.HSRangeSlider.init('.js-range-slider');
          $.HSCore.components.HSChartistAreaChart.init('.js-area-chart');
        }
      });

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of select picker
      $.HSCore.components.HSSelectPicker.init('.js-select');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });

    $(window).on('resize', function() {
      setTimeout(function() {
        $.HSCore.components.HSChartistAreaChart.init('.js-area-chart');
      }, 800);
    });
  </script>
</body>
</html>