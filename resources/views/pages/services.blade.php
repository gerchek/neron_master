@extends('layouts.master')

@section('page')
<!-- Page header ========================================================= -->
<section class="page_header">
        <div class="auto_container">
            <div class="page_wrap">
                <div class="breadcrumb">
                    <div class="page_links">
                        <a href="{{route('pages.index')}}" class="page_name">
                            Home
                        </a>
                        <div class="page_name">
                            Services
                        </div>
                    </div>
                    <div class="page_title">
                        Services
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page header end ========================================================= -->

    <!-- Services ========================================================= -->
    <section class="services">
        <div class="auto_container">
            <div class="services_wrap">
            @foreach ($data as $item)
                <div class="services_item">
                    <div class="services_photo">
                        <div class="service_bg">
                            <img src="{{ $item->servicesbg }}" alt="">
                        </div>
                        <!-- <div class="services_icon">
                            <img src="{{ $item->servicesicon }}" alt="">
                        </div> -->
                        <div class="icon_text">
                        {{ $item->title }}
                        </div>
                    </div>
                    <div class="services_text">
                    {{ $item->text }}
                    </div>
                </div>
                @endforeach      
            </div>
        </div>
    </section>
    <!-- Services end ========================================================= -->
@endsection
