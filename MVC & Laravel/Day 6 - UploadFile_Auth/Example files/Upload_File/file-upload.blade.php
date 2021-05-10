<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif  
    
    <form action="{{ route('file.upload.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br>
        <input type="submit" value="Upload">
    </form>

</body>
</html>