<html>
    <head>
        <title>signup</title>
        <link rel="stylesheet" href="assets/bootstrap-3.1.1/css/bootstrap.min.css">
        <style> .xyz{
            color:#52ab98;
        }
        h2{
            color:#2b6777;
        }
        input[type="submit"]{
            color:#ffffff;
            background:#1b4d89;
        }
        input[type="text"]{
            background:#eddcd9;
        }
        input[type="password"]{
            background:#eddcd9;
        }
        fieldset{
            border: 1px solid #2b6777;
            width: 400px;
            float: left;
        }
            </style>
    </head>
    <body>
        <h2>Sign Up</h2>
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
        <div class="xyz">
        <form action="add" method="POST">
        <fieldset>
            @csrf
        <label>Id:</label><br>
        <input type="text" name="id" /><br>
        <span style="color:red">@error ('id'){{ $message }} @enderror</span><br>

        <label>Name:</label><br>
        <input type="text" name="name" /><br>
        <span style="color:red">@error ('name'){{ $message }} @enderror</span><br>
        
        <label>email:</label><br>
        <input type="text" name="email" /><br>
        <span style="color:red">@error ('email'){{ $message }} @enderror</span><br>

        <label>password:</label><br>
        <input type="password" name="password"/><br>
        <span style="color:red">@error ('password'){{ $message }} @enderror</span><br>

        <input type="submit" name="submit" value="submit"/> OR

        <a href="login"><button type="button">log in</button></a>
        </fieldset>

        </form>
    </div>
    </body>

</html>