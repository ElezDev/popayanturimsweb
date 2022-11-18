@extends('layouts.app')

@section('template_title')
    editar perfil
@endsection

@section('content')
    <style>
        body {
          
            margin-top: 120px;
        }

        
        .me-2 {
            margin-right: .5rem !important;
        }

        #cal {
            margin-right: .5rem !important;
            position: relative;
        }

        .contenedor-btn-filee input[type="file"] {
            appearance: none;
            display: none;
            visibility: hidden;
            opacity: 0;

        }

        .contenedor-btn-filee {
            border: 10px;
            display: flex;
            position: relative;
            background-color: rgb(0, 0, 0);
            color: #ffffff;

            border-radius: 8px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 15);
            overflow: hidden;
            transition: ease-out 120ms background-color: blue;

        }

        .contenedor-btn-filee:hover {
            background-color: blue;

        }

        .contenedor-btn-filee:focus {
            background-color: blue;

        }

        .contenedor-btn-filee>i {
            margin-right: 0px;
        }

        .contenedor-btn-filee label {
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 0;
            top: 0;
            left: 0;
            cursor: pointer;
        }

        #i12 {
            margin-left: 20%;


        }

        #i123 {
            margin-left: 20%;

        }


        #c123 {
            margin-left: 16%;
            width: 80%;
            height: 80;
            margin: 1px;
            margin-top: 5%;
            border-radius: 5%;
            background: hsla(0, 8%, 53%, 0.2);
            backdrop-filter: blur(5px);

        }

      
        .card-edit{
            width:100%;
          border-radius: 10%;
          background: #eff3f5;
        }
    </style>

    <form method="POST" action="{{ route('Actualizar') }}" role="form" enctype="multipart/form-data">

        @csrf
        <div class="container">
            <div class="main-body">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="card-edit">
                            <div class="card-body" id="cal">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{ 'http://localhost/popayanturims/public/storage/Avatar/' . Auth::user()->Avatar }} "
                                        style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
                                    <div class="mt-3">
                                        <h4>{{ auth::user()->name }}</h4>
                                        <p class="text-secondary mb-1">Admin</p>
                                        <button class="btn btn-primary">Post</button>
                                        <button class="btn btn-outline-primary">Mis Post</button>
<br><br>
                                        <div class="contenedor-btn-filee">
                                            <label for="bnt-file" class="btn btn-outline-primary">Adjuntar imagen</label>
                                            <input type="file" name="Avatar" id="bnt-file"
                                                accept="image/png, image/jpeg">
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                </div>
                                <h1 style="text-align:center">Actualizar Datos</h1>
                                <div id="i12" class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-lg-8 control-label " style="color:black;" for="name">Nombre de Usuario</label>
                                        <input type="text" name="name" value="{{ Auth::user()->name }}"
                                            class="form-control">
                                    </div>
                                </div>



                                <div id="i123" class="col-sm-6 ">
                                    <div class="form-group ">
                                        <label style="color:black;" for="name">correo</label>
                                        <input style="align:center" type="email" name="email"
                                            value="{{ Auth::user()->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class=" text-center mb-4 mt-5 align-items-center ">
                                    <div class="cold-md-12">
                                        <button type="submit" class=" btn btn-danger " id="formSubmit">Guardar
                                            cambios</button>

                                    </div>



                                </div>
                            </div>
                        
                        {{-- <div class="col-lg-8">
                            <div class="card" id="c123">
                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col-sm-3">



                                        </div>
                                    </div>
                                </div>
 --}}


                                {{-- token de seguridad --}}







                            </div>

                        </div>
                    </div>

    </form>

    </div>

    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
