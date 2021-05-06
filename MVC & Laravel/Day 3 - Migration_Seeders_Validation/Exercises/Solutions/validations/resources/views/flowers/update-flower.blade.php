@extends('template')

@section('title', 'Update flower')

@section('content')

<h2>Update flower</h2>
<form action="" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$flower->name}}"><br>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="number" name="price" placeholder="Price" value="{{$flower->price}}"><br>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <input type="submit" value="INSERT">
</form>

@endsection