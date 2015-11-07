@extends('layouts.master')
@section('title', 'Landing page')

@section('css')

  <style>
    html, body { height: 100%; }

    body{
      color: #cccccc;
    }

    .wrap{
      height: 80%;
    }

    .main.container {
      height: 100%;
      width: 80%;
      display: table;
      margin: 0 auto;
      text-align: center;
    }

    h2 {
      display: table-cell;
      font-weight: bold;
      width: auto;
      height: auto;
      vertical-align: middle;
      font-size: 30px;
      text-transform: uppercase;
    }
  </style>

@stop

@section('content')

  <h2>Bienvenido</h2>

@stop

@section('js')

@stop
