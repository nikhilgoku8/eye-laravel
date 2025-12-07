@extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="page-header my_style">
                <div class="left_section">
                    <h1 class="">Edit Blog Category - {{ $result->category_name }}</h1>
                    <ul class="breadcrumb">
                        <li><a href="{{ url('wm/dashboard'); }}">Home</a></li>
                        <li><a href="{{ url('wm/blogs-categories'); }}">Blogs Categories</a></li>
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
                                    <label>Category Name</label>
                                    <div class="error form_error" id="form-error-category_name"></div>
                                    <input type="text" name="category_name" placeholder="Category Name*" value="{{ $result->category_name }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input_box">
                                    <label>Existing Category Icon</label>
                                    <div><a href="{{ asset('uploads/blogs-categories/'.$result->image_file) }}" target="_blank"><img src="{{ asset('uploads/blogs-categories/'.$result->image_file) }}" style="width:100%;"></a></div>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="input_box">
                                    <label>Replace Category Icon (90px x 90px)</label>
                                    <div class="error form_error" id="form-error-image_file"></div>
                                    <input type="file" name="image_file" placeholder="Replace Category Image">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input_box">
                                    <label>Date for Sort Order</label>
                                    <div class="error form_error" id="form-error-sort_order"></div>
                                    <input type="text" name="sort_order" class="datepicker" value="{{ $result->sort_order }}" readonly>
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
            url: "{{ url('wm/blogs-categories/store') }}",
            data:  new FormData(this),
            dataType: 'json',
            cache: false,
            contentType: false,
            processData: false,
            success: function(result) {
                // location.href="{{ url('wm/blogs-categories') }}";
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