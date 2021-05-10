@extends('template')

@section('title', 'Add a new flower')

@section('content')

<h2>Insert a new flower</h2>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="number" name="price" placeholder="Price"><br>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="submit" value="INSERT">
</form>

@endsection