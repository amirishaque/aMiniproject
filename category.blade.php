@extends('layouts.headers')
@section('titles',"$title")
@section('body')
<style type="text/css">
.left-div {
    float: left;
    width: 50%;
    height: 25px;
    margin-right: 10px;
    margin-top: 20px;
}
.right-div {
    margin-left: 50%;
    
}
</style>

<div class="left-div">

 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="header">
                        <h2 class="title"> Categories</h2>
                        <h4><b>Add New Category</b></h4>

                        
                    </div>

                    
                    
                    <form class="form-horizontal" method="POST"   action="/categorystore">
                        {{ csrf_field() }}
                        

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                          <label for="name" class="col-md-2 control-label ">Name</label>
                          <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>




                    <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}"> 
                     <label for="slug" class="col-md-2 control-label">Slug</label>
                     <div class="col-md-6">
                        <input id="slug" type="text" class="form-control" name="slug" value="{{old('slug') }}" autofocus>

                        @if ($errors->has('slug'))
                        <span class="help-block">
                            <strong>{{ $errors->first('slug') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                




                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}"> 
                 <label for="description" class="col-md-2 control-label"></label>
                 <div class="col-md-6">
                    <textarea name="description" cols="50" rows="10" placeholder="Description"></textarea>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            
            

            <div class="col-md-6 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                   Add New Category
               </button>
           </div>


       </form>
   </div>
</div>
</div>
</div>
</div>
</div>



<div class="right-div">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        

                        <table  class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    
                                    
                                    <th> Name</th>
                                    <th>Description</th>
                                    <th>Slug</th>
                                    <th>Count</th>
                                    

                                    
                                </tr>

                            </thead>
                            
                            @foreach($categories as $category)

                            @if(@is_null($category->description))
                            <tr>
                               <td><a href="/categoryedit/{{$category->id}}">{{$category->name}}</a></td>
                               <td>{{''}}</td>
                               <td>{{$category->slug}}</td>
                               @php 
                               $count=0;
                              foreach($post_cat as $posts){
                                if($posts->cat_id==$category->id)
                                  $count=$count+1;
                              }
                               
                            @endphp
                            <td>{{$count}}</td>
                           </tr>
                           @else   
                           <tr>
                               <td><a href="/categoryedit/{{$category->id}}">{{$category->name}}</a></td>
                               <td>{{$category->description}}</td>
                               <td>{{$category->slug}}</td>
                               @php 
                               $count=0;
                              foreach($post_cat as $posts){
                                if($posts->cat_id==$category->id)
                                  $count=$count+1;
                              }
                               
                            @endphp
                            <td>{{$count}}</td>
                           </tr>
                           @endif


                           
                           @endforeach


                       </table>
                       {{$categories->links()}}






                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection
@include('layouts.footer')


