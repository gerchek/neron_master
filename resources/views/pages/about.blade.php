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
                            About us
                        </div>
                    </div>
                    <div class="page_title">
                        About us
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page header end ========================================================= -->

    <!-- About us ========================================================= -->
    <section class="about">
        <div class="auto_container">
            <div class="about_wrap">
                <div class="about_title"> 
                {{ $data->title }}
                </div>
                <div class="about_text">
                {{ $data->text }}
                </div>
            </div>
        </div>
    </section>
    <!-- About us end ========================================================= -->

    @endsection