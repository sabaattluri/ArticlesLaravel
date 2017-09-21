<?php


class ArticlesController extends BaseController 
{

	

	public function index()
	{
		$articles=Articles::all();

		return View::make('index',compact('articles'));
	}
//action attribute is defined using the action() method and the handleCreate() method will be responsible for form submission. This method takes from post data, saves in the database and redirects the  to the index page.
	public function handleCreate(){
		$articles = new Articles;
		$articles->name = Input::get('name');
		$articles->description = Input::get('description');
		$articles->URL = Input::get('URL');
		$articles->image = Input::get('image');
		$articles->status = Input::get('status');
		$articles->save();  

		return Redirect::action('ArticlesController@index');
	}

	public function create(){

		return View::make('create');
	}
	public function store()
	{
		$articles->name = Input::get('name');
		$articles->description = Input::get('description');
		$articles->URL = Input::get('URL');
		$articles->image = Input::get('image');
		$articles->status =  Input::get('status');
		return ("added");

	}
	public function show($id)
	{


	}
   //the handleEdit() method will get post data and update the old Atricles.
	public function handleEdit($id){
$articles = Articles::findOrFail($id); // findOrFail:Find a model by its primary key or throw an exception.
$articles->name = Input::get('name');
$articles->description = Input::get('description');
$articles->URL = Input::get('URL');
$articles->image = Input::get('image');
$articles->status = Input::get('status');

$articles->save();  

Session::flash('message', 'successfully updated!'); 
Session::flash('alert-class', 'alert-success'); 
return Redirect::action('ArticlesController@index');
}

public function edit($id)
{
	$editview=Articles::findOrFail($id);

	return View::make('edit',compact('editview'));
	

}
public function handleDelete($id){

	$articles = Articles::findOrFail($id); // findOrFail:Find a model by its primary key or throw an exception.
	$articles->name = Input::get('name');
	$articles->description = Input::get('description');
	$articles->URL = Input::get('URL');
	$articles->image = Input::get('image');
	$articles->status = Input::get('status');

	$articles->delete();  
	Session::flash('message', 'successfully Deleted!'); 
	Session::flash('alert-class', 'alert-success'); 
	return Redirect::action('ArticlesController@index');
}
public function delete($id){

	$deleteview = Articles::findOrFail($id);
	return View::make('delete',compact('deleteview'));
}

}