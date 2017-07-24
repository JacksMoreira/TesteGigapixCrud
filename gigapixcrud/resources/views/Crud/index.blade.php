@extends('Crud.Template.Template1')

@section('content')
@if( isset($product) )
<h3>Editar Usuário de Identificação : <b>{{$product->id}}</b></h3>

<p id="linha1"> Por favor, edite os dados necessários nos campos.
	  <form method="post" id="linha1" action="{{route('crud.update', $product->id)}}">
              <input type="hidden" name="_method" value="PUT">
@else
<h3>Criar Usuário</h3>
<p id="linha1"> Por favor, preencha os dados pessoais em todos os campos.
	  <form method="post" id="linha1" action="{{route('crud.store')}}">
@endif
              <input type="hidden" name="_token" value="{{csrf_token()}}">
	    Nome Completo:
            <input type="text" name="nome" required="required" value="{{$product->nome or old('nome')}}"/>
		<fieldset><legend>Sexo:</legend>
		  <input type="radio" name="sexo" required="required" id="masc" value="Masculino"/>
		  <label for="masc">Masculino</label></br>
		  <input type="radio" name="sexo" required="required" id="fem" value="Feminino"/>
		  <label for="fem">Feminino</label>
		</fieldset>
		<p>Telefone de contato
                    <input type="text" required="required" maxlength="15" name="telefone" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" value="{{$product->telefone or old('telefone')}}"/>
		Data de Nascimento:
                <input type="date" required="required" maxlength="10" name="datadenascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1900-01-01" max="2015-09-18" value="{{$product->datadenascimento or old('datadenascimento')}}" />
		<input type="submit" class="botao" value="Enviar dados!"/>
	  </form>
@endsection