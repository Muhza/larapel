@extends('layouts.app')
@section('main')
    <!-- Search Section -->
    {{-- <div class="bg-light">
        <div class="container space-1">
            <div class="row mx-gutters-2">
                <div class="col-lg mb-3 mb-lg-0">
                    <!-- Search Property Input -->
                    <div class="js-focus-state">
                        <label class="sr-only" for="searchPropertySr">Cari Properti</label>
                        <div class="input-group input-group-sm">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="searchProperty">
                                <span class="fas fa-search"></span>
                            </span>
                            </div>
                            <input type="text" class="form-control" name="text" id="searchPropertySr" placeholder="Cari Properti" aria-label="Cari Properti" aria-describedby="searchProperty">
                        </div>
                    </div>
                    <!-- End Search Property Input -->
                </div>
                <div class="col-sm-auto">
                    <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Search Section -->

    @isset($title_page)
    <!-- Filters Section -->
    <div class="container space-1">
        <!-- Title -->
        <div class="mb-4">
            <h1 class="h4 font-weight-medium">Properti berdasarkan <span class="text-primary">{{$title_page}}</span></h1>
        </div>
        <!-- End Title -->
    </div>
    <!-- End Filters Section -->
    @endisset

    <!-- List of Properties Section -->
    <div class="container space-top-1 space-bottom-2">
    <div class="row">
        <div class="col-lg-8">
            @foreach ($houses as $house)
                <!-- Property Item -->
                <div class="border-bottom pb-5 mb-5">
                    <div class="row">
                        <div class="col-md-4 d-md-flex align-items-md-start flex-md-column mb-5 mb-md-0">
                            <!-- Gallery -->
                            <a class="js-fancybox u-media-viewer mb-3" href="javascript:;"
                            data-src="{{ asset('storage/'.json_decode($house->images)[0]) }}"
                            data-fancybox="fancyboxGallery{{$house->id}}"
                            data-caption="image #1"
                            data-speed="700"
                            data-is-infinite="true">
                            <img class="img-fluid w-100" src="{{ asset('storage/'.json_decode($house->images)[0]) }}" alt="Image Description">

                            <div class="position-absolute bottom-0 right-0 pb-2 pr-2">
                                <span class="btn btn-icon btn-sm btn-white">
                                <span class="fas fa-images btn-icon__inner"></span>
                                </span>
                            </div>
                            </a>

                            @isset($house->images)
                                @foreach (json_decode($house->images) as $item)
                                    @if ($loop->first) @continue @endif
                                    <img class="js-fancybox d-none" alt="Image Description"
                                        data-fancybox="fancyboxGallery{{$house->id}}"
                                        data-src="{{asset('storage/'.$item)}}"
                                        data-caption="image #{{$loop->iteration}}"
                                        data-speed="700"
                                        data-is-infinite="true">
                                @endforeach
                            @endisset
                            <!-- End Gallery -->

                            <!-- Agent Info -->
                            <div class="media align-items-center mt-auto">
                            <div class="u-sm-avatar mr-2">
                                <img class="img-fluid rounded-circle" src="{{asset('storage/'.$contact->image)}}" alt="Image Description" title="Monica Fox">
                            </div>
                            <div class="media-body">
                                <small class="d-block text-muted">{!! date('d M Y', strtotime($house->created_at)) !!} oleh</small>
                                <span class="d-block">{!! $contact->name !!}</span>
                            </div>
                            </div>
                            <!-- End Agent Info -->
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                            <div class="col-8">
                                <h2 class="h4 mb-1">
                                <a href="{{route('house.show', $house->id)}}">{!! formatRupiah($house->price) !!}</a>
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="badge badge-success">{!! $house->category->name !!}</span>
                            </div>
                            </div>

                            <!-- Location -->
                            <div class="mb-3">
                            <a class="font-size-1" href="{{route('house.show', $house->id)}}">
                                <span class="fas fa-map-marker-alt mr-1"></span>
                                {!! str_limit($house->address, 50, ' ...') !!}
                            </a>
                            </div>
                            <!-- End Location -->

                            <!-- Icon Blocks -->
                            <ul class="list-inline font-size-1">
                            <li class="list-inline-item mr-3" title="1 bedroom">
                                <span class="fas fa-bed text-muted mr-1"></span>
                                {!! $house->bedrooms !!}
                            </li>
                            <li class="list-inline-item mr-3" title="1 bathroom">
                                <span class="fas fa-bath text-muted mr-1"></span>
                                {!! $house->bathrooms !!}
                            </li>
                            <li class="list-inline-item mr-3" title="1 living room">
                                <span class="fas fa-couch text-muted mr-1"></span>
                                {!! $house->living_room !!}
                            </li>
                            <li class="list-inline-item mr-3" title="square feet">
                                <span class="fas fa-ruler-combined text-muted mr-1"></span>
                                {!! number_format($house->wide*$house->length) !!} m<sup>2</sup>
                            </li>
                            </ul>
                            <!-- End Icon Blocks -->

                            <p class="font-size-1">{!! str_limit($house->descripition, 120, ' ...') !!}</p>

                            <!-- Contacts -->
                            <div class="d-flex align-items-center font-size-1">
                            <a class="text-secondary mr-4" href="javascript:;">
                                <span class="fas fa-phone mr-1"></span>
                                {!! $contact->phone !!}
                            </a>
                            <a class="text-secondary mr-auto" href="javascript:;">
                                <span class="fas fa-envelope mr-1"></span>
                                {!! $contact->email !!}
                            </a>
                            <a class="btn btn-sm btn-soft-primary transition-3d-hover ml-auto" href="{{route('house.show', $house->id)}}">
                                Details
                                <span class="fas fa-angle-right ml-1"></span>
                            </a>
                            </div>
                            <!-- End Contacts -->
                        </div>
                    </div>
                </div>
                <!-- End Property Item -->
            @endforeach

        <!-- Pagination -->
        <div class="d-flex justify-content-between align-items-center">
            <nav aria-label="Page navigation">
            <ul class="pagination mb-0">
                <li class="page-item ml-0">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
                </li>
            </ul>
            </nav>

            <small class="d-none d-sm-inline-block text-secondary">Page 1 out of 6</small>
        </div>
        <!-- End Pagination -->
        </div>

        <div class="col-lg-4">
        <div class="pl-lg-4">
            <!-- Sidebar Filter -->
            <div class="card p-4">
            <!-- Kategori -->
            <div class="border-bottom pb-4 mb-4">
                <label class="form-label mb-2">Kategori</label>
                @foreach ($categories as $category)
                    <!-- Radio Checkbox -->
                    <div class="custom-control custom-checkbox font-size-1 text-lh-md mb-2">
                    <input type="checkbox" class="custom-control-input" id="category-{{$category->id}}" name="category_property" @if($category->id == $id && $type == 'category') checked disabled @endif>
                    <label class="custom-control-label" for="category-{{$category->id}}">
                        {!! $category->name !!}
                    </label>
                    </div>
                    <!-- End Radio Checkbox -->
                @endforeach
            </div>
            <!-- End Kategori -->

            <!-- Lokasi -->
            <div class="pb-2 mb-2">
                <label class="form-label mb-2">Lokasi</label>
                @foreach ($locations as $location)
                    <!-- Radio Checkbox -->
                    <div class="custom-control custom-checkbox font-size-1 text-lh-md mb-2">
                    <input type="checkbox" class="custom-control-input" id="location-{{$location->id}}" name="location_property" @if($location->id == $id && $type == 'location') checked disabled @endif>
                    <label class="custom-control-label" for="location-{{$location->id}}">
                        {!! $location->name !!}
                    </label>
                    </div>
                    <!-- End Radio Checkbox -->
                @endforeach
            </div>
            <!-- End Lokasi -->
            </div>
            <!-- End Sidebar Filter -->
        </div>
        </div>
    </div>
    </div>
    <!-- End List of Properties Section -->
@endsection