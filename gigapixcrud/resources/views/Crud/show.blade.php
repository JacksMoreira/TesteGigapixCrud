@extends('Crud.Template.Template1')

@section('content')

<h3>Usuário:<b>{{$product->nome}}</b></h3>
<p><b>Telefone:</b> {{$product->telefone}}</p>
<p><b>Sexo:</b>{{$product->sexo}}</p>
<p><b>Data de Nascimento:</b>{{$product->datadenascimento}}</p>

<hr>
@if(isset($errors) && count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <p>{{$error}}</p>
    @endforeach
</div>
@endif

{!! Form::open(['route' => ['crud.destroy', $product->id], 'method' => 'DELETE']) !!}
     {!! Form::submit("Deletar Usuário: $product->nome", ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endsection

