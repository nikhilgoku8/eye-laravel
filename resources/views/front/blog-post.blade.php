@extends('front.layout.master')

@section('content')

<div class="single_blog_page">
	<div class="container">
		<div class="inner_container">
				
				<div class="col-sm-9">
					<div class="blog_info">
						<h1 class="heading">{{ $result->title }}</h1>
						<div class="posted_on">{{ date('M d, Y', strtotime($result->blog_date)) }}</div>
						<div class="blog_img">
							<img src="{{ asset('uploads/blogs/'.$result->image_file) }}" alt="{{$result->title}}" title="{{$result->title}}">
						</div>
						<div class="blog_text">
							{!!$result->description!!}
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					
					<div class="other_blogs">
						<div class="title">Related Blogs</div>
						<ul>
							@if($relatedBlogs->count() > 1)
								@foreach($relatedBlogs as $row)								
									<li @if($row->blog_id == $result->id) class="active_blog" @endif>
										<a href="{{ url('/p/'.$row->slug) }}">{{$row->title}}</a>
									</li>
								@endforeach
								@if($relatedBlogs->count() >= 11)
									<li>
										<b><a href="{{ url('/blogs/'.$result->blogCategory->slug) }}">All Blogs - {{$result->blogCategory->title}}</a></b>
									</li>
								@endif
							@else
								<li><b>No Other Blogs</b></li>
							@endif
						</ul>
					</div>
					
					@if(!empty($otherBlogsCategories) && count($otherBlogsCategories) > 0)
					<div class="other_categories">
						<div class="title">Other Blogs Categories</div>
						<ul>
							@foreach($otherBlogsCategories as $row)								
							<li @if($row->id == $result->category_id) class="active_category" @endif>
								<a href="{{ url('/blogs/'.$row->slug) }}">{{$row->title}}</a>
							</li>
							@endforeach
						</ul>
					</div>
					@endif

				</div>
				<div class="clr"></div>

		</div>
	</div>
</div>

<script>
$(document).ready(function() {
	// alert();
	// Style small headings added in p
	$small_heading = $('p').find('br').prev('strong');
	$small_heading.css({"padding":"0 0 5px","display":"inline-block"});
	$small_heading = $('p').find('span').prev('strong');
	$small_heading.css({"padding":"0 0 5px","display":"inline-block"});

	// Style table head not uploaded correctly
	$('td p').find('strong').closest('td').addClass('th_custom');
	$('td b').find('strong').closest('td').addClass('th_custom');
});
</script>

@endsection