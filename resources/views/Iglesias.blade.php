@extends('layouts.app')

@section('template_title')

@section('content')

    {{-- imagen pricipal  --}}
    <div class="pricipal_1 " id="container_all">
        <div class="overlay">

                 {{-- descrpicion  --}}
                 <div id="showcase">
                    <div class="container">
                        <div class="showcase-row">
                            <div class="showcase-row-txt">
    
                                <h1 id="txt-principal"> <span class="txt-secondary">Iglesias</span></h1>
                                <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                                    sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus
                                    non enim.</p>
                               
                            </div>
    
                        </div>
                    </div>
                </div>

        </div>
    </div>
    {{-- imagen pricipal   fin --}}


    <br> <br> <br>
    {{-- parte1 gastronomia --}}

    <div class="container">
        <style>
            .color-fn {
                background: var(--color-esqueleto);
                border-radius: 15px;
            }
        </style>
        <div class="contenedor">
            {{-- parte-1 carrosel --}}
            <div class="images-contenedor">
                <div class="pic-ctn">
                    <img src="https://images.pexels.com/photos/6833792/pexels-photo-6833792.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" class=" image-cont">
                    <img src="https://images.pexels.com/photos/6127595/pexels-photo-6127595.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" class=" image-cont">
                    <img src="https://images.pexels.com/photos/9602612/pexels-photo-9602612.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" class=" image-cont">
                    <img src="https://images.pexels.com/photos/705778/pexels-photo-705778.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" class=" image-cont">
                    <img src="https://images.pexels.com/photos/2886268/pexels-photo-2886268.jpeg?auto=compress&cs=tinysrgb&w=600"
                        alt="" class=" image-cont">
                </div>
            </div>
            {{--  parte-1 carrosel fin  --}}
            {{-- parte-2 --}}

            <div class="images-contenedor color-fn">
                <div class=" mb-3" style="padding: 30px;">
                   
                    <div class="text-left ">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                        </h6>
                        <h1>Las procesiones de Semana Santa de Popayán</h1>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur sapiente, asperiores at assumenda unde accusamus, eum nam consequuntur dolorem temporibus impedit illo, porro fugit beatae! Enim mollitia dolores aut similique?
                        <br>


                        <br>
                        <img src="https://images.pexels.com/photos/64768/pexels-photo-64768.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
                        <br><br>
                       Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores quibusdam quasi obcaecati animi impedit nemo quae natus a dolorum perspiciatis incidunt optio cumque eaque, adipisci laborum quaerat ab ipsum praesentium!
                        <br><br>
                        {{-- <img src="https://images.pexels.com/photos/6332297/pexels-photo-6332297.jpeg?auto=compress&cs=tinysrgb&w=600"
                            alt=""> --}}


                    </p>

                </div>
            </div>
            {{-- parte-3 --}}
            <div class="images-contenedor color-fn">
                <div class=" mb-3" style="padding: 30px;">
                    <div class="d-flex mb-3">
                        <a class="text-primary text-uppercase text-decoration-none" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-primary text-uppercase text-decoration-none" href="">Popayán Turims</a>
                    </div>
                    <div class="text-left mb- pb-">

                        <h1>Historia</h1>
                    </div>

                    <p>
                        Con la conquista española llegó la evangelización, y con ella, las fiestas religiosas en honor a los santos de la iglesia. Esta labor se comenzó de inmediato. Según el presbítero e historiador Manuel A. Bueno, la primera vez que se dio culto a Dios fue el 15 de agosto de 1537, día de La Asunción a pocos meses de la fundación de Popayán, en una capilla pajiza, cuya ubicación exacta se desconoce, pero se cree que se levantó en el sector de Tulcán, en donde los ibéricos encontraron una pequeña población indígena a la que sacaron de sus viviendas para asentarse allí. Acerca del sitio en donde se efectuó la fundación de la ciudad y se comenzó a poblar, hay distintas versiones. Unos historiadores señalan que fue en las faldas del Cerro de La Eme o de las tres Cruces. Otros en cambio sostienen que fue en la plaza principal
                        <br>
                    <div class="text-left ">

                        <h1>Semana Santa</h1>
                    </div>
                    <p>Desde este templo sale la procesión el Jueves Santo de la Semana Santa de Popayán, tradición que fue inscrita en la Lista representativa del Patrimonio Cultural Inmaterial de la Humanidad de la UNESCO. En esta procesión desfilan 16 pasos con imágenes de origen español y quiteño de los siglos xvi al xx. Las flores rojas de esta noche simbolizan el infinito amor que expresó Cristo al instituir la Sagrada Eucaristía.</p>
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis odit aliquam exercitationem perferendis perspiciatis dolorum blanditiis possimus quibusdam modi, accusantium debitis, unde temporibus recusandae quisquam aliquid, dolore nisi laboriosam ipsam? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis dolore quam accusamus, inventore corrupti, necessitatibus harum quae placeat facilis a dolor provident veniam illum porro adipisci et. Excepturi, neque deserunt?


                 
                </div>
            </div>



        </div>
    </div>
    {{-- parte1 gastronomia  fin --}}


    <!-- imagenes-->
    <div align="center" class="container ">
        <div class="row">
            <div class="coll">
                <div class="box">
                    <img
                        src="https://images.pexels.com/photos/11972090/pexels-photo-11972090.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>
                <div class="box">
                    <img
                        src="https://images.pexels.com/photos/13550259/pexels-photo-13550259.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>

                <div class="box">
                    <img
                        src="https://images.pexels.com/photos/2081128/pexels-photo-2081128.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>
                <div class="box">
                    <img
                        src="https://images.pexels.com/photos/1615776/pexels-photo-1615776.jpeg?auto=compress&cs=tinysrgb&w=600">
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!-- imagenes de algunos platos  fin  -->


    <!-- Restaurantes -->
    {{-- <div align="center" class="container ">
        <div class="row">
            <div class="col">
                <div class="text-left ">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                    </h6>
                    <h1>Restaurantes</h1>
                </div>
                <br>
                <div style="max-width: 1000px;">
                    @foreach ($lugarArray as $lugars)
                    @if ($lugars['tipolugar_id']==3)

                    <div class="blog-item  bg--fondo-gris">
                        <a href="#">
                            <div class="icon ">
                                <img src="{{ 'http://localhost/Popayanturimsapi/storage/app/public/Fotos/'. $lugars['foto_url'] }}"
                                    alt="">
                            </div>
                            <div class="content">
                                <div class="title">{{$lugars['nombre']}} <span class="blog-date">30.07.2022</span></div>
                                <div class="rounded"></div>

                                <p>
                                    {{$lugars['descripcion']}}  
                                </p>
                            </div>

                            <div class="item-arrow">
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </div>
                        </a>

                    </div>



  @endif
                                    @endforeach --}}
                </div>
            </div>
        </div>




        {{-- <a type="button" class="btn btn-outline-dark" class="btn btn-primary  href="" role="button">Ver
            Mas</a> --}}

    </div>
    <!-- Restaurantes fin  -->


    {{-- carrosel de lugares para ver --}}
    <div class="Carousel ">
        <div class="containerr">

            <div class="text-left ">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                </h6>
                <h1>Lugares para ver, formas de recorrer y experiencias destacadas.</h1>
            </div>
        </div>
        {{-- Puntos esenciales en Popayán carrosel parte 1 --}}
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
                                <img src="https://images.pexels.com/photos/14262218/pexels-photo-14262218.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                <img src="https://images.pexels.com/photos/12564219/pexels-photo-12564219.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                <img src="https://images.pexels.com/photos/4681281/pexels-photo-4681281.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                <img src="https://images.pexels.com/photos/13977324/pexels-photo-13977324.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                                <img src="https://images.pexels.com/photos/13977324/pexels-photo-13977324.jpeg?auto=compress&cs=tinysrgb&w=600"
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
    {{-- Puntos esenciales en Popayán carrosel parte 1 fin --}}
    {{-- segunda PARTE --}}
    <br><br>

    {{-- Puntos esenciales en Popayán carrosel parte 2 --}}
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
                            <img src="https://images.pexels.com/photos/12199328/pexels-photo-12199328.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                            <img src="https://images.pexels.com/photos/12564219/pexels-photo-12564219.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                            <img src="https://images.pexels.com/photos/14262218/pexels-photo-14262218.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                            <img src="https://images.pexels.com/photos/13977324/pexels-photo-13977324.jpeg?auto=compress&cs=tinysrgb&w=600"
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
                            <img src="https://images.pexels.com/photos/2081128/pexels-photo-2081128.jpeg?auto=compress&cs=tinysrgb&w=600"
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
    {{-- Puntos esenciales en Popayán carrosel parte 2 fin --}}
    </div>

    </div>
    {{-- carrosel de lugares para ver fin  --}}

    <br><br><br>










@endsection
