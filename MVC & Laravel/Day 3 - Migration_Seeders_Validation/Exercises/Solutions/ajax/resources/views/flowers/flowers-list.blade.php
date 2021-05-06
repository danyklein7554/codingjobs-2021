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
    <li>
        <button class="myButton" value="{{$flower->id}}">Delete</button>
    </li>
    <br>
    @endforeach
</ul>


@endsection

@section('script')
<script
src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"
></script>

<script>
    
    $(function() {
        $('.myButton').click(function(e) {

        let route = '/delete/flowers/' + $(this).val();
        //console.log(route);

            $.ajax({
                url: route,
                method: 'get',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function(result) {
                console.log(result);
            }).fail(function(result) {
                console.log('FAILLLL');
            });
        });
                
    });
</script>

@endsection