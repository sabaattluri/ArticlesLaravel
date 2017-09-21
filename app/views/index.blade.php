@extends('layouts.default')
@section('content')

<form>

  <div class="container">

    <img  src="http://moofwd.com/wp-content/uploads/2016/12/logo.png" class=class="img-thumbnail" alt="oops" >

    <div class="page-header" style="text-align: center">
     <h2>Articles</h2> 
   </div>

   @if(Session::has('message'))
   <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
   @endif

   <div class = "pull-right"> 
    <a href="{{URL::route('create')}}" class="btn btn-primary">ADD</a>
  </div>
</div>



<table class="table table-hover table-bordered">

 <thead>
  <tr>
    <th>Name</th>
    <th>Description</th>
    <th>URL</th>
    <th>Image</th>
    <th>Status</th>



  </tr>
</thead>
@foreach($articles as $articles )
<tr>

  <td>{{ $articles->name }}</td>
  <td>{{ $articles->description}}</td>
  <td>{{ $articles->URL }}</td>
  <td>{{ $articles->image }}</td>
  <td>{{ $articles->status }}</td>


  <div class="btn-group">
   <td> <a href="{{URL::route('edit',array('id'=>$articles->id))}}" class="btn btn-primary" >Edit</a></td>
   
   <td><a href="{{URL::route('delete', array('id'=>$articles->id))}}" class="btn btn-primary" >Delete</a></td>
   @endforeach

 </div>




</table>

</form>


