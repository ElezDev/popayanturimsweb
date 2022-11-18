@extends('layouts.app')

@section('template_title')

@section('content')







    {{-- esta parte es el texto del header  --}}

    <div class="pricipal_1 " id="container_all">
        <div class="overlay">
            {{-- descrpicion  --}}
            <div id="showcase">
                <div class="container">
                    <div class="showcase-row">
                        <div class="showcase-row-txt">

                            <h1 id="txt-principal">Popayán <span class="txt-secondary">turims</span></h1>
                            <p class="large">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus
                                sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus
                                non enim.</p>
                          
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    {{-- esta parte es el texto del header  fin --}}

    <main>

        <style>
            .aboutt {
                background: url(../images/about_bg.jpg);
                background-position-x: 0%;
                background-position-y: 0%;
                background-repeat: repeat;
                background-size: auto;
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                margin-top: 0px;
                padding: 15px 40px;
            }


            .read_more {
                font-size: 17px;
                background-color: #413c31;
                color: #fff;
                padding: 6px 0px;
                width: 100%;
                max-width: 157px;
                text-align: center;
                display: inline-block;
                transition: ease-in all 0.5s;
                font-weight: 500;
                border-radius: 5px;
                height: 43px;
            }


            .about .titlepage span {
                padding-bottom: 60px;
                padding-top: 40px;
                font-weight: 500;
            }

            .titlepage span {
                font-size: 17px;
                line-height: 25px;
                color: #191919;
                padding-top: 13px;
                display: block;
            }

            .titlepage h2 {
                font-size: 40px;
                color: #252525;
                line-height: 40px;
                font-weight: bold;
                padding-top: 8px !important;
                padding: 0;
                padding-top: 0px;
            }

            h2 {
                font-family: 'Poppins', sans-serif;
                font-size: 22px;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                letter-spacing: 0;
                font-weight: normal;
                position: relative;
                padding: 0 0 10px 0;
                font-weight: normal;
                line-height: normal;
                color: #111111;
                margin: 0;

            }

            .d_flex {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
            }

            .row {
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
            }

            *,
            ::after,
            ::before {
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            * {
                box-sizing: border-box !important;
            }

            .about_img figure img {
                width: 100%;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            img {
                border-style: none;
            }

            img {
                vertical-align: middle;
                border-style: none;
            }

            @media (min-width: 768px) {}

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }

            .col,
            .col-1,
            .col-10,
            .col-11,
            .col-12,
            .col-2,
            .col-3,
            .col-4,
            .col-5,
            .col-6,
            .col-7,
            .col-8,
            .col-9,
            .col-auto,
            .col-lg,
            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9,
            .col-lg-auto,
            .col-md,
            .col-md-1,
            .col-md-10,
            .col-md-11,
            .col-md-12,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-5,
            .col-md-6,
            .col-md-7,
            .col-md-8,
            .col-md-9,
            .col-md-auto,
            .col-sm,
            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9,
            .col-sm-auto,
            .col-xl,
            .col-xl-1,
            .col-xl-10,
            .col-xl-11,
            .col-xl-12,
            .col-xl-2,
            .col-xl-3,
            .col-xl-4,
            .col-xl-5,
            .col-xl-6,
            .col-xl-7,
            .col-xl-8,
            .col-xl-9,
            .col-xl-auto {
                position: relative;
                width: 100%;
                min-height: 1px;
                padding-right: 15px;
                padding-left: 15px;
            }

            .about {
                background: url("https://images.pexels.com/photos/531972/pexels-photo-531972.jpeg?auto=compress&cs=tinysrgb&w=600");
                background-position-x: 0%;
                background-position-y: 0%;
                background-repeat: repeat;
                background-size: auto;
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                margin-top: 90px;
                padding: 90px 0;
                object-fit: cover;
            }
        </style>

        {{--  parte #1 carrosel de lugares para vistar en popayán --}}
        <div class="Carousel">
            <div class="containerr">


                <div class="text-left mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Puntos esenciales en Popayán
                    </h6>
                    <h1>Atracciones destacadas en Popayán</h1>
                </div>
            </div>
            {{-- parte#1 --}}
            <div class="slick-list" id="slick-list">


                {{-- carrosel --}}
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
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
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
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFLuIZMo4onubflp1JEJ4q3mS0qA37ddYctg&usqp=CAU"
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
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxvcMgR9Yf26vQyBHayq04QaJ-dQplPN-8Q&usqp=CAU"
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
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB9Dry8zlnCiPm7Kv8EmYg6je9OIBbc9UE2A&usqp=CAU"
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
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHxZMXgJiK_-5z6oR5hk062IZGBQhQaEs3Yg&usqp=CAU"
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
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZBa7qTRRwaqMktJJYEG6xbCmUetuq_FD2bQ&usqp=CAU"
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
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
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
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
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
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
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
                                    <img src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
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
        {{-- carrosel de lugares para vistar en popayán  fin --}}



        {{-- parte #2  Popayán "Ciudad Blanca" --}}
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-6" style="min-height: 500px; rounded">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100"
                                src="https://images.pexels.com/photos/13200191/pexels-photo-13200191.jpeg?auto=compress&cs=tinysrgb&w=600"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 pt-5 pb-lg-5">
                        <div class="about-text bg-white p-4 p-lg-5 my-lg-5  radio-b">
                            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Cauca</h6>
                            <h1 class="mb-3">Popayán "Ciudad Blanca"</h1>
                            <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum
                                labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut.
                                Erat
                                duo eos et erat sed diam duo</p>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <img class="img-fluid  w-100 h-100"
                                        src="https://media.istockphoto.com/photos/streets-of-popayn-colombia-picture-id997286182?b=1&k=20&m=997286182&s=612x612&w=0&h=O1OKdbEOXdXqN9BXY7Gu46Wt7JDZSdBnole7yMi07Rs="
                                        alt="">
                                </div>
                                <div class="col-6">
                                    <img class="img-fluid  w-100 h-100"
                                        src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
                                        alt="">
                                </div>
                            </div>
                            <a href="" class="btn btn-primary mt-1">mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- parte #2  Popayán "Ciudad Blanca" fin  --}}



        {{-- parte #3  Turismo religioso  --}}
        {{-- descripcion  --}}
       
        {{-- descripcion  --}}

        {{-- about --}}
        <div class="about">
            <div class="container ">

                <div class="row d_flex">

                    <div class="col-md-7">
                        <div class="about_img">
                            <figure><img
                                    src="https://cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/WTSKMHCNABMF3FXFGMX7P5UL2I.jpg"
                                    alt="#" /></figure>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="">
                            <h1>Turismo religioso </h1>
                            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni ipsa dicta aut tempora asperiores aliquam in! <a href="iglesias" class="text-primary"
                                    target="_blank">lorem </a> </p>
                            <p><a href="iglesias" target="_blank"
                                    class="btn btn-primary btn-lg">Learn More
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- about  fin --}}

        {{-- parte #3  Turismo religioso fin --}}


        {{-- parte #4  ¿Qué hacer en Popayán?  aboutt --}}

        <div class="containerr">
            <div class="aboutt">
                <div class="content-aboutt">
                    <div class="">
                        <h1>¿Qué hacer en Popayán?</h1>
                        <p class="lead">Te contamos las principales actividades y experiencias que puedes realizar en este destino turístico.
                            At <a href="#" class="text-primary"
                                target="_blank">mas</a> </p>
                        <p><a href="#" target="_blank" class="btn btn-primary btn-lg">lear</a></p>
                    </div>
                </div>
                <div class="content-aboutt">
                    <div class="card-welcome">
                        <div class="card-image-welcome">
                            <img src="https://cdn.pixabay.com/photo/2021/05/28/10/05/kunsthistorisches-museum-6290417__340.jpg"
                                alt="">
                        </div>
                        {{-- <div class="card-description-welcome">
                             <p class="text-title-welcome"> Card Title</p> 

                        </div> --}}
                    </div>
                </div>
                <div class="content-aboutt">
                    <div class="card-welcome">
                        <div class="card-image-welcome">
                            <img src="https://cdn.pixabay.com/photo/2021/05/28/10/05/kunsthistorisches-museum-6290417__340.jpg"
                                alt="">
                        </div>
                        {{-- <div class="card-description-welcome">
                             <p class="text-title-welcome"> Card Title</p> 

                        </div> --}}
                    </div>
                </div>

                <div class="content-aboutt">
                    <div class="card-welcome">
                        <div class="card-image-welcome">
                            <img src="https://images.pexels.com/photos/14208380/pexels-photo-14208380.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
                                alt="">
                        </div>
                        {{-- <div class="card-description-welcome">
                            <p class="text-title-welcome"> Card Title</p>

                        </div> --}}
                    </div>
                </div>






            </div>

        </div>


        {{-- parte #4  ¿Qué hacer en Popayán? fin --}}


        {{-- parte #5     ¿Qué hacer en Popayán? --}}
        {{-- descripcion  --}}
        <div class="containerr">
            <div class="text-left mb-3 pb-3">
           
                </h6>
                <h1>Lugares para visitar en Popayán.</h1>
            </div>

        </div>
        {{-- descripcion fin --}}
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
                                <img src="https://media.istockphoto.com/photos/san-francisco-temple-popayan-colombia-march-2016-picture-id1330248710?b=1&k=20&m=1330248710&s=612x612&w=0&h=4qNABeiOgKi9ZD0pfP05_z7EY3eQdEhxNBZtePu4tfE="
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
        <br><br><br><br><br>
        {{-- parte #5     ¿Qué hacer en Popayán? --}}

        {{-- parte #6     nosotros --}}
        {{-- <div class="containerr">

            <div class="text-left mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">gastronomía payanesa
                </h6>
                <h1>Lugares para ver, formas de recorrer y experiencias destacadas.</h1>
            </div>
        </div> --}}



    </main>


@endsection
