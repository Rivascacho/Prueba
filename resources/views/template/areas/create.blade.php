@extends('template.main')

@section('titulo', 'Inicio')

@section('titulo_pagina')

    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel Administrativo<small> Areas</small></h1>

@endsection

@section('contenido')

    <div class="panel panel-default">

        <div class="panel-heading">

            <h1 class="panel-title">Crear Area</h1>

        </div>

        <div class="panel-body">

        	{!! Form::open(['route' => 'areas.store', 'method' => 'POST']) !!}
			
				<div class="form-group">
						
					{!! Form::label('name', 'NOMBRE') !!}
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}

				</div>				
					
				<div class="form-group" align="right">
						
					{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}

				</div>

			{!! Form::close() !!}

        </div>

    </div>    

@endsection