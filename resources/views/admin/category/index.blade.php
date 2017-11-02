@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">Categories</h4>
                    <br>
                     <a class="btn btn-success" href="{{route('categories.create')}}">Add</a>  
                     @include('layouts.common.flash')  
                </div>
                <div class="content">
                    @if(count($categories))
                    <table class="table table-bordered table-striped table-hover datatable">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
                                <th>Title</th>            
                                <th>Short Description</th>
                                <th style="width: 50px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php 
                        $i = 0;
                        @endphp 
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->short_description }}</td>
                                    <td>
                                        <a class="btn btn-info btn-xs"  href="{{route('categories.edit',[$category])}}">Edit</a>&nbsp;&nbsp;                    
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-warning" style="color: bla">
                        There is no data!
                    </div>
                    @endif

                </div>                            
            </div>
        </div>
    </div>   
@endsection