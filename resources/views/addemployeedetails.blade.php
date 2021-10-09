<html>
    <head>
        <title>addemployee</title>
        <link rel="stylesheet" href="assets/bootstrap-3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        
        <h2>ADD EMPLOYEE DETAILS</h2>

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

        <form action="emp" method="POST">

        <fieldset>
            @csrf
        <label>First Name:</label><br>
        <input type="text" name="firstname" /><br>
        <span style="color:red">@error ('firstname'){{ $message }} @enderror</span><br>

        <label>Last Name:</label><br>
        <input type="text" name="lastname" /><br>
        <span style="color:red">@error ('lastname'){{ $message }} @enderror</span><br>
        
        <label>Company:</label><br>
        <input type="text" name="company" /><br>
        

        <label>E-mail:</label><br>
        <input type="text" name="email"/><br>
        

        <label>Phone:</label><br>
        <input type="text" name="phone"/><br>
        

        <input type="submit" name="create" value="submit"/>

        
        </fieldset>

        </form>
        <a href="getemp">Click here to view Employee Details</a>
    </body>

</html>