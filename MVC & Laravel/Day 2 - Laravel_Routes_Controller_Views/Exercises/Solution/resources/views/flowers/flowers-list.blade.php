@extends('template')

@section('title', 'Flowers List')

@section('content')

@if($message = Session::get('success'))
<strong class="success">{{$message}}</strong>
@endif

<ul>
    @foreach($flowers as $flower)
    <li>Name: {{ $flower->name }}</li>
    <li>Price: {{ $flower->price }}</li>
    <li><a href="{{ url('/update/flowers', $flower->id) }}">Edit</a></li>
    <li><a href="{{ url('/delete/flowers', $flower->id) }}">Delete</a></li>
    <br>
    @endforeach
</ul>
@endsection