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
@csrf
<div class="container pt-5">
    <h2>Categories<a href="/category-create" class="btn btn-primary" >New Category</a></h2>

    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>

        @foreach($categories as $category)

<td>
    <td>{{ $category->id }}</td>
    <td>{{ $category->Firstname }}</td>
    <td>{{ $category->lastname }}</td>
    <td>{{ $category->email }}</td>
    <td>{{ $loop->index }}</td>

{{--    <td> Raj Joshi</td>--}}
{{--    <td> shreejesh.raj@sifal.deerwalk.edu.np</td>--}}
    <td>
        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
        <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>

</tr>

        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

</body>
</html>
