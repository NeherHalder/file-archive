@extends('layouts.master')

@section('style')
<link href="{{ asset('css/search.css') }}" rel="stylesheet" />
@endsection
@section('content')
<div class="content">
	<div class="row">
	<div class="col-md-12">
		<div class="input-group" id="adv-search">
	                <input type="text" class="form-control" placeholder="Search for snippets" />
	                <div class="input-group-btn">
	                    <div class="btn-group" role="group">
	                        <div class="dropdown dropdown-lg">
	                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
	                            <div class="dropdown-menu dropdown-menu-right" role="menu">
	                                <form class="form-horizontal" role="form">
	                                  <div class="form-group">
	                                    <label for="filter">Filter by Category</label>
	                                    <select class="form-control">
	                                         <option value="">Select</option>
	                                        @foreach($categories as $category)
	                                        <option value="{{$category->id}}">{{$category->name}}</option>
	                                        @endforeach
	                                    </select>
	                                  </div>
	                                  <div class="form-group">
	                                    <label for="contain">Author</label>
	                                    <input class="form-control" type="text" />
	                                  </div>
	                                  <div class="form-group">
	                                    <label for="contain">Contains the words</label>
	                                    <input class="form-control" type="text" />
	                                  </div>
	                                  <button type="submit" class="btn btn-primary"><i class="pe-7s-search"></i></button>
	                                </form>
	                            </div>
	                        </div>
	                        <button type="button" class="btn btn-primary"><i class="pe-7s-search"></i></button>
	                    </div>
	                </div>
	            </div>
	</div>
</div>
</div>
@endsection