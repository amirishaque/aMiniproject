<!DOCTYPE html>
<html>
<head>
    <title>Sign up </title>

</head>
<body>

<form action="/insert" Method="POST" id="form1">
     {{csrf_field()}}
    <table>
       
        <tr>            
            <td>Name: </td>
            <td><input type="text"   name="name" placeholder="name"></td>

        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email"  name="email" placeholder="Email" required></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password"  name="password" placeholder="Password" required></td>
        </tr>
        <tr>
            <td>Confirm password:</td>
            <td><input type="password"  name="cofirmPassword" placeholder="Confirm Password" required></td>
        
        @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                     @endforeach
                  </ul>
                </div>
                @endif
                </tr>
        <tr>
            <td><input type="submit" name='submit' value='Add'></td>
        </tr>
    </table>
</form>

</body>
</html>