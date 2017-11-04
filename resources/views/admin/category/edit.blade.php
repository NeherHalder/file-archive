@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <div class="row">	
			<div class="col-md-6">	
				<h4 class="title">Categories >> Edit</h4>
			</div>
			@include('layouts.common.back')
            		</div>
                </div>
                <div class="content">                    
		<form method="post" action="{{route('categories.update',[$category])}}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input name="name" type="text" class="form-control" required value="{{$category->name}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Short Description</label>
						<textarea name="short_description" rows="1" class="form-control">{{$category->short_description}}</textarea>
					</div>
				</div>                            
			</div>                                 

			<button type="submit" class="btn btn-info btn-fill">Update</button>
			<div class="clearfix"></div>
		</form>
                </div>                            
            </div>
        </div>
    </div>   
@endsection