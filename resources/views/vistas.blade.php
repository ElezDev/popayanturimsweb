@extends('layouts.app')

@section('template_title')

@section('content')

<div class=" " id="container_all">


    <div class="container">

        {{-- contenedor#4 --}}
        <div class="contenedor-vistas">

            {{-- parte-1 --}}
            <div class="images-contenedor-vistas">
                <img src="https://images.pexels.com/photos/1271619/pexels-photo-1271619.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt=""class=" image-cont-vistas">
            </div>
            {{-- parte-2 --}}
            <div class="images-contenedor-vistas">
                <img src="https://images.pexels.com/photos/709496/pexels-photo-709496.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt=""class=" image-cont-vistas">
            </div>
            {{-- parte-3 --}}
            <div class="images-contenedor-vistas ">
                <img src="https://images.pexels.com/photos/2695232/pexels-photo-2695232.jpeg?auto=compress&cs=tinysrgb&w=1600"
                    alt=""class=" image-cont-vistas ">
            </div>
            {{-- parte-4 --}}
            <div class="images-contenedor-vistas">
            <img src="https://images.pexels.com/photos/1365425/pexels-photo-1365425.jpeg?auto=compress&cs=tinysrgb&w=1600"
                alt=""class=" image-cont-vistas">
        </div> 

            <!-- Carousel End -->

        </div>

    </div>
</div>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="pb-3">
                        <div class="blog-item">
                            <!-- Carousel Start -->



                        </div>
                        <div class="bg-white mb-3" style="padding: 30px;">
                            
                            <div class="text-left mb-3 pb-3">
                                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                                </h6>
                                <h1>Las mejores rutas en Popayán, Cauca (Colombia)</h1>
                            </div>
                          
                            <hr>

                            <h3>La torre</h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae alias reprehenderit cum placeat? Vel, nulla exercitationem distinctio provident veritatis repellendus ipsa aut dolores quae, pariatur rerum neque voluptatum magni quidem?  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet odio iste ex nulla, ipsum numquam, alias repudiandae officiis labore suscipit qui velit perferendis earum hic? Repellat excepturi culpa corrupti tempore?</p>
                            <hr>
                            <div class="container-fluid py-1">
                                <div class="container">
                                    <div class="row ">

                                     
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- contenedor#5 --}}
                    <div class="contenedor-5">

                        {{-- parte-1 --}}
                        <div class="images-contenedor-5">
                            {{-- <img src="css\images\Couleur-Zoom.png" alt=""class=" image-cont-5"> --}}
                            <img src="css\images\maps.png" alt=""class=" image-cont-5">
                        </div>
                    </div>
                    <!-- Blog Detail End -->



                    <!-- Comment Form End -->
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                    <!-- Author Bio -->


                    <!-- Category List -->
                    <div class="mb-5">
                        <div id="faq">
                           
                            <ul>
                              <li>
                                <input type="checkbox" checked>
                                <i><img src="" alt=""></i>
                                <h2>Distancia</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae debitis iusto voluptatum doloribus rem, qui nesciunt labore tempore fugit iste deserunt incidunt error provident repudiandae laudantium quo ipsa unde perspiciatis, nihil autem distinctio! Deserunt, aspernatur.</p>
                              </li>
                              <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>Dificulta</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente quasi, quia provident facere recusandae itaque assumenda fuga veniam dicta earum dolorem architecto facilis nisi pariatur.</p>
                              </li>
                              <li>
                                <input type="checkbox" checked>
                                <i></i>
                                <h2>Coordenadas</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam quas placeat assumenda mollitia magni consequatur dolorum, quod nihil distinctio aperiam officia alias! Voluptate dolore ex officiis sit, magnam non a, eligendi pariatur aut, earum dolores tenetur ipsam id illo deleniti. Laudantium deserunt eaque ipsam voluptatum consequuntur voluptatibus sed minima ad accusamus debitis eos similique laboriosam, molestiae? Consequatur neque tempore quis. Eligendi, in ut aspernatur esse nesciunt libero.</p>
                              </li>
                            </ul>
                          </div>
                    </div>





                    
<style>

  
  #faq {
    max-width: 700px;
    margin: auto;
    padding: 0 15px;
    text-align: center;
  }
  
  section.faq {
    padding-top: 2em;
    padding-bottom: 3em;
  }
  
  #faq ul {
    text-align: left;
  }
  .transition, p, ul li i:before, ul li i:after {
    transition: all 0.3s;
  }
  
  #faq .no-select, #faq h2 {
    -webkit-tap-highlight-color: transparent;
    -webkit-touch-callout: none;
    user-select: none;
  }
  
  #faq h1 {
    color: #000;
    margin-bottom: 30px;
    margin-top: 0;
  }
  
  #faq h2 {
    color: #cc071e;
    font-family: 'hm_light', sans-serif;
    font-size: 20px;
    line-height: 34px;
    text-align: left;
    padding: 15px 15px 0;
    text-transform: none;
    font-weight: 300;
    letter-spacing: 1px;
    display: block;
    margin: 0;
    cursor: pointer;
    transition: .2s;
  }
  
  #faq p {
    color: #333;
    text-align: left;
    font-family: 'hm_light', sans-serif;
    font-size: 14px;
    line-height: 1.45;
    position: relative;
    overflow: hidden;
    max-height: 250px;
    will-change: max-height;
    contain: layout;
    display: inline-block;
    opacity: 1;
    transform: translate(0, 0);
    margin-top: 5px;
    margin-bottom: 15px;
    padding: 0 50px 0 15px;
    transition: .3s opacity, .6s max-height;
    hyphens: auto;
    z-index: 2;
  }
  
  #faq ul {
    list-style: none;
    perspective: 900;
    padding: 0;
    margin: 0;
  }
  #faq ul li {
    position: relative;
    overflow: hidden;
    padding: 0;
    margin: 0;
    /*padding-bottom: 4px;*/
    /*padding-top: 18px;*/
    background: #fff;
    box-shadow: 0 3px 10px -2px rgba(0,0,0,0.1);
    -webkit-tap-highlight-color: transparent;
  }
  #faq ul li + li {
    margin-top: 15px;
  }
  #faq ul li:last-of-type {
    padding-bottom: 0;
  }
  #faq ul li i {
    position: absolute;
    transform: translate(-6px, 0);
    margin-top: 28px;
    right: 15px;
  }
  #faq ul li i:before, ul li i:after {
    content: "";
    position: absolute;
    background-color: #cc071e;
    width: 3px;
    height: 9px;
  }
  #faq ul li i:before {
    transform: translate(-2px, 0) rotate(45deg);
  }
  #faq ul li i:after {
    transform: translate(2px, 0) rotate(-45deg);
  }
  #faq ul li input[type=checkbox] {
    position: absolute;
    cursor: pointer;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0;
    touch-action: manipulation;
  }
  #faq ul li input[type=checkbox]:checked ~ h2 {
    color: #000;
  }
  #faq ul li input[type=checkbox]:checked ~ p {
    /*margin-top: 0;*/
    max-height: 0;
    transition: .3s;
    opacity: 0;
    /*transform: translate(0, 50%);*/
  }
  #faq ul li input[type=checkbox]:checked ~ i:before {
    transform: translate(2px, 0) rotate(45deg);
  }
  #faq ul li input[type=checkbox]:checked ~ i:after {
    transform: translate(-2px, 0) rotate(-45deg);
  }
  
  
  
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
 
  
  a,
  a:visited,
  a:focus,
  a:active,
  a:link {
    text-decoration: none;
    outline: 0;
  }
  
  a {
    color: currentColor;
    transition: .2s ease-in-out;
  }
  
  h1, h2, h3, h4 {
    margin: .3em 0;
  }
  
  ul {
    padding: 0;
    list-style: none;
  }
  
  img {
    vertical-align: middle;
    height: auto;
    width: 100%;
  }
  </style>

                    <!-- Recent Post -->
                    <div class="mb-5">
                        <h4 class="text-uppercase mb-4" style="letter-spacing: 5px;">Lugares mas visitados </h4>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                        <a class="d-flex align-items-center text-decoration-none bg-white mb-3" href="">
                            <img class="img-fluid w-25 h-25"
                                src="https://images.pexels.com/photos/3155666/pexels-photo-3155666.jpeg?auto=compress&cs=tinysrgb&w=600"
                                alt="" style="object-fit: cover;">
                            <div class="pl-3">
                                <h6 class="m-1">Rutas de Paseo en Popayán, Cauca (Colombia)</h6>
                                <small>Jan 01, 2050</small>
                            </div>
                        </a>
                    
                     
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <section class="main-content">
        <div class="container">
            <div class="text-left mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                </h6>
                <h1>Actividades en Popayán</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="place-card-sen">
                        <div class="place-card__img-sen">
                            <img src="https://images.pexels.com/photos/13255969/pexels-photo-13255969.jpeg?auto=compress&cs=tinysrgb&w=1600"
                                class="place-card__img-thumbnail-sen" alt="Thumbnail">
                        </div>
                        <div class="place-card__content-sen">
                            <h5 class="place-card__content_header-sen"><a href="#!" class="text-dark">text</a>
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
                </div>
            </div>
        </div>
    </section>




@endsection
