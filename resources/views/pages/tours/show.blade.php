@extends('layouts.app')

@section('title', 'Tours')

@section('head')
@endsection

@section('content')
    <div class="u-page-background u-page-background-top offset_2">
        <img 
            class="u-page-background__image"
            src="https://img.etimg.com/thumb/msid-68721417,width-650,imgsize-1016106,,resizemode-4/nature1_gettyimages.jpg"
            >

        <header class="u-page-header u-page-header_size_100vh">
            <div class="container text-center u-text_color_white mt-auto mb-auto">
                <div class="row justify-content-center mb-7">
                    <div class="col-12 col-lg-7">
                        <h1 class="u-header-with-tags">
                            <span>
                                {{ $tour->title }}
                            </span>
                            {{-- // TODO доделать вывод тэгов --}}
                            {{-- <div class="u-header-with-tags__icons">
                                @foreach ($tour->tags as $tag)
                                    <img 
                                        src="{{ $tag->image_path }}"
                                        class="{{ $loop->last ? '' : 'mr-4' }}">
                                @endforeach
                            </div> --}}
                        </h1>
                    </div>
                </div>
                <div class="m-tour-info-header-buttons row justify-content-center mt-7">
                    <div class="col-12 col-md-6 col-lg-5 col-xxl-4 d-flex gx-sm-3">
                        <button 
                            class="u-btn u-btn_size_big u-btn_theme_transparent 
                                d-inline-flex justify-content-between">
                            <span>Длительность:</span>
                            <span>
                                {{ $tour->info->duration }}
                                дней
                            </span>
                        </button>
                    </div>
                    <div class="gy-3 gy-md-0 col-12 col-md-6 col-lg-4 col-xxl-3 d-flex gx-sm-3">
                        <button 
                            class="u-btn u-btn_size_big u-btn_theme_transparent 
                                d-inline-flex justify-content-between">
                            <span>Сложность:</span> 
                            <span>{{ $tour->info->complexity->name }}</span>
                        </button>
                    </div>
                    <div class="gy-3 gy-lg-0 order-3 order-lg-0 col-12 col-md-6 col-lg-3 col-xxl-3 d-flex gx-sm-3">
                        <button 
                            class="u-btn u-btn_size_big u-btn_theme_transparent 
                                d-inline-flex justify-content-between">
                            <span>Сезон:</span> 
                            <span>{{ $tour->info->season->name }}</span>
                        </button>
                    </div>
                    <div class="order-5 order-lg-0 col-lg-7 col-xl-6 col-xxl-5 d-flex gy-3 g-sm-3">
                        <button 
                            class="u-btn u-btn_size_big u-btn_theme_transparent 
                                d-inline-flex justify-content-between">
                            <span>Количество человек в группе:</span>
                            <span>
                                {{ $tour->info->people_amount }}
                            </span>
                        </button>
                    </div>
                    <div class="order-4 order-lg-0 col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-4 d-flex gy-3 gx-sm-3">
                        <button 
                            class="u-btn u-btn_size_big u-btn_theme_white 
                                d-inline-flex justify-content-between">
                            <span>Стоимость:</span> 
                            <span>
                                {{ $tour->price }}
                                ₽ 
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <section class="container u-page-margin">
            <div class="m-tour-info-video-container row justify-content-between align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="m-tour-info-video-container__video-wrapper">
                        <iframe 
                            class="m-tour-info-video-container__video"
                            width="560" 
                            height="315" 
                            src="{{ $tour->info->video_path }}" 
                            title="YouTube video player" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
                <div class="mt-7 mt-lg-0 col-12 col-lg-5 u-text_size_24 u-text_color_white">
                    <div class="m-tour-info-video-containe__descriptionr">
                        {!! html_entity_decode($tour->info->description) !!}
                    </div>
                </div>
            </div>
        </section>

    </div>

    <section class="container u-page-margin">
        @foreach ($tour->info->locations as $location)
            <div class="m-tour-info-location {{ $loop->first ? '' : 'u-page-padding' }}">
                <div class="row mb-4 mb-lg-8">
                    <div class="col-12">
                        <div class="m-tour-info-location__name">
                            <h2 class="{{ $loop->first ? 'u-text_color_white' : 'u-text_color_green' }}">
                                <span>{{ $location->name }}</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="m-tour-info-location__content row d-flex justify-content-end">
                    <div class="{{ 
                        $location->is_big ? 
                            'col-12 col-lg-9 col-xl-7' 
                            : 
                            'col-12 col-lg-7 col-xl-5'
                        }} m-tour-info-location__image-wrapper">
                        <img class="m-tour-info-location__image" src="{{ $location->image_path }}">
                    </div>
                    <div class="{{ 
                        $location->is_big ? 
                            'col-12 col-lg-8' 
                            : 
                            'col-12 col-lg-10'
                    }}">
                        <div class=
                            "m-tour-info-location__description {{
                                $location->is_big ? 'm-tour-info-location__description_green' : ''
                            }} u-text_size_24">
                            {!! html_entity_decode($location->description) !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <div class="u-page-background u-page-background-bottom offset_2">
        <img 
            class="u-page-background__image"
            src="https://img.etimg.com/thumb/msid-68721417,width-650,imgsize-1016106,,resizemode-4/nature1_gettyimages.jpg"
            >

        <section class="container u-page-margin">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-11 col-xxl-10">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="m-tour-info-bottom-panel">
                                <h3 class="d-flex justify-content-between">
                                    <span>Стоимость:</span>
                                    <span>
                                        {{ $tour->price }} ₽
                                    </span>
                                </h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4 mt-xl-0">
                            <div class="m-tour-info-bottom-panel">
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-10 col-xl-11 col-xxl-10">
                    <div class="row">
                        <div class="col-12 col-xl-6">
                            <div class="m-tour-info-bottom-panel">
                                <h3 class="mb-4">Что входит в стоимость:</h3>
                                @foreach ($tour->info->services_in_price as $service)
                                    <div class="m-tour-info-bottom-panel__point">
                                        {!! html_entity_decode($service->description) !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-12 col-xl-6 mt-4 mt-xl-0">
                            <div class="m-tour-info-bottom-panel">
                                <h3 class="mb-4">Что не входит в стоимость:</h3>
                                @foreach ($tour->info->services_not_in_price as $service)
                                    <div class="m-tour-info-bottom-panel__point">
                                        {!! html_entity_decode($service->description) !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container u-page-margin">
            <x-form.form-section
                title="Lorem Ipsum"
                paragraph="Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Donec dolor urna, vestibulum eget vestibulum in, iaculis non felis. 
                Donec nec neque vel diam hendrerit ultrices non quis ante."
            />
        </section>

        <div class="u-page-padding"></div>
    </div>
@endsection