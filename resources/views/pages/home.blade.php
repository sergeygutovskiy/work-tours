@extends('layouts.app')

@section('title', 'Home')

@section('head')
    <link rel="stylesheet" href="css/pages/home.css">
@endsection

@section('content')
    <div class="u-page-background u-page-background__top" data-background-target="tours">
        <img class="u-page-background__image" 
            src="https://images7.alphacoders.com/686/thumb-1920-686386.jpg">

        {{-- <svg class="u-page-background__bottom-svg" 
            width="100%" 
            height="647" 
            viewBox="0 0 1920 647" 
            fill="none" 
            xmlns="http://www.w3.org/2000/svg">
            
            <path 
                d="M1393 646.668C1212.1 
                652.353 975.142 587.077 797.5 285.976C610.721 
                -30.6134 281.732 -54.3143 0 89.5419V647L1393 
                646.668ZM1393 646.668C1465.5 623 1526.28 608.287 
                1574.5 591C1722.5 537.946 1920 401.081 1920 401.081V647L1393 646.668Z" 
                stroke="white" 
                stroke-width="2"
            />
        </svg> --}}
    </div>
    <div class="u-page-background u-page-background__bottom" data-background-target="tours">
        <img class="u-page-background__image" 
            src="https://images7.alphacoders.com/686/thumb-1920-686386.jpg">

        {{-- <svg class="u-page-background__bottom-svg" width="100%" height="647" viewBox="0 0 1920 647" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path 
                d="M1393 646.668C1212.1 
                652.353 975.142 587.077 797.5 285.976C610.721 
                -30.6134 281.732 -54.3143 0 89.5419V647L1393 
                646.668ZM1393 646.668C1465.5 623 1526.28 608.287 
                1574.5 591C1722.5 537.946 1920 401.081 1920 401.081V647L1393 646.668Z" 
                stroke="white" 
                stroke-width="2"
            />
        </svg> --}}
    </div>

    <header class="u-page-header u-page-header_size_100vh">
        <div class="container d-flex flex-column justify-content-center text-center u-text_color_white">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7">
                    <h1 class="mb-7">Lorem Ipsum</h1>
                    <p class="u-text_size_28 mb-7">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
                        Donec nec neque vel diam hendrerit ultrices non quis ante.
                    </p>
                    <div>
                        <button class="u-btn u-btn_size_big u-btn_theme_transparent">
                            Узнать больше
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container u-text_color_white">
        <div class="row">
            <div class="col">
                <h2>Lorem Ipsum</h2>
            </div>
        </div>
        <div class="row mb-7">
            <div class="col-lg-7">
                <p class="u-text_size_28">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
                    Donec nec neque vel diam hendrerit ultrices non quis ante.
                </p>
            </div>
        </div>
        <div class="row mb-7 justify-content-end">
            <div class="col-lg-7">
                <p class="u-text_size_28">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
                    Donec nec neque vel diam hendrerit ultrices non quis ante.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="u-btn u-btn_size_big u-btn_theme_transparent">
                    Больше о нас
                </button>
            </div>
        </div>
    </section>

    <section class="mt-100">
        <div class="container">
            <nav class="row">
                <div class="col d-flex 
                    flex-column flex-lg-row 
                    justify-content-lg-between align-items-lg-center 
                    mb-8">
                    <div class="mb-4 mb-lg-0">
                        <h2 class="u-text_color_white mb-0">
                            Lorem Ipsum
                        </h2>
                    </div>
                    <button class="u-btn u-btn_size_big u-btn_theme_transparent">
                        Больше туров
                    </button>
                </div>
            </nav>
        </div>
    </section>

    <section class="container tours-wrapper">
        <div id="tours">
            <x-tours.columns-3-grid :tours="$tours" />
        </div>
    </section>

    <section class="mt-100 container">
        <x-banner
            title="Lorem Ipsum Lorem Ipsu Lorem Ipsu"
            desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
                Donec nec neque vel diam hendrerit ultrices non quis ante."
            img="http://placehold.it/500x500"
            link-text="Подберите мне тур"
        />
    </section>

    <section class="mt-100 container">
        <div class="row">
            <div class="col text-center u-text_color_white">
                <h2>Lorem Ipsum</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 justify-content-sm-between">
            <div class="col d-flex justify-content-center">
                <article class="partner ph-4 pv-6 pb-8">
                    <div class="partner__image-wrapper">
                        <img class="partner__image" src="http://placehold.it/500x500">
                    </div>
                    <h3 class="mt-4">Lorem ipsum</h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec sodales lacinia velit, a malesuada enim placerat ac. 
                    </p>
                </article>
            </div>
            <div class="col d-flex justify-content-center mt-4 mt-lg-0">
                <article class="partner ph-4 pv-6 pb-8">
                    <div class="partner__image-wrapper">
                        <img class="partner__image" src="http://placehold.it/500x500">
                    </div>
                    <h3 class="mt-4">Lorem ipsum</h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec sodales lacinia velit, a malesuada enim placerat ac. 
                    </p>
                </article>
            </div>
            <div class="col col-md-12 col-lg mt-4 mt-lg-0 d-flex justify-content-center">
                <article class="partner ph-4 pv-6 pb-8">
                    <div class="partner__image-wrapper">
                        <img class="partner__image" src="http://placehold.it/500x500">
                    </div>
                    <h3 class="mt-4">Lorem ipsum</h3>
                    <p class="mt-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Donec sodales lacinia velit, a malesuada enim placerat ac. 
                    </p>
                </article>
            </div>
        </div>
    </section>

    <section class="mt-100 container">
        <x-form.form-section
            title="Lorem Ipsum"
            paragraph="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
            Donec nec neque vel diam hendrerit ultrices non quis ante."
        />
    </section>

    <div class="pb-100"></div>
@endsection

@section('scripts')
    <script src="js/pages/home.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let el = document.getElementsByClassName("u-page-background")[0];
            let attr = el.dataset.backgroundTarget;
            
            let target = document.getElementById(attr);
            let height = target.getBoundingClientRect().top + pageYOffset + target.offsetHeight / 2;

            el.style.cssText = "height: " + height + "px";

            //

            el = document.getElementsByClassName("u-page-background")[1];
            attr = el.dataset.backgroundTarget;

            target = document.getElementById(attr);
            height = document.documentElement.offsetHeight - height;

            el.style.cssText = "height: " + height + "px"
                + ";" + "top: " + target.getBoundingClientRect().top;
        });
    </script>
@endsection