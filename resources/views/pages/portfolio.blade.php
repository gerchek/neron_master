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
                            Portfolio
                        </div>
                    </div>
                    <div class="page_title">
                        Portfolio
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page header end ========================================================= -->

    <!-- Portfolio ============================================================= -->
    <section class="portfolio">
        <div class="auto_container">
            <div class="portfolio_wrap">
                <div class="portfolio_box">
                @foreach ($data as $item)
                    <div class="portfolio_item">
                        <div class="portfolio_photo">
                            <img src="{{ $item->image }}" alt="">
                        </div>
                        <div class="portfolio_name">
                        {{ $item->title }}
                        </div>
                        <div class="portfolio_text">
                        {{ $item->text }}
                        </div>
                    </div>
                    @endforeach    
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio end ========================================================= -->
@endsection
