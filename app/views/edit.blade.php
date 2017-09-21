@extends('layouts.default')
@section('content')


<!-- <div>

 <h2>Edit Article</h2>
</div>  -->

<!-- @if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success')}}
</div>
@endif -->
@if ( $errors->count() > 0 )
<div class="alert alert-danger">
	<ul>
		@foreach( $errors->all() as $message )</p>
		<li></li>
		@endforeach
	</ul>
</div>
@endif


<form action="" method="post" role="form"  enctype="multipart/form-data">
	<input type="hidden" name="Articles" value="">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name= "name" value= "{{$editview->name}}"
	</div>
	<div class="form-group">
		<label for="description">Description</label><br />
		<input type="text" class="form-control" name="description" value="{{$editview->description}}"/>
	</div>
	<div class="form-group">
		<label for="URL">URL</label><br />
		<input type="text" class="form-control" name="URL" value="{{$editview->URL}}"/>
	</div>
	<div class="form-group">
		<label for="image">Image</label><br />
		<input type="text" class="form-control" name="image" value="{{$editview->image}}" />
	</div>
	<div class="form-group">
		<label for="status">Status</label><br />
		<input type="enum:draft,published" class="form-control" name="status" value="{{$editview->status}}" />
	</div>

	<input type="submit" value="Update" class="btn btn-primary" />
	<a href="" class="btn btn-link">Cancel</a>
	<div class="flash-message">
		
	</div>
</form>

@stop
