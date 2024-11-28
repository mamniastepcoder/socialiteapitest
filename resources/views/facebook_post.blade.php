<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Facebook Post API</title>
</head>
<body>
    <div class="container justify-content-center">
    <h1 class="mt-4 text-danger">Post a Message to Facebook</h1>
 @if (session('success'))
        <div class="alert alert-success" role="alert">
{{ session('success') }}</div>
    @endif
        @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
        <form action="" method="POST">
        @csrf
        <label class="text-infos"><b>Type To Message</b></label>
        <div class="form-group">
            <textarea class="form-controle mt-2" name="message" placeholder="Write your message here..." rows="4" cols="50"></textarea>
 @error('message')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        </div>
    <button type="submit" class="btn btn-success ">Post </button>
        <a href="{{ 'login/facebook' }}" class="btn btn-primary">
    <i class="fab fa-facebook-f"></i> 
</a>
<a href="{{ 'login/google' }}" class="btn btn-danger">
    <i class="fab fa-google"></i> 
</a>
    </form>
</div>
</body>
</html>
