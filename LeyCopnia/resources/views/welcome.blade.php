@extends('layouts.master')

@section('title','HOME')

@section('content')

<div class="content">
    <div class="row">
        <div class="col">
            @include('partials.sideMenu')
        </div>
        <div class=col>
            <h1>{{$id}}</h1>
        </div>
        
    </div>
</div>

@stop
