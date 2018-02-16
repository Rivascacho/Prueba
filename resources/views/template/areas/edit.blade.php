@extends('template.main')

@section('titulo', 'Inicio')

@section('titulo_pagina')

    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel Administrativo<small> Areas</small></h1>

@endsection

@section('contenido')

    <div class="panel panel-default">

        <div class="panel-heading">

            <h1 class="panel-title">Editar Area</h1>

        </div>

        <div class="panel-body">

        	{!! Form::open(['route' => ['areas.update', $area], 'method' => 'PUT']) !!}
			
				<div class="form-group">
						
					{!! Form::label('name', 'NOMBRE') !!}
					{!! Form::text('name', $area->name, ['class' => 'form-control', 'placeholder' => 'Nombre', 'required']) !!}

				</div>				
					
				<div class="form-group" align="right">
						
					{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}

				</div>

			{!! Form::close() !!}

        </div>

    </div>    

@endsection