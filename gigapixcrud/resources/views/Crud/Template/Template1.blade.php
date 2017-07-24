<!DOCTYPE html>
<html>
    <head>
        <title>
           {{$title or 'Gigapix-CRUD'}} 
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href='{{url('assets/crud/css/style.css')}}'>
    </head>
    <body>
            <!--Div da Esquerda-->
<div class="esquerda">
  </br>Links Diretos de Ações do <b>CRUD</b>:</br>
  <table>
    <tr>
	  <td>
	    <a href="{{route('crud.index')}}">
	      <input type="submit" class="botaodiv" value="Criar"/>
            </a>
	  </td>
	</tr>
	<tr>
	  <td>
              <a href="{{route('crud.create')}}">
	      <input type="submit" class="botaodiv" value="Lista"/>
	    </a>
	  </td>
	</tr>
  </table>
</div>
<!--Div Informativa (Div da direita)-->
<div class="direita">

    @yield('content')
    @stack('scripts')

</div>


    </body>
    <div class="rodape">
    <p class="desen"> <b>CRUD</b> Desenvolvido por Jackson Michael.
    </div>
</html>