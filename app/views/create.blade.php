@extends('layouts.default')
@section('content')




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
	
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" />
	</div>
	<div class="form-group">
		<label for="description">Description</label><br />
		<input type="text" class="form-control" name="description" />
	</div>
	<div class="form-group">
		<label for="URL">URL</label><br />
		<input type="text" class="form-control" name="URL" />
	</div>
	<div class="form-group">
		<label for="image">Image</label><br />
		<input type="text" class="form-control" name="image" />
	</div>
	<div class="form-group">
		<label for="status">Status</label><br />
		<input type="enum:draft,published" class="form-control" name="status" />
	</div>
	<input type="submit" value="Add" class="btn btn-primary" />
	<a href="" class="btn btn-link">Cancel</a>
</form>
@stop