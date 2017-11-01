@extends('layouts.headers')
@section('titles',"$title")
@section('body')
  

 <style>
table, th, td {
    border: 1px solid black;
}
</style>


        <div class="main-pannel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="header">
               
	                   <title>Information</title>
                   </div>
                

    <body>

	<h1>User info</h1>
    <div class="content table-responsive table-full-width">
	<table border="1" class="table table-hover table-striped"c>
        <thead>
		<tr>
		<th>Email</th>
		<th>user id</th>	
		<th>Name</th>
		<th>last Name</th>
		<th>Nick Name</th>
		<th>website</th>
        <th>Description</th>
        <th>Edit</th>
     
	</tr>
	</thead>
	
	@if(@empty($users))

    <p> Fill the profile  against this email  </p>
	<tr>
        <td>{{$user1->email}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <td>{{''}}</td>
        <h5>press this button to fill the form</h5>
        <button><a href="profile" type="button" name="edit">Edit the Form</a></button>
    </tr>
    @else
        <tr>
        <td>{{$user1->email}}</td>
		<td>{{$users->id}}</td>
		<td>{{$users->name}}</td>
		<td>{{$users->lastname}}</td>
		<td>{{$users->nickname}}</td>
		<td>{{$users->website}}</td>
		<td>{{$users->description}}</td>
        <h4>Profile pic</h4>
        <img src="{{asset('/storage/upload/'.$users->imagename)}}" width="200" height="100">
        <td><button><a href="printedit/{{$users->id}}"  button type="button" name="edit"> Edit</a></button></td> 
	 	</tr>

        	@endif 	
      

 
	
	
	 </table>
    </div>
     </body>


     </div>
 </nav>

 </div>


   

@endsection
@include('layouts.footer')