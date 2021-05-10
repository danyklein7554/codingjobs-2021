@extends('template')

@section('title', 'Flower Detail')

@section('content')
    <h2>Flower detail</h2>
    <li>Name: {{ $flower->name }}</li>
    <li>Price: {{ $flower->price_with_euro }}</li>

    <h4>Comments : </h4>
    @foreach($flower->comments as $comment)
        <p>Subject : {{ $comment->subject }}</p>
        <p>Message : {{ $comment->message }}</p>
    @endforeach
@endsection

