@extends('template')

@section('title', 'Update flower')

@section('content')

<h2>Update flower</h2>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$flower->name}}"><br>

    <input type="number" name="price" placeholder="Price" value="{{$flower->price}}"><br>

    <input type="submit" value="INSERT">
</form>

@endsection