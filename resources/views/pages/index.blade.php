@extends('layouts.master')

@section('page')
<!--Intro  ============================================================= -->
<section class="intro">
        <div class="auto_container">
            <div class="intro_wrap">
                <div class="intro_title">
                    We are a high qualified IT solution company!
                    With us you will get things done easier!
                </div>
                <div class="scroll">
                    scroll down
                </div>
                <div class="circle">
                    <div class="circle_inner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Intro  end ========================================================= -->

    <!--Index About ============================================================== -->
    <section class="home_about">
        <div class="auto_container">
            <div class="home_about_wrap">
                <div class="tree_bg">
                    <img src="images/svg/tree-white.svg" alt="">
                </div>
                <div class="about_content">
                    <div class="about_title">
                        About us
                    </div>
                    <div class="about_text">
                        Neron is not just a company, we are a team with highly qualified members. Our team made us a
                        fastest growing Technology Solutions company in Turkmenistan. Since that time we become trusted
                        supplier of software development services. At the same time we help leading technology
                        innovators build successful software
                    </div>
                    <a href="{{route('pages.about')}}" class="about_btn">
                        Read more
                    </a>
                </div>
                <div class="about_photo">
                    <img src="images/intro.png" alt="">
                </div>
                <div class="scroll">
                    about us
                </div>
            </div>
        </div>
    </section>
    <!--Index About end ========================================================= -->

    <!--Index services  ========================================================= -->
    <section class="home_services">
        <div class="auto_container">
            <div class="home_services_wrap">
                <div class="tree_bg">
                    <img src="images/svg/tree-black.svg" alt="">
                </div>
                <div class="services_title">
                    Our services
                </div>
                <div class="services_text">
                    We craft digital, graphic and dimensional thinking to create category leading brand experiences that
                    have meaning and add a value.
                </div>
                <div class="services_card">
                    <div class="card_item">
                        <div class="card_icon">
                            <img src="images/svg/design.svg" alt="">
                        </div>
                        <div class="card_text">
                            Web 
                            development
                        </div>
                    </div>
                    <div class="card_item">
                        <div class="card_icon">
                            <img src="images/svg/product.svg" alt="">
                        </div>
                        <div class="card_text">
                            Product 
                            designing
                        </div>
                    </div>
                    <div class="card_item">
                        <div class="card_icon">
                            <img src="images/svg/soft.svg" alt="">
                        </div>
                        <div class="card_text">
                            Software development
                        </div>
                    </div>
                    <div class="card_item">
                        <div class="card_icon">
                            <img src="images/svg/technical.svg" alt="">
                        </div>
                        <div class="card_text">
                            Technical 
                            support
                        </div>
                    </div>
                </div>
                <div class="scroll">
                    our services
                </div>
            </div>
        </div>
    </section>
    <!--Index services  end ========================================================= -->

    <!--Index portfolio ========================================================= -->
    <div class="home_portfolio">
        <div class="auto_container">
            <div class="home_portfolio_wrap">
                <div class="tree_bg">
                    <img src="images/svg/tree-white.svg" alt="">
                </div>
                <div class="portfolio_title">
                    Portfolio
                </div>
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
                <div class="scroll">
                    portfolio
                </div>
            </div>
        </div>
    </div>
    <!--Index portfolio end ========================================================= -->
    @endsection