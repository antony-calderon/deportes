@extends('welcome')

@section('content')
<font color="white">
    <div class="container">
    	<H2>Listado de deportes</H2>

    	<ul>
    		<table>
				<tr>
					<th>Id </th>
					<th>deporte </th>
					<th>padre  </th>
					<th>descripcion  </th>
				</tr>
				<br>
				@foreach ($deportesvarios as $deportesvario)
				<tr>
					<td>{{$deportesvario->id}}</td>
					<td>{{$deportesvario->deporte}}</td>
					<td>{{$deportesvario->padre}}</td>
					<td>{{$deportesvario->descripcion}}</td>
				</tr>
				@endforeach
			</table>
    	</ul>
    </div>
</font>

<font color="white">
    <div class="container">
        <H2>Listado ordenado</H2>

        <ul>
            
            
            
        </ul>
    </div>
</font>
@stop