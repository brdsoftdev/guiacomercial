@extends('layouts.argo')
@section('content')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h3>Cadastrar SubCategoria</h3>
        </div>
        <form action="{{route('subCategorias.store')}}" method="post" id="formulario" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                @include('Admin.subcategorias._form')
            </div>
            
            <div class="card-footer">
                <button class="btn btn-default" type="submit">Cadastrar</button>
            </div>
        </form>    
    </div>
</div>
@endsection