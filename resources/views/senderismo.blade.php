@extends('layouts.app')

@section('template_title')

@section('content')


    {{-- imagen principal  --}}
    <div class="bag_hotel" id="container_all">
        <div class="overlay">
            <div class="showcase-row-txt">

                <h1 id="txt-principal"> <span class="txt-secondary">Rutas verdes </span></h1>
                <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                    sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus
                    non enim.</p>
                
            </div>
        </div>
    </div>
    {{-- imagen principal  fin  --}}

    <main>


        {{-- carousel parte 1 --}}
        <div class="Carousel ">
            <div class="containerr">

                <div class="text-left mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                    </h6>
                    <h1>Lugares para visitar en Popayán</h1>
                </div>
            </div>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/271639/pexels-photo-271639.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Share Your Message</small>Watch</h4>
                                <picture>
                                    <img src="https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=600"
                                        alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>

                </div>


                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        {{-- carousel parte 1 fin --}}



        {{-- descripcion  --}}
        <div class="containerr">

            <div class="text-left mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Las mejores rutas en Popayán
                </h6>
                <h1>Lugares para ver, formas de recorrer y experiencias destacadas.</h1>
            </div>
        </div>
        {{-- descripcion fin  --}}



        <!-- Blog Start   Las mejores rutas en Popayán -->
        <div class="container-fluid py-1">
            <div class="container py-1">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Blog Detail Start -->
                        <div class="pb-3">
                            <div class="blog-item">
                                <!-- Carousel Start -->

                                <div class="contenedor-2">

                                    {{-- parte-1 --}}
                                    <div class="images-contenedor-2">
                                        <img src="https://images.pexels.com/photos/1271619/pexels-photo-1271619.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                            alt=""class=" image-cont-2">
                                    </div>
                                    {{-- parte-2 --}}
                                    <div class="images-contenedor-2">
                                        <img src="https://images.pexels.com/photos/709496/pexels-photo-709496.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                            alt=""class=" image-cont-2">
                                    </div>
                                    {{-- parte-3 --}}
                                    <div class="images-contenedor-2">
                                        <img src="https://images.pexels.com/photos/2695232/pexels-photo-2695232.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                            alt=""class=" image-cont-2">
                                    </div>
                                    {{-- parte-4 --}}
                                    <div class="images-contenedor-2">
                                        <img src="https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                            alt=""class=" image-cont-2">

                                    </div>




                                    <!-- Carousel End -->

                                </div>

                            </div>
                            <div class="bg-white mb-3" style="padding: 30px;">
                                <div class="d-flex mb-3">
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                                    <span class="text-primary px-2">|</span>
                                    <a class="text-primary text-uppercase text-decoration-none" href="">Popayán
                                        Turims</a>
                                </div>
                                <div class="text-left mb-3 pb-3">

                                    <h1>Lugares para visitar en Popayán</h1>
                                </div>
                                <p>¿Buscas las mejores rutas de senderismo en Popayán? Si te estás preparando para hacer
                                    senderismo, ciclismo, correr o explorar otras actividades al aire libre, AllTrails tiene
                                    3 recorridos panorámicos alrededor de Popayán. Disfruta de mapas de rutas cuidadosamente
                                    seleccionadas, junto con reseñas y fotos de apasionados de la naturaleza como tú.</p>

                            </div>
                        </div>
                        <!-- Blog Detail End -->



                        <!-- Comment Form End -->
                    </div>

                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <!-- Author Bio -->

                        <!-- Search Form -->
                        <div class="mb-5">
                            <div class="bg-white" style="padding: 30px;">
                                <div class="input-group">
                                    <input type="text" class="form-control p-4" placeholder="filtrar">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-primary border-primary text-white"><i
                                                class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Category List -->
                        <div class="mb-5">
                            {{-- <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Clacificar por precios</h4> --}}
                            <div class="bg-white" style="padding: 30px;">
                                <ul class="list-inline m-0">
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en
                                            Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">150</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en
                                            Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">131</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en
                                            Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">78</span>
                                    </li>
                                    <li class="mb-3 d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en
                                            Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">56</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a class="text-dark" href="#"><i
                                                class="fa fa-angle-right text-primary mr-2"></i>Rutas de Senderismo en
                                            Popayán, Cauca (Colombia)</a>
                                        <span class="badge badge-primary badge-pill">98</span>
                                    </li>
                                </ul>
                            </div>
                        </div>


                        <!-- Recent Post -->
                        <div class="mb-5">
                            <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h4>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid w-25 h-25"
                                    src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid  w-25 h-25"
                                    src="https://images.pexels.com/photos/4112236/pexels-photo-4112236.jpeg?auto=compress&cs=tinysrgb&w=600 "
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                            <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                                <img class="img-fluid w-25 h-25"
                                    src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=600"
                                    alt="" style="object-fit: cover;">
                                <div class="pl-3">
                                    <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                                    <small>Jan 01, 2050</small>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Blog  Las mejores rutas en Popayán End -->


        {{-- cards de artsanias  --}}

        <section class="main-content">
            <div class="container">
                <div class="text-left mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                    </h6>
                    <h1>Lugares para visitar en Popayán</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="place-card">
                            <div class="place-card__img">
                                <img src="https://images.pexels.com/photos/10869910/pexels-photo-10869910.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    class="place-card__img-thumbnail" alt="Thumbnail">
                            </div>
                            <div class="place-card__content">
                                <h4 class="place-card__content_header"><a href="#!"
                                        class="text-dark place-title">text</a> <a href="#!" class="text-muted"><i
                                            class="fa fa-heart-o"></i></a></h4>
                                <p><i class="fa fa-map-marker"></i> <span class="text-muted">text</span></p>
                                <div class="rating-box">
                                    {{-- <div class="rating-box__items">
                                        <div class="rating-stars">
                                            <img src="img/grey-star.svg" alt="">
                                            <div class="filled-star" style="width:90%"></div>
                                        </div>
                                        <span class="ml-1"><b>4.5</b></span>
                                    </div> --}}
                                    <a href="#!" class="text-muted">(Dificulta:media)</a>
                                </div>
                                <p class="text-muted mb-0 d-none d-sm-block">Lorem ipsum dolor sit amet consectetur,
                                    adipisicing elit. Ipsa officiis, in eos, enim repudiandae cum magni eaque deleniti
                                    repellendus sint saepe quo, excepturi ipsam atque hic laborum fugiat maiores rem?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="place-card place-card--small">
                            <div class="place-card__img">
                                <img src="https://images.pexels.com/photos/10869910/pexels-photo-10869910.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    class="place-card__img-thumbnail" alt="Thumbnail">
                            </div>
                            <div class="place-card__content">
                                <h5 class="place-card__content_header"><a href="#!"
                                        class="text-dark place-title">text</a> <a href="#!" class="text-muted"><i
                                            class="fa fa-heart-o"></i></a></h5>
                                <p class="mb-0"><i class="fa fa-map-marker"></i> <span class="text-muted">text</span>
                                </p>
                                {{-- <div class="rating-box">
                                    <div class="rating-box__items">
                                        <div class="rating-stars">
                                            <img src="img/grey-star.svg" alt="">
                                            <div class="filled-star" style="width:90%"></div>
                                        </div>
                                        <span class="ml-1"><b>4.5</b></span>
                                    </div>
                                    <a href="#!" class="text-muted">(55 ratings & 12 Reviews)</a>
                                </div> --}}
                                <a href="#!" class="text-muted">(Dificulta:media)</a>
                            </div>
                        </div>
                        <div class="place-card place-card--small">
                            <div class="place-card__img">
                                <img src="https://images.pexels.com/photos/10869910/pexels-photo-10869910.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                    class="place-card__img-thumbnail" alt="Thumbnail">
                            </div>
                            <div class="place-card__content">
                                <h5 class="place-card__content_header"><a href="#!"
                                        class="text-dark place-title">text</a> <a href="#!" class="text-muted"><i
                                            class="fa fa-heart-o"></i></a></h5>
                                <p class="mb-0"><i class="fa fa-map-marker"></i> <span class="text-muted">text</span>
                                </p>
                                <div class="rating-box">
                                    {{-- <div class="rating-box__items">
                                        <div class="rating-stars">
                                            <img src="img/grey-star.svg" alt="">
                                            <div class="filled-star" style="width:90%"></div>
                                        </div>
                                        <span class="ml-1"><b>4.5</b></span>
                                    </div> --}}
                                    <a href="#!" class="text-muted">(Dificulta:media)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- cards de artsanias   fin --}}

        <section class="main-content">
            <div class="container">
                <div class="text-left mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                    </h6>
                    <h1>Lugares para visitar en Popayán</h1>
                </div>
                <div class="row">
                    @foreach ($lugarArray as $lugars)
                    @if ($lugars['tipolugar_id']==5)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img id="tamaño"
                                src="{{ 'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'. $lugars['foto_url'] }}"
                                alt="" style="object-fit: cover;
                   ">
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                               
                                </div>
                                <a class="h5 text-decoration-none" href="vistas">{{ $lugars['nombre'] }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        {{-- <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6> --}}
                                        <h5 class="m-0">Ver ruta</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                    @endforeach

                </div>
                {{-- <div class="row">
                    @foreach ($lugarArray as $lugars)
                    @if ($lugars['tipolugar_id']==2)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="place-card-sen">
                            <div class="place-card__img-sen">
                                <img src="{{ 'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'. $lugars['foto_url'] }}"
                                    class="place-card__img-thumbnail-sen" alt="Thumbnail">
                            </div>
                            <div class="place-card__content-sen">
                                <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">{{$lugars['nombre']}}</a>
                                    <a href="#!"><i class="fa fa-heart-o"></i></a>
                                </h5>
                                <div class="flex-center-sen">
                                    <p class="mb-0"><i class="fa fa-map-marker"></i> <span
                                            class="text-muted-sen">text</span></p>
                                    <div class="rating-box-sen">
                                        <div class="rating-stars-sen">
                                            <img src="img/grey-star.svg" alt="">
                                            <div class="filled-star-sen" style="width:86%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                     
                </div>
            </div>
        </section>



        {{-- fañta acomodar los estilod  --}}



    </main>
    {{-- estilos de las cartas de sendersimo  --}}
    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");


      

      
        .place-card__img-thumbnail-sen {
            height: 250px;
            width: 100%;
            object-fit: cover;
        }

        .place-card__content-sen {
            padding: 25px;
        }

        .place-card__content_header-sen {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .flex-center-sen {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .rating-box-sen {
            display: flex;
            align-items: center;
        }

        .rating-stars-sen {
            display: inline-block;
            position: relative;
            width: 70px;
        }

        .rating-stars-sen:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #eee;
        }

        .rating-stars-sen .filled-star {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #ffc107;
        }

        .rating-stars-sen img {
            height: 100%;
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
        }
    </style>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap");

        body {
            background: #f9f9f9;
            font-family: "Roboto", sans-serif;
        }

        .main-content {
            padding-top: 0px;
            padding-bottom: 100px;
        }

        .place-card {
            background: #fff;
            margin-bottom: 25px;
            border-radius: 5px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .place-card__img {
            width: 30%;
        }

        .place-card__img-thumbnail {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .place-card__content {
            padding: 25px;
            width: 70%;
        }

        .place-card__content_header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .place-card__content_header .place-title {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .rating-box {
            margin-bottom: 15px;
        }

        .rating-box__items {
            display: flex;
            align-items: center;
        }

        .rating-stars {
            display: inline-block;
            position: relative;
            width: 100px;
        }

        .rating-stars:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: #eee;
        }

        .rating-stars .filled-star {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            /* background: #070706; */
        }

        .rating-stars img {
            height: 100%;
            width: 100%;
            display: block;
            position: relative;
            z-index: 1;
        }

        .place-card--small .place-card__content_header {
            margin-bottom: 4px;
        }

        .place-card--small .place-card__content {
            padding: 15px;
        }

        .place-card--small .rating-box {
            margin-bottom: 0;
        }

        .place-card--small .rating-stars {
            width: 80px;
        }




        .graper {
            background: #d60000;
            display: grid;
            gap: 10em;
            grid-template-columns: repeat(5, 1fr);
        }

    </style>
    
    
    @endsection
