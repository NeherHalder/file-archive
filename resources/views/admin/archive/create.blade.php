@extends('layouts.master')

@section('content')
<script type="text/javascript">
    var id=0;
</script>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">File Uploading</h4>
                </div>
                <div class="content">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class=" form-control" name="category" required>
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                         </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Short Description</label>
                                     <textarea name="short_description" rows="2" class="form-control" placeholder="Here can be your description"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input name="date" type="text" class="form-control datepicker">
                                </div>
                            </div>
                        </div>                                   

                        <div class="row block">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Page 1</label>
                                    <input type="file" name="[file]" class="btn btn-success" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tag</label>
                                    <input type="text" class="form-control" name="[tag]">
                                </div>
                            </div> 
                            <div class="col-md-offset-5"></div>                           
                         </div>                         

                         <div class="row">
                             <div class="col-md-6">
                                 <button type="button" class="btn btn-success add pull-right">+</button>  
                             </div>
                             <div class="col-md-offset-6"></div>
                         </div>                    
                        <button type="submit" class="btn btn-info btn-fill">Save</button>
                        <div class="clearfix"></div>
                    </form>
                </div>                            
            </div>
        </div>
    </div>    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
        $('.add').click(function () {
            id++;
            $('.block:last').after('<div id="'+id+'div" class="row block"><div class="col-md-3"><div class="form-group"><label>Next Page</label><input type="file" name="[file]" class="btn btn-success" required></div></div><div class="col-md-3">          <div class="form-group">  <label>Tag</label>  <input type="text" class="form-control" name="[tag]"> </div></div> <div class="col-md-6">                              <div class="form-group">                                     <button id="'+id+'" type="button" class="btn btn-danger remove" style="margin-top: 23px">X</button>                                  </div>                            </div>                         </div>'); // make sure to add the div too
        });


        $('body').on('click', '.remove', function () {
            $('#'+this.id+'div').remove();            
        });
    </script>
@endsection