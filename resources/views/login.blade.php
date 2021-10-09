<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="assets/bootstrap-3.1.1/css/bootstrap.min.css">
<style>
    .xyz{
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
    <h2>Login</h2>
    @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
    <div class="xyz">
    <form action="add2" method="POST">
    <fieldset>
        @csrf
    <label>Id:</label><br>
    <input type="text" name="id" /><br>
    <span style="color:red">@error ('id'){{ $message }} @enderror</span><br>

    <label>Password:</label><br>
    <input type="password" name="password" /><br>
    <span style="color:red">@error ('password'){{ $message }} @enderror</span><br>

    <input type="submit" name="submit" value="submit"/><br>
    </fieldset>
    </form>
    </div>

</body>




</html>