@extends('layouts.app')
@section('content')
    <div class="container" >
       <h1>Главная страница</h1>
    </div>

    <color-component></color-component>
  {{--  <search-component available-tags="{{json_encode($arr)}}"></search-component>--}}



    <ul class="nav justify-content-around">
        <li class="nav-item">
            <a class="nav-link active" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
    <div class="row">
    <div class="col-3">Категории красок</div>
    <div class="col-9">Плашки с красками</div>
    </div>


@stop
