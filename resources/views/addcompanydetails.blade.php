<html>
    <head>
        <title>addcompany</title>
        <link rel="stylesheet" href="assets/bootstrap-3.1.1/css/bootstrap.min.css">
    </head>
    <body>
        
        <h2>ADD COMPANY DETAILS</h2>

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

        <form action="cmp" method="POST">

        <fieldset>
            @csrf
        <label>Company Name:</label><br>
        <input type="text" name="companyname" /><br>
        <span style="color:red">@error ('companyname'){{ $message }} @enderror</span><br>

        <label>E-mail:</label><br>
        <input type="text" name="email" /><br>
        
        
        <label>Website:</label><br>
        <input type="text" name="website" /><br>
        

        <input type="submit" name="create" value="submit"/>

        
        </fieldset>

        </form>
        <a href="getcmp">Click here to view Company Details</a>
    </body>

</html>