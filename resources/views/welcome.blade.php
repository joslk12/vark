<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>vark</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line-height: 1.15;
                -webkit-text-size-adjust: 100%;
            }
            body {
                margin: 0;
            }
            a {
                background-color: transparent;
            }
            [hidden] {
                display: none;
            }
            html {
                font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                line-height: 1.5;
            }
            *,
            :after,
            :before {
                box-sizing: border-box;
                border: 0 solid #e2e8f0;
            }
            a {
                color: inherit;
                text-decoration: inherit;
            }
            svg,
            video {
                display: block;
                vertical-align: middle;
            }
            video {
                max-width: 100%;
                height: auto;
            }
            .bg-white {
                --bg-opacity: 1;
                background-color: #fff;
                background-color: rgba(255, 255, 255, var(--bg-opacity));
            }
            .bg-gray-100 {
                --bg-opacity: 1;
                background-color: #f7fafc;
                background-color: rgba(247, 250, 252, var(--bg-opacity));
            }
            .border-gray-200 {
                --border-opacity: 1;
                border-color: #edf2f7;
                border-color: rgba(237, 242, 247, var(--border-opacity));
            }
            .border-t {
                border-top-width: 1px;
            }
            .flex {
                display: flex;
            }
            .grid {
                display: grid;
            }
            .hidden {
                display: none;
            }
            .items-center {
                align-items: center;
            }
            .justify-center {
                justify-content: center;
            }
            .font-semibold {
                font-weight: 600;
            }
            .h-5 {
                height: 1.25rem;
            }
            .h-8 {
                height: 2rem;
            }
            .h-16 {
                height: 4rem;
            }
            .text-sm {
                font-size: 0.875rem;
            }
            .text-lg {
                font-size: 1.125rem;
            }
            .leading-7 {
                line-height: 1.75rem;
            }
            .mx-auto {
                margin-left: auto;
                margin-right: auto;
            }
            .ml-1 {
                margin-left: 0.25rem;
            }
            .mt-2 {
                margin-top: 0.5rem;
            }
            .mr-2 {
                margin-right: 0.5rem;
            }
            .ml-2 {
                margin-left: 0.5rem;
            }
            .mt-4 {
                margin-top: 1rem;
            }
            .ml-4 {
                margin-left: 1rem;
            }
            .mt-8 {
                margin-top: 2rem;
            }
            .ml-12 {
                margin-left: 3rem;
            }
            .-mt-px {
                margin-top: -1px;
            }
            .max-w-6xl {
                max-width: 72rem;
            }
            .min-h-screen {
                min-height: 100vh;
            }
            .overflow-hidden {
                overflow: hidden;
            }
            .p-6 {
                padding: 1.5rem;
            }
            .py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .pt-8 {
                padding-top: 2rem;
            }
            .fixed {
                position: fixed;
            }
            .relative {
                position: relative;
            }
            .top-0 {
                top: 0;
            }
            .right-0 {
                right: 0;
            }
            .shadow {
                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
            }
            .text-center {
                text-align: center;
            }
            .text-gray-200 {
                --text-opacity: 1;
                color: #edf2f7;
                color: rgba(237, 242, 247, var(--text-opacity));
            }
            .text-gray-300 {
                --text-opacity: 1;
                color: #e2e8f0;
                color: rgba(226, 232, 240, var(--text-opacity));
            }
            .text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity));
            }
            .text-gray-500 {
                --text-opacity: 1;
                color: #a0aec0;
                color: rgba(160, 174, 192, var(--text-opacity));
            }
            .text-gray-600 {
                --text-opacity: 1;
                color: #718096;
                color: rgba(113, 128, 150, var(--text-opacity));
            }
            .text-gray-700 {
                --text-opacity: 1;
                color: #4a5568;
                color: rgba(74, 85, 104, var(--text-opacity));
            }
            .text-gray-900 {
                --text-opacity: 1;
                color: #1a202c;
                color: rgba(26, 32, 44, var(--text-opacity));
            }
            .underline {
                text-decoration: underline;
            }
            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .w-5 {
                width: 1.25rem;
            }
            .w-8 {
                width: 2rem;
            }
            .w-auto {
                width: auto;
            }
            .grid-cols-1 {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            @media (min-width: 640px) {
                .sm\:rounded-lg {
                    border-radius: 0.5rem;
                }
                .sm\:block {
                    display: block;
                }
                .sm\:items-center {
                    align-items: center;
                }
                .sm\:justify-start {
                    justify-content: flex-start;
                }
                .sm\:justify-between {
                    justify-content: space-between;
                }
                .sm\:h-20 {
                    height: 5rem;
                }
                .sm\:ml-0 {
                    margin-left: 0;
                }
                .sm\:px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }
                .sm\:pt-0 {
                    padding-top: 0;
                }
                .sm\:text-left {
                    text-align: left;
                }
                .sm\:text-right {
                    text-align: right;
                }
            }
            @media (min-width: 768px) {
                .md\:border-t-0 {
                    border-top-width: 0;
                }
                .md\:border-l {
                    border-left-width: 1px;
                }
                .md\:grid-cols-2 {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }
            }
            @media (min-width: 1024px) {
                .lg\:px-8 {
                    padding-left: 2rem;
                    padding-right: 2rem;
                }
            }
            @media (prefers-color-scheme: dark) {
                .dark\:bg-gray-800 {
                    --bg-opacity: 1;
                    background-color: #2d3748;
                    background-color: rgba(45, 55, 72, var(--bg-opacity));
                }
                .dark\:bg-gray-900 {
                    --bg-opacity: 1;
                    background-color: #1a202c;
                    background-color: rgba(26, 32, 44, var(--bg-opacity));
                }
                .dark\:border-gray-700 {
                    --border-opacity: 1;
                    border-color: #4a5568;
                    border-color: rgba(74, 85, 104, var(--border-opacity));
                }
                .dark\:text-white {
                    --text-opacity: 1;
                    color: #fff;
                    color: rgba(255, 255, 255, var(--text-opacity));
                }
                .dark\:text-gray-400 {
                    --text-opacity: 1;
                    color: #cbd5e0;
                    color: rgba(203, 213, 224, var(--text-opacity));
                }
            }
        </style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />

        <style>
            body {
                font-family: "Avenir";
            }
        </style>
    </head>
    <body>
        <div class="header pt-2 pb-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-4">
                        <a href="https://www.vkc.com.mx">
                            <img class="logo" src="{{ asset('img/Grupo 23.svg') }}" />
                        </a>
                    </div>
                    <div class="col-8 text-right">
                        <a href="{{ url('/register') }}">
                            <button type="button" class="btn btn-header">Regístrate</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="congress">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <span class="congress-year">CONGRESO 2020</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7">
                        <span class="congress-title">
                            Los paradigmas del Sector financiero Ante la pandemia
                        </span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-9">
                        <span class="reg-text">¿Los acuerdos de Basilea III serán suficientes para mantener las solvencia y la liquidez de las entidades financieras?, ¿Qué tan probable es que se presente una crisis de liquidez?</span>
                    </div>
                </div>
                <div class="row pt-3 pb-4">
                    <div class="col-12">
                        <span class="congress-singin">Inscríbete, entérate, actualízate</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="objective">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <span class="congress-title">
                            Objetivos
                        </span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-9">
                        <span class="reg-text">
                            Conocer los puntos de vista de profesionales y académicos con relación a los impactos que presentarán las entidades financieras en sus modelos de negocio, el perfil de riesgos y su supervivencia
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="itinerary">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12">
                        <span class="itinerary-txt">ITINERARIO</span>
                    </div>
                </div>
                <div id="first-conferences" class="carousel slide carousel-multi-item pt-2" data-ride="carousel">
                    <div class="row align-items-end">
                        <div class="col-6">
                            <span class="itinerary-title">
                                Miércoles 11 <br />
                                de noviembre 2020
                            </span>
                        </div>
                        <div class="col-5">
                            <div class="controls-top text-right">
                                <a class="btn-floating pr-2" href="#first-conferences" data-slide="prev"><img src="{{ asset('img/Trazado 12.svg') }}" alt="previous" /></a>
                                <a class="btn-floating pl-2" href="#first-conferences" data-slide="next"><img src="{{ asset('img/Trazado 11.svg') }}" alt="next" /></a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-inner pt-3 pb-5" role="listbox">
                        @foreach ($events[0] as $event)
                            @if (\Carbon\Carbon::parse($event->date)->format('Y/m/d') == \Carbon\Carbon::create(2020, 11, 11, 0, 0, 0)->format('Y/m/d') && $event->open)
                                @if ($loop->index == 0)
                                <div class="carousel-item active">
                                    <div class="row">
                                @else
                                <div class="carousel-item">
                                    <div class="row">
                                @endif
                            @endif
                            @if (\Carbon\Carbon::parse($event->date)->format('Y/m/d') == \Carbon\Carbon::create(2020, 11, 11, 0, 0, 0)->format('Y/m/d'))
                                <div class="col-4" id="{{ 'event' . $event->id }}">
                                    <div class="card pt-2 pb-2 pl-2 pr-2">
                                        <div class="card-body">
                                            @if ($event->type == 'Inauguration')
                                            <img class="card-img" src="{{ asset('img/Grupo 30.svg') }}" alt="" />
                                            @elseif ($event->type == 'Master Lecture')
                                            <img class="card-img" src="{{ asset('img/Grupo 31.svg') }}" alt="" />
                                            @elseif ($event->type == 'Rounded Table')
                                            <img class="card-img" src="{{ asset('img/Grupo 32.svg') }}" alt="" />
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-name">{{ $event->name }}</h5>
                                        </div>
                                        <div class="card-body">
                                            <span class="card-hour">
                                                {{\Carbon\Carbon::parse($event->start)->format('H:i')}} {{\Carbon\Carbon::parse($event->end)->format('H:i')}}
                                            </span>
                                        </div>
                                        <div class="card-body">
                                            <span class="card-button" onclick="hide('{{ 'event' . $event->id }}')">Conoce más</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 hid" id="{{ 'eventdark' . $event->id }}">
                                    <div class="card-dark pt-2 pb-2 pl-2 pr-2">
                                        <div class="card-body">
                                            <div class="card-circle"></div>
                                        </div>
                                        <div class="card-body">
                                            @foreach ($event->participants as $participant)
                                            @if ($event->type == 'Inauguration' && $participant->isPresenter)
                                                <h5 class="carddark-name">Presentador:</h5>
                                            @elseif ($event->type == 'Master Lecture' && $participant->isPresenter)
                                                <h5 class="carddark-name">Ponente:</h5>
                                            @elseif ($event->type == 'Rounded Table' && $participant->isPresenter)
                                                <h5 class="carddark-name">Moderador:</h5>
                                            @endif
                                                @if ($participant->isPresenter)
                                                    <h5 class="carddark-name">{{ $participant->fullname }}</h5>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="card-body">
                                            <span class="carddark-hour">
                                                {{$participant->position . ' - ' .$participant->institution}}
                                            </span>
                                        </div>
                                        <div class="card-body">
                                            <img class="carddark-arrow" onclick="hide('{{ 'eventdark' . $event->id }}')" src="{{ asset('img/Trazado 34.svg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @if ($event->close)
                                </div>
                            </div>
                            @endif
                            @if ($loop->last && !$event->close)
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="itinerary">
                <div class="container">
                    <div class="row pt-5">
                        <div class="col-12">
                            <span class="itinerary-txt">ITINERARIO</span>
                        </div>
                    </div>
                    <div id="last-conferences" class="carousel slide carousel-multi-item pt-2" data-ride="carousel">
                        <div class="row align-items-end">
                            <div class="col-6">
                                <span class="itinerary-title">
                                    Miércoles 12 <br />
                                    de noviembre 2020
                                </span>
                            </div>
                            <div class="col-5">
                                <div class="controls-top text-right">
                                    <a class="btn-floating pr-2" href="#last-conferences" data-slide="prev"><img src="{{ asset('img/Trazado 12.svg') }}" alt="previous" /></a>
                                    <a class="btn-floating pl-2" href="#last-conferences" data-slide="next"><img src="{{ asset('img/Trazado 11.svg') }}" alt="next" /></a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-inner pt-3 pb-5" role="listbox">
                            @foreach ($events[1] as $event)
                                @if (\Carbon\Carbon::parse($event->date)->format('Y/m/d') == \Carbon\Carbon::create(2020, 11, 12, 0, 0, 0)->format('Y/m/d') && $event->open)
                                    @if ($loop->index == 0)
                                    <div class="carousel-item active">
                                        <div class="row">
                                    @else
                                    <div class="carousel-item">
                                        <div class="row">
                                    @endif
                                @endif
                                @if (\Carbon\Carbon::parse($event->date)->format('Y/m/d') == \Carbon\Carbon::create(2020, 11, 12, 0, 0, 0)->format('Y/m/d'))
                                    <div class="col-4" id="{{ 'event' . $event->id }}">
                                        <div class="card pt-2 pb-2 pl-2 pr-2">
                                            <div class="card-body">
                                                @if ($event->type == 'Inauguration')
                                                <img class="card-img" src="{{ asset('img/Grupo 30.svg') }}" alt="" />
                                                @elseif ($event->type == 'Master Lecture')
                                                <img class="card-img" src="{{ asset('img/Grupo 31.svg') }}" alt="" />
                                                @elseif ($event->type == 'Rounded Table')
                                                <img class="card-img" src="{{ asset('img/Grupo 32.svg') }}" alt="" />
                                                @endif
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-name">{{ $event->name }}</h5>
                                            </div>
                                            <div class="card-body">
                                                <span class="card-hour">
                                                    {{\Carbon\Carbon::parse($event->start)->format('H:i')}} {{\Carbon\Carbon::parse($event->end)->format('H:i')}}
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <span class="card-button" onclick="hide('{{ 'event' . $event->id }}')">Conoce más</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 hid" id="{{ 'eventdark' . $event->id }}">
                                        <div class="card-dark pt-2 pb-2 pl-2 pr-2">
                                            <div class="card-body">
                                                <div class="card-circle"></div>
                                            </div>
                                            <div class="card-body">
                                                @foreach ($event->participants as $participant)
                                                    @if ($event->type == 'Inauguration' && $participant->isPresenter)
                                                        <h5 class="carddark-name">Presentador:</h5>
                                                    @elseif ($event->type == 'Master Lecture' && $participant->isPresenter)
                                                        <h5 class="carddark-name">Ponente:</h5>
                                                    @elseif ($event->type == 'Rounded Table' && $participant->isPresenter)
                                                        <h5 class="carddark-name">Moderador:</h5>
                                                    @endif
                                                    @if ($participant->isPresenter)
                                                        <h5 class="carddark-name">{{ $participant->fullname }}</h5>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="card-body">
                                                <span class="carddark-hour">
                                                    {{$participant->position . ' - ' .$participant->institution}}
                                                </span>
                                            </div>
                                            <div class="card-body">
                                                <img class="carddark-arrow" onclick="hide('{{ 'eventdark' . $event->id }}')" src="{{ asset('img/Trazado 34.svg') }}" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($event->close)
                                    </div>
                                </div>
                                @endif
                                @if ($loop->last && !$event->close)
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

            <div class="event-info">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <button type="button" class="btn btn-zoom">Evento vía Zoom</button>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12">
                            <span class="congress-title">3 mesas redondas</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span class="congress-title">2 conferencias magistrales</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <span class="congress-title">11 y 12 de noviembre</span>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12">
                            <span class="congress-title">Evento <u>totalmente gratis</u></span>
                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12">
                            <a href="{{ url('/register') }}">
                                <button type="button" class="btn btn-header">Regístrate aquí</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <span class="congress-year">CONTACTO</span>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-3">
                            <a href="mailto:Contacto@vkc.com.mx" class="footer-links">
                                <img src="{{ asset('img/Grupo 10.svg') }}" />
                                <span class="pl-2">Contacto@vkc.com.mx</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="tel:+525552067968" class="footer-links">
                                <img src="{{ asset('img/Icon feather-phone.svg') }}" />
                                <span class="pl-2">55 5206 7968</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="tel:+525541888940" class="footer-links">
                                <img src="{{ asset('img/Icon feather-phone.svg') }}" />
                                <span class="pl-2">55 4188 8940</span>
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="https://www.vkc.com.mx" class="footer-links">
                                <span>www.vkc.com.mx</span>
                            </a>
                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-12">
                            <img src="{{ asset('img/Grupo 18.svg') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <script>
            function hide(el) {
                var element = document.getElementById(el);
                var arr = element.className.split(" ");
                var name = 'hid';
                if (arr.indexOf(name) == -1) {
                    element.className += " " + name;
                }
                if(el.includes('dark')){
                    id = el.replace('dark', '');
                    var secondElement = document.getElementById(id)
                    secondElement.className = secondElement.className.replace(/\bhid\b/g, '');
                } else {
                    id = el.replace('event', 'eventdark');
                    var secondElement = document.getElementById(id)
                    secondElement.className = secondElement.className.replace(/\bhid\b/g, '');
                }
            }
        </script>
    </body>
</html>
