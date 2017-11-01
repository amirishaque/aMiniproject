@extends('layouts.headers')
@section('titles',"$title")
@section('body')

<style>
.left-div {
    float: left;
    width: 55%;
    height: 25px;
    margin-right: 10px;
    margin-top: 20px;
}
.right-div {
    margin-left: 40%;
    margin-top: 20px;
    
}

.dropDown{
    margin-top: 15px;
    margin-left: 40px;
}
.visibility{
    margin-left:40px;
    margin-top: 15px;
}
.rightdown{
   
    
    margin-left:620px;
    height: 150px;
    width: 200px;
    overflow: scroll;
}
.heading{
    margin-left:620px;

}
</style>

@php
$action=null;
@endphp


            @if(@is_null($posts->id))       
             @php  $action='/poststore';@endphp 
              @else
            @php $action='/post/{id}/edit/update';@endphp
            @endif
              
              
              

                    {{-- <form class="form-horizontal" method="POST"  enctype="multipart/form-data" action="/poststore"> --}}


            
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{$action}}"  >
                            
                        {{ csrf_field() }}

                         <div class="left-div">

 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2 class="title">Add New Post</h2>
                            </div>


                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"> 
                             <label for="title" class="col-md-2 control-label ">Title</label>
                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" placeholder="Enter Title Here" value="{{$posts->title or '' }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                          
                        </div>
                             <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}"> 
                             <label for="description" class="col-md-2 control-label ">Description</label>
                            <div class="col-md-10">
                        <textarea name="description" cols="60" rows="12" value="{{$posts->Description or ''  }}" placeholder="Description"></textarea>
                          @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-offset-4">
                        @if(@!is_null($posts->id)) 
                        <input type="hidden" name="id" value="{{$posts->id}}">
                        @php

                          $id=$posts->created_at;
                          $id2=explode(' ',$id);
                          $id3=$id2[0];
                          $id4=explode('-',$id3);
                          $year=$id4[0];
                          $month=$id4[1];
                          $day=$id4[2];

                          $path='/'.$year.'/'.$month.'/'.$day.'/';
                        

                        @endphp   

                        @if(@empty($posts->image_name))
                        <img src="{{asset('/img/'.'img.png')}}" width="64" height="64">
                        @else
                        <img src="{{asset($path.$posts->image_name)}}" width="64" height="64">
                        @endif





                        @endif 

                      </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}"> 
                              <label for="image" class="col-md-4 control-label">Upload image</label>
                            <div class="col-md-5">
                                <input id="image" type="file"  name="image" required />

                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       

                                <button type="submit" class="btn btn-primary col-md-offset-4 ">
                                   Save Post
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                                 
                           
                           
                        
   

 <div  class="right-div">

                                   
 <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Publish</h4>
                            </div>
                            
                            <div class="dropDown" >
                                <p>status</p>
                            <select name="status">
                                  <option  value="public" >public</option>
                                  <option  value="draft">draft</option>
                                  <option  value="pendingview">pending views</option>
                                 
                                </select>

                                </div>

                                <div class="visibility">
                                    <p><b>Visibility</b></p>
                                    
                                {{--   {{dd($posts)}}  --}}
                                @if(@isset($posts->id))  
                                    @php
                                    $checked ='';
                                    if('public'==$posts->visibility)
                                    {
                                      $checked ='checked="checked"';
                                    }
                                    @endphp
                                    
                                <input type="radio" name="visibility"  value="public" {{$checked}}>public<br>
                                
                                  {{-- {{dd($id)}} --}}
                                    @php
                                    $checked ='';
                                    if('private'==$posts->visibility)
                                    {
                                      $checked ='checked="checked"';
                                    }
                                    @endphp
                                    
                             <input type="radio" name="visibility"  {{$checked}} value="private">private<br>
                             @if ($errors->has('visibility'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('visibility') }}</strong>
                                    </span>
                                @endif

                              @else
                               <input type="radio" name="visibility"  value="public" >public<br>
                               <input type="radio" name="visibility"  value="private">private<br>
                               @if ($errors->has('visibility'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('visibility') }}</strong>
                                    </span>
                                @endif

                              @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="heading">
        <td><h3>Categories</h3></td>   
    </div>

<div class="rightdown"> 
         
                 
                 
                        <div class="card">

                    


                          
                             @if(@isset($posts->id))  
                              
                             @php 

                             $post1=$post1->toArray();
                              $id=[];
                             foreach($post1 as $post){    
                              

                                 foreach ($post['categories'] as $category){  
                                  $id[]=$category['id'];
                                 }
                               }
                               


                             @endphp
                             

                                 

                                  @foreach($categories as $cat)
                                  {{-- {{dd($id)}} --}}
                                    @php
                                    $checked ='';
                                    if(in_array($cat->id,$id))
                                    {
                                      $checked ='checked="checked"';
                                    }
                                    @endphp
                                   <input type="checkbox" name="cat_id[]" value="{{$cat->id}}" {{$checked}} > {{' '}}{{$cat->name}}<br>
                                   

                                    
                                  @endforeach
                                   @if ($errors->has('cat_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_id') }}</strong>
                                    </span>
                                @endif
                                  

                                @else
                                @foreach($categories as $cat)
                                @if($cat->id==$category_id)
                                @php
                                    $checked ='';
                                      $checked ='checked="checked"';
                                    
                                    @endphp
                                 <input type="checkbox" name="cat_id[]" value="{{$cat->id}}" {{$checked}}  > {{' '}}{{$cat->name}}<br>
                                 @else
                                  <input type="checkbox" name="cat_id[]" value="{{$cat->id}}"   > {{' '}}{{$cat->name}}<br>
                                  @endif
                                

                                 @endforeach
                                 
                                
                                @endif

                                  


                                                                  
                                  
                                   

                                 
                                
                                 
                              
                          
                         
                            
                               
                                  
                               
                                   {{--   <input type="checkbox" name="cat_id[]" checked="checked" value="{{$category['id']}}">{{' '}}{{$category['name']}}<br>

                                    
                                    
                                @endforeach
                               
                            @endphp
                             @endforeach
                               --}}
                                        

                                                    
                


                       



                        
                    
                
            
        </div>

    </div>


                          
                                </form>
                           
   


       


@endsection
@include('layouts.footer')