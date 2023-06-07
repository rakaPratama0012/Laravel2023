<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DETAIL DATA </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: rgb(9, 176, 182)">
    <h3 class="text-center my-4">DETAIL DATA PENJADWALAN CONTENT ARUI MANAGEMENT</h3>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
               
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                       
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <h4>{{ $post->title }}</h4>
                        <p class="tmt-3">
                            {!! $post->content !!}
                            <a href="http://127.0.0.1:8000/posts" class="btn btn-md btn-danger">Back</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>