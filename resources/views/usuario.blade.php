@extends('layouts.master')

@section('contenido')
        <table class="table table-hover">
         
          <thead>
            <tr>
              <th>usuario</th>
               <th>tipo</th>

            </tr>
          </thead>
          <tbody>
          @foreach($usuarios as $usuario)
            <tr>
              
                <td> {{ $usuario->nombre }}</td>
                <td> {{ $usuario->Perfil->nombre }}</td>
          
            </tr>
             @endforeach
          </tbody>
        </table>
      {!!  $usuarios->render() !!}
       
@endsection
