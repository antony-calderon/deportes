@extends('welcome')

@section('content')
<font color="white">
    <div class="container">
    	<H2>Listado de deportes</H2>

    	<ul>
    		@foreach ($deportesvarios as $deportesvario)
    			{{$deportesvario->id}}
    			<li>{{$deportesvario->deporte}}</li>
    			

    		@endforeach
    	</ul>
    </div>
</font>
@stop