@extends('adminlte::page')

@section('template_title')
    Create Gastronomia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
              <div class="card-header bg bg-success" >
                        <span class="card-title">Create Gastronomia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('gastronomia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('gastronomia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection