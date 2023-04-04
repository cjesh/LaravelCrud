<<!doctype html>
<html lang="1">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>categories</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" herf="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container pt-5">
    <h2>Edit Category</h2>


    <form method="POST" action="/category-update/{{$category ->id}}" >
        @csrf
        @method('put')

        <label> First name </label>
        <input type="text" name="Firstname" class="form-control" value="{{$category->Firstname}}"/> <br>
        <label> Last name </label>
        <input type="text" name="lastname" class=form-control"/>
        <br>
        <label> Email </label>
        <input type="email" name="email" class=form-control"/>
        <button class="btn btn-info mt-4" type="submit">Update</button>

    </form>
</div>


</div>

</body>
</html>

</body>
</html>
