<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Company</title>
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
    <form action="upcmp" method="POST">

        <fieldset>
            @csrf
        <label>Company Name:</label><br>
        <input type="text" name="companyname" value= @foreach($user as $value){{$value->name}} @endforeach/><br>
        

        <label>E-mail:</label><br>
        <input type="text" name="email"  /><br>
        
        
        <label>Website:</label><br>
        <input type="text" name="website" /><br>
        

        <input type="submit" name="create" value="submit"/>

        
        </fieldset>

    </form>
</body>
</html>