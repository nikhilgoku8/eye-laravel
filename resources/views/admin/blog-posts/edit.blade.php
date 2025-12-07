@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="page-header my_style">
                <div class="left_section">
                    <h1 class="">Edit Blog Post - {{ $result->title }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('wm/dashboard'); }}">Home</a></li>
                        <li><a href="{{ url('wm/blog-posts'); }}">Blog Posts</a></li>
                    </ul>    
                </div>
                
                <div class="right_section">
                    <div class="blue_filled_btn">
                        <a href="{{ url()->previous() }}">Back</a>
                    </div>
                </div>
            </div>                    
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="my_panel form_box">
            
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger">{{Session::get('error')}}</div>
            @endif
            
            <form id="data_form" action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="dataID" value="{{ $result->id }}">
                    <div class="inner_boxes">
                        <div class="input_boxes">
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Blog Title</label>
                                    <div class="error form_error" id="form-error-title"></div>
                                    <input type="text" name="title" placeholder="Blog Title*" value="{{ $result->title }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Description</label>
                                    <div class="error form_error" id="form-error-description"></div>
                                    <textarea name="description" placeholder="Description*" class="toolbar">{{ $result->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Blog Date</label>
                                    <div class="error form_error" id="form-error-blog_date"></div>
                                    <input type="text" name="blog_date" placeholder="Blog Date*" class="datepicker" value="{{ $result->blog_date }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input_box">
                                    <label>Existing Image</label>
                                    <div><a href="{{ asset('uploads/blog-posts/'.$result->image_file) }}" target="_blank"><img src="{{ asset('uploads/blog-posts/'.$result->image_file) }}" style="width:100%;"></a></div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="input_box">
                                    <label>Replace Image (800px x 600px)</label>
                                    <div class="error form_error" id="form-error-image_file"></div>
                                    <input type="file" name="image_file" placeholder="Replace Category Image">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Category</label>
                                    <div class="error form_error" id="form-error-category_id"></div>
                                    @if(!empty($blogsCategories))
                                    <select name="category_id">
                                        <option value="">Select Category</option>                                    
                                        @foreach($blogsCategories as $row)
                                        <option value="{{ $row->id }}" @if( $result->category_id == $row->id) selected @endif>{{ $row->category_name }}</option>
                                        @endforeach                                    
                                    </select>
                                    @else
                                    Create a Blog Category First
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Handpick Blog</label>
                                    <div class="error form_error" id="form-error-handpick"></div>
                                    <select name="handpick">
                                        <option value="">Select</option>
                                        <option value="yes" @if( $result->handpick == 'yes') selected @endif>Yes</option>
                                        <option value="no" @if( $result->handpick == 'no') selected @endif>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Meta Title</label>
                                    <div class="error form_error" id="form-error-meta_title"></div>
                                    <input type="text" name="meta_title" placeholder="Meta Title*" value="{{ $result->meta_title }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Meta Description</label>
                                    <div class="error form_error" id="form-error-meta_description"></div>
                                    <input type="text" name="meta_description" placeholder="Meta Description*" value="{{ $result->meta_description }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Meta Keywords</label>
                                    <div class="error form_error" id="form-error-meta_keywords"></div>
                                    <input type="text" name="meta_keywords" placeholder="Meta Keywords*" value="{{ $result->meta_keywords }}">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <input type="submit" name="submit" id="submit" value="Save" class="btn btn-primary">
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </form>

        </div>
        <!-- my_panel -->
    </div>
    <!-- /.row -->

<script type="text/javascript">
$(document).ready(function() {

    $("#data_form").on('submit',(function(e){
        e.preventDefault();

        $(".form_error").html("");
        $(".form_error").removeClass("alert alert-danger");

        $.ajax({
            type: "POST",
            url: "{{ url('wm/blog-posts/store') }}",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                // location.href="{{ url('wm/blog-posts') }}";
                window.location.reload(true);
            },
            error: function(data){
                var responseData = data.responseJSON;        
                if(responseData.error_type=='form'){
                    jQuery.each( responseData.errors, function( i, val ) {
                        $("#form-error-"+i).html(val);
                        $("#form-error-"+i).addClass('alert alert-danger');
                    });
                }else{
                    window.location.reload(true);
                }
            }
        });
    }));

});
</script>
            
@endsection    