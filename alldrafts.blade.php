@extends('layouts.headers')
@section('body')



 <style>
table, th, td {
    border: 1px solid black;
}
</style>



<div class="col-md-offset-3">
	<title>All Drafts</title>
</head>
<body>

	<h1>All Drafts</h1>
	<table>
        <thead>
		<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Description</th>
		<th>Status</th>
        <th>Delete</th>
       
	</tr>
	</thead>
	@foreach($Posts as $Post)
	<tr>
		<td>{{$Post->id}}</td>
		<td>{{$Post->title}}</td>
	 	<td>{{$Post->Description}}</td>
	 	<td>{{$Post->status}}</td>
	 	
        <td><button><a href="/post/{{$Post->id}}/draft"  button type="button" name="delete"> Delete</a></button></td>
     
 </td>
	 @endforeach
	
	 </table>
	 </div>
@endsection
 @include('layouts.footer')