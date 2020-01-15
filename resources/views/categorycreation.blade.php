@extends('layouts.master')

@section('content')

<style>
	label{
		font-size: 20px;
	} 
</style>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			 <h3>Category</h3>
		</div>
	</div>

	<div class="row">
		<div class="col-md-2">
			 <label class="float-right">Name : </label>
		</div>
		<div class="col-md-2">
			 <input type="text" name="main-name" class="form-control">
		</div>
		<div class="col-md-2">
			 <label class="float-right">Icon:</label>
		</div>
		<div class="col-md-2">
			 <input type="file" name="pic" accept="*.png">
		</div>
		</div>

			<div class="row" style="margin-top:50px;">
		<div class="col-md-2">
			 <label class="float-right">Description : </label>
		</div>
		<div class="col-md-2">
			 <input type="text" name="child-name" class="form-control">
		</div>
		<div class="col-md-2">
			 <label class="float-right">To : </label>
		</div>
		<div class="col-md-2">
			 <select name="To" class="form-control">
			 	<option default>Parent Category</option>
			 	<option>1</option>
			 	<option>2</option>
			 	<option>3</option>
			 </select>
		</div>
		<div class="col-md-2">
			 <button type="button" class="btn btn-primary" style="margin-left:150px; border-radius: 10px;">Submit</button>
		</div>
	</div>
</div>
	</div>




<br />






@endsection