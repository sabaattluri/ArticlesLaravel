@extends('layouts.default')
@section('content')

<!-- @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
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
	<button type="submit" class="btn btn-danger btn-mini" onclick="if(!confirm('Are you sure delete this record?')){return false;};">Delete</button>
	 
	<a href="" class="btn btn-default">No</a>
	
	@stop
