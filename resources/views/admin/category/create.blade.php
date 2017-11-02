@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
            		<div class="row">	
			<div class="col-md-6">	
				<h4 class="title">Categories >> Create</h4>
			</div>
			@include('layouts.common.back')
            		</div> 
            	 </div>
                <div class="content">                    
		<form method="post" action="{{route('categories.store')}}">
		{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Name</label>
						<input name="name" type="text" class="form-control" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Short Description</label>
						<textarea name="short_description" rows="1" class="form-control"></textarea>
					</div>
				</div>                            
			</div>                                 

			<button type="submit" class="btn btn-info btn-fill">Save</button>
			<div class="clearfix"></div>
		</form>
                </div>                            
            </div>
        </div>
    </div>   
@endsection