@extends('layouts.app')
@section('main')
    <!-- Gallery Section -->
    <div class="container-fluid position-relative p-2 mb-3">
      <div class="row mx-gutters-1">
        <div class="col-md-12 col-lg-12">
          <!-- Gallery -->
          <a class="js-fancybox u-media-viewer" href="javascript:;"
             data-src="{{ asset('storage/'.json_decode($house->images)[0]) }}"
             data-fancybox="fancyboxGallery6"
             data-caption="Front in frames - image #01"
             data-speed="700"
             data-is-infinite="true">
            <img class="img-fluid" src="{{ asset('storage/'.json_decode($house->images)[0]) }}" alt="Image Description">

            <div class="position-absolute bottom-0 right-0 pb-3 pr-3">
              <span class="d-md-none btn btn-sm btn-white">
                <span class="fas fa-expand mr-2"></span>
                Lihat Gambar
              </span>
            </div>
          </a>
          <!-- End Gallery -->
        </div>
      </div>
    </div>
    <!-- End Gallery Section -->

    <!-- Property Description Section -->
    <div class="container space-bottom-2">
      <!-- Additional Functions -->
      <div class="d-md-flex justify-content-md-start align-items-md-center text-center mb-7">
        <div class="mr-md-auto mb-2 mb-md-0">
          <span class="font-size-1 font-weight-medium">Diterbitkan:</span>
          <span class="text-secondary font-size-1">{!! date('d M Y', strtotime($house->created_at)) !!}</span>
        </div>

        <a class="btn btn-sm btn-outline-secondary border-white" href="javascript:;">
          <span class="fas fa-share-alt mr-2"></span>
          Share
        </a>
      </div>
      <!-- End Additional Functions -->

      <!-- Title -->
      <div class="row justify-content-lg-between">
        <div class="col-lg-8">
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-no-gutter bg-transparent font-size-1">
              <li class="breadcrumb-item"><a href="#">List Property</a></li>
              <li class="breadcrumb-item"><a href="#">Lokasi</a></li>
              <li class="breadcrumb-item active" aria-current="page">{!! $house->address !!}</li>
            </ol>
          </nav>
          <!-- End Breadcrumb -->

          <h1 class="h3 font-weight-medium">{!! $house->address !!}</h1>
        </div>

        <div class="col-lg-4 align-self-lg-end text-lg-right mb-5 mb-lg-0">
          <span class="h3 text-primary font-weight-medium">{!! formatRupiah($house->price) !!}</span>
        </div>
      </div>
      <!-- End Title -->

      <div class="row space-top-2">
        <div class="col-lg-8 mb-9 mb-lg-0">
          <!-- Nav Classic -->
          <ul id="SVGnavIcons" class="svg-preloader nav nav-classic nav-rounded nav-shadow nav-justified border" role="tablist">
            <li class="nav-item">
              <a class="nav-link font-weight-medium active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab" aria-controls="pills-one" aria-selected="true">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                  <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                    <img class="js-svg-injector" src="{{ asset('svg/icons/icon-13.svg') }}" alt="SVG"
                         data-parent="#SVGnavIcons">
                  </figure>
                  Detail Rumah
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-medium" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab" aria-controls="pills-two" aria-selected="false">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                  <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                    <img class="js-svg-injector" src="{{ asset('svg/icons/icon-63.svg') }}" alt="SVG"
                         data-parent="#SVGnavIcons">
                  </figure>
                  Denah
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-weight-medium" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab" aria-controls="pills-three" aria-selected="false">
                <div class="d-md-flex justify-content-md-center align-items-md-center">
                  <figure class="ie-height-40 d-none d-md-block w-100 max-width-6 mr-3">
                    <img class="js-svg-injector" src="{{ asset('svg/icons/icon-5.svg') }}" alt="SVG"
                         data-parent="#SVGnavIcons">
                  </figure>
                  Sertifikat
                </div>
              </a>
            </li>
          </ul>
          <!-- End Nav Classic -->

          <!-- Tab Content -->
          <div class="tab-content">
            <div class="tab-pane fade pt-6 show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
              <!-- Key Facts -->
              <div class="row">
                <div class="col-md-6">
                  <!-- Fact List -->
                  <ul class="list-unstyled font-size-1 mb-0">
                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Kategori:</span>
                      <span class="text-secondary">{!! $house->category->name !!}</span>
                    </li>

                    <li class="d-sm-flex justify-content-sm-between py-1">
                        <span class="font-weight-medium">Garasi:</span>
                        <span class="text-secondary">{!! $house->garage !!}</span>
                    </li>
                    
                    <li class="d-sm-flex justify-content-sm-between py-1">
                        <span class="font-weight-medium">Listrik:</span>
                        <span class="text-secondary">{!! $house->electricity !!}</span>
                    </li>

                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Luas:</span>
                      <span class="text-secondary">{!! number_format($house->wide*$house->length) !!} m<sup>2</sup></span>
                    </li>
                  </ul>
                  <!-- End Fact List -->
                </div>

                <div class="col-md-6">
                  <!-- Fact List -->
                  <ul class="list-unstyled font-size-1 mb-0">
                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Kamar Tidur:</span>
                      <span class="text-secondary">{!! $house->bedrooms !!}</span>
                    </li>

                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Kamar Mandi:</span>
                      <span class="text-secondary">{!! $house->bathrooms !!}</span>
                    </li>

                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Dapur:</span>
                      <span class="text-secondary">{!! $house->kitchen !!}</span>
                    </li>

                    <li class="d-sm-flex justify-content-sm-between py-1">
                      <span class="font-weight-medium">Ruang Tamu:</span>
                      <span class="text-secondary">{!! $house->living_room !!}</span>
                    </li>
                  </ul>
                  <!-- End Fact List -->
                </div>
              </div>
              <!-- End Key Facts -->

              <!-- Title -->
              <div class="mt-5 mb-3">
                <h3 class="h5">Deskripsi</h3>
              </div>
              <!-- End Title -->

              <p>{!! $house->descripition !!}</p>

              <hr class="my-6">

              <!-- Title -->
              <div class="mb-3">
                <h3 class="h5 mb-1">Harga</h3>
              </div>
              <!-- End Title -->

              <!-- Estimated Costs -->
              <div class="row">
                <div class="col-md-6">
                  <span class="h1 font-weight-medium mb-0">{!! formatRupiah($house->price) !!}</span>
                </div>
              </div>
              <!-- End Estimated Costs -->
            </div>

            <div class="tab-pane fade pt-6" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
              <!-- Gallery -->
              <a class="js-fancybox u-media-viewer" href="javascript:;"
                 data-src="{!! checkImagePath('storage/'.$house->floorplan) !!}"
                 data-fancybox="fancyboxGalleryFloorPlan"
                 data-caption="Floorplan image #01"
                 data-speed="700"
                 data-is-infinite="true">
                <img class="img-fluid" src="{!! checkImagePath('storage/'.$house->floorplan) !!}" alt="Image Description">
              </a>
              <!-- End Gallery -->
            </div>

            <div class="tab-pane fade pt-6" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
              <!-- Gallery -->
              <a class="js-fancybox u-media-viewer" href="javascript:;"
                 data-src="{!! checkImagePath('storage/'.$house->certificate) !!}"
                 data-fancybox="fancyboxGalleryFloorPlan"
                 data-caption="Floorplan image #01"
                 data-speed="700"
                 data-is-infinite="true">
                <img class="img-fluid" src="{!! checkImagePath('storage/'.$house->certificate) !!}" alt="Image Description">
              </a>
              <!-- End Gallery -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>

        <div class="col-lg-4">
          <div id="stickyBlockStartPoint" class="pl-lg-4">
            <!-- Contact Form -->
            <div class="js-sticky-block card shadow-sm p-4"
                 data-parent="#stickyBlockStartPoint"
                 data-sticky-view="lg"
                 data-start-point="#stickyBlockStartPoint"
                 data-end-point="#stickyBlockEndPoint"
                 data-offset-top="24"
                 data-offset-bottom="0">
              <!-- Header -->
              <div class="media align-items-center mb-4">
                <div class="u-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{!! asset('storage/'.$contact->image) !!}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="h6 mb-0">{!! $contact->name !!}</h4>
                </div>
              </div>
              <!-- End Header -->
                <a href="javascript:;" class="btn btn-xs btn-success">
                    <span class="fab fa-whatsapp mr-1"></span>
                    {!! $contact->phone !!}
                </a>
            </div>
            <!-- End Contact Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Property Description Section -->
@endsection