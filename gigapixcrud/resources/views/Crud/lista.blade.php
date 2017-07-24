@extends('Crud.Template.Template1')

@section('content')

	<table class="lista">
	  <tr>
	    <th>Nome</th>
		<th>Sexo</th>
		<th>Data de Nascimento</th>
		<th>Telefone</th>
	  </tr>
 @foreach($products as $product)    
          <tr>
		    <td>{{$product->nome}}</td>
			<td>{{$product->sexo}}</td>
			<td>{{$product->datadenascimento}}</td>
			<td>{{$product->telefone}}</td>
              <td><a href="{{route('crud.edit', $product->id)}}" class="actions edit"><span class="glyphicon glyphicon-pencil"></span></td>
              <td><a href="{{route('crud.show', $product->id)}}" class="actions delete"><span class="glyphicon glyphicon-eye-open"></span></a></td>
        </tr>	
	</table>
@endforeach
@endsection
