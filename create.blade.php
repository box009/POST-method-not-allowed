<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>




    






<form action="{{ url('post') }}" method="POST">
    @csrf
    
    Favourite river:<input type="text" name="river" placeholder="write somethin..." size=35 maxlength=35 />
    @error('river')
    <span class="invalid-feedback" role="alert">
        <strong>
            {{ $message }}
        </strong>
    </span>
@enderror
<button type="submit" class="btn btn-primary">Ok</button>
</form>




    
</body>
</html>
