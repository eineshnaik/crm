<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaycompanydetails</title>
    <link rel="stylesheet" href="assets/bootstrap-3.1.1/css/bootstrap.min.css">
</head>
<body>
@if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
    <div class="container">
    <table class="table table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>Company Name:</th>
            <th>E-mail:</th>
            <th>Website:</th>
            <th>Update:</th>
            <th>Delete:</th>
        </tr>
        <tbody>
        </thead>
        
        @foreach ($company as $value)
        <tr>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->website }}</td>
            <td><a href={{"updatecmp/".$value->name}}>Update</a></td>
            <td><a href={{"deletecmp/".$value->name}}>Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <a href="company">ADD COMPANY</a>
</body>
</html>