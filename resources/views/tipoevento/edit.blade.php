@extends('adminlte::page')

@section('template_title')
    Update Tipoevento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tipoevento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoeventos.update',  $tipoeventoArray['id']) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PUT') }}
                            @csrf

                            @include('tipoevento.formedit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
