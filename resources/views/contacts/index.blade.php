@extends('contacts.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contacts.create') }}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Puesto</th>
            <th>Ciudad</th>
            <th width="280px">Acciones</th>
        </tr>
        @foreach ($contacts as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->pnombre }}</td>
            <td>{{ $value->papellido }}</td>
            <td>{{ $value->correo }}</td>
            <td>{{ $value->puesto }}</td>
            <td>{{ $value->ciudad }}</td>
            <td>
                <form action="{{ route('contacts.destroy',$value->id_contacto) }}" method="POST">  
                    <a class="btn btn-primary" href="{{ route('contacts.edit',$value->id_contacto) }}">Editar</a>
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Desea eliminar : {{ $value->pnombre }}?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $contacts->links() !!}      
@endsection