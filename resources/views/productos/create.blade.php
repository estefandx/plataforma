@extends('layouts.master')

@section('contenido')

    <section id="registration" class="container">
        <form  role="form"  method="POST" action="{{ url('/product') }}" enctype="multipart/form-data">
            {{ csrf_field() }}


            <div class="form-group col-lg-7">
                <input type="file" id="imagen" name="imagen" placeholder="duracion(minutos)" class="form-control"  required autofocus>

            </div>









            <div class="form-group col-lg-7">
                <button class="btn btn-success btn-md btn-block">Registrarme</button>
            </div>

        </form>
    </section><!--/#registration-->
@endsection