@extends('template.main')

@section('titulo', 'Inicio')

@section('titulo_pagina')

    <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Bienvenido<small> A Soporte Tecnico</small></h1>

@endsection

@section('contenido')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title">With '<a href="#application.urlroot#/html/tags/html_h1_tag.cfm">h1</a>' Element &amp; 'panel-title' Class</h1>
        </div>
        <div class="panel-body">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
        </div>
    </div>

@endsection