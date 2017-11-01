@extends('layouts.headers')
@section('titles',"$title")
@section('body')

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h2 class="title"> Categories</h2>
                                <h4><b>EditCategory</b></h4>

                               
                            </div>

       {{-- 
                        {{dd($categories)}} --}}
                    <form class="form-horizontal" method="POST"   action="/Update">
                        {{ csrf_field() }}
                      

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}"> 
                              <label for="name" class="col-md-2 control-label ">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{$categories->name}}" required autofocus>

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
                                <input id="slug" type="text" class="form-control" name="slug" value="{{$categories->slug }}" autofocus>

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
                        <textarea name="description" cols="50" rows="10" value="{{$categories->description}}"></textarea>
                            @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{$categories->id}}">
       

                             <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                   Update Category
                                </button>
                            </div>


</form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
@include('layouts.footer')