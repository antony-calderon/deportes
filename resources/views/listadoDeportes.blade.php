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
    		<!--@foreach ($deportesvarios as $deportesvario)
    		<div class="row">
    			<div class="col-sm">
                    <label class="text-light">Id</label>	
                    {{$deportesvario->id}}             
                </div>
                <div class="col-sm">
                    <label class="text-light">Deporte</label>	
                    {{$deportesvario->deporte}}             
                </div>
                <div class="col-sm">
                    <label class="text-light">Padre</label>
                    {{$deportesvario->padre}}             
                </div>
                <div class="col-sm">
                    <label class="text-light">Descripcion</label>
                    {{$deportesvario->descripcion}}        
                </div>
            </div>
            @endforeach-->
    		<!--@foreach ($deportesvarios as $deportesvario)
    			<li>{{$deportesvario->id}}</li>
    			{{$deportesvario->deporte}}
    			{{$deportesvario->padre}}
    			{{$deportesvario->descripcion}}

    		@endforeach-->
    	</ul>
    </div>
</font>
@stop