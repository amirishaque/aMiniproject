@extends('layouts.headers')


@section('body')



<form class="form-horizontal" method="POST" action="store">
 	
         {{ csrf_field() }}
		<div class="writing">

		 <label  class="col-md-2 control-label ">Default post Category</label>

			<select name="default_category">
				@foreach($categories as $category)
			  <option value="{{$category->id}}">{{$category->name}}</option>
			  @endforeach

			</select>
		</div>
		
                                <button type="submit" class="btn btn-primary ">
                                   Save Setting
                                </button>
                            

	</form>


@endsection
@include('layouts.footer')