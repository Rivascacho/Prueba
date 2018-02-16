@extends('template.main')

@section('titulo', 'Inicio')

@section('titulo_pagina')

    <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Panel Administrativo<small> Areas</small></h1>

@endsection

@section('contenido')
    
    <div class="panel panel-default">

        <div class="panel-heading">

            <h1 class="panel-title">Ultimas Areas Registradas</h1>

        </div>

        <div class="panel-body">

            <a href="{{ route('areas.create') }}" class="btn btn-primary">NUEVO</a>

            <h4>

				{{ $areas->total() }} Areas | Pagina {{ $areas->currentPage() }} de {{ $areas->lastPage() }}
			
			</h4>

			<table class="table table-responsive">
			
				<thead>
					
					<th>ID</th>
					<th>NOMBRE</th>
					<th>ESTADO</th>
					<th>ACCIONES</th>

				</thead>
				
				<tbody>
					
					@foreach($areas as $area)
					
						<tr>
							
							<th>{{ $area->id }}</th>
							<th>{{ $area->name }}</th>
							<th>{{ $area->state }}</th>
							<th>
								<a href="{{ route('areas.edit', $area) }}" class="btn btn-primary" data-toggle="tooltip" title="Editar">
									<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
								</a>
								<a href="{{ route('areas.destroy', $area) }}" onclick="return confirm('Seguro deseas eliminarlo?')" class="btn btn-danger" data-toggle="tooltip" title="Eliminar">
									<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
								</a>
							</th>

						</tr>

					@endforeach 

				</tbody>


			</table>

			{!! $areas->render() !!}

        </div>

    </div>

@endsection