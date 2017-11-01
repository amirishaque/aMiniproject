<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<h1>Editor</h1>


</head>
<body>
<form action="" Method="post" >
    <table>
        <tr>
           
            {{csrf_field()}}
            <td>cat_id: </td>
            <td><input type="text" class="form-control" name="cat_id" value="{{old('cat_id')}}"></td>

        </tr>
        <tr>
            <td>post_id:</td>
            <td><input type="text" class="form-control" name="post_id" value="{{$posts->id}}"></td>
           
        </tr>
        <!-- <tr>
        <div class="col-md-offset-0">
                            <input type="radio" name="status" value="post">post<br>
                             <input type="radio" name="status" value="public">public<br>
                             <input type="radio" name="status" value="private">private<br>
                             <input type="radio" name="status" value="draft">draft

                        </div>
                        </tr> -->
        <tr>
            <td><button type="submit" name='update'>Edit</button></td>
        </tr>
    </table>
</form>

</body>
</html>