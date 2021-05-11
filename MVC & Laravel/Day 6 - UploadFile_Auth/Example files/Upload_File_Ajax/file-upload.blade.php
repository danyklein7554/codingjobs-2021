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
    
    <form id="uploadForm" action="{{ route('file.upload.submit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br>
        <input type="submit" value="Upload">
    </form>

    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
    ></script>
    
    <script>
        
        $(function() {
            $('#uploadForm').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: 'file-upload',
                    method: 'post',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                }).done(function(result) {
                    console.log(result);
                }).fail(function(result) {
                    console.log('FAILLLL');
                });
            });
                    
        });
    </script>
  
</body>
</html>