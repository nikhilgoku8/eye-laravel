@extends('front.layout.master')

@section('content')

<div class="blogs_resources_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/blog-and-resources.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>Stay</span>
                <br>
                <span class="bold">Updated</span>
            </div>
            <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
            <div class="banner_btns">
                <a class="purple_hollow_btn request_callback">Book An Appoinment</a>
                <a href="tel:+919820166630" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

<!--@include('front.includes.features')-->

<!-- <div class="resources_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="left_pane">
                <div class="info_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/resources/1.jpg') }}">
                    </div>
                    <div class="text_box">
                        <div class="article_title">Eye Health Articles</div>
                        <div class="description">Cupidatat ut voluptate culpa enim in sint amet sunt in irure aute sit in deserunt consectetur. Tempor ad ea culpa adipisicing do nostrud eiusmod excepteur ex consequat.</div>
                    </div>
                </div>
            </div>
            <div class="right_pane">
                <ul class="articles_list">
                    <?php for ($i=0; $i < 4; $i++) { ?>
                        <li>
                            <a href="#">
                                <div class="article_title">Eye Health Articles</div>
                                <div class="description">Ut ut ut reprehenderit eiusmod quis incididunt tempor nostrud pariatur aliquip.</div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
                <div class="text">Patient-friendly PDFs on pre-surgery preparation, eye care tips, chronic disease management. Click and download now.</div>
                <div class="download_guides">
                    <a href="#">Downloadable Guides</a>
                </div>
            </div>

        </div>
    </div>
</div> -->
<!-- resources_wrapper -->

@if(!empty($blogs) && count($blogs) > 0)
<div class="blogs_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="heading">Blogs</div>

            <div class="blog_boxes">
                @foreach($blogs as $blog)
                <a href="{{ url('p/'.$blog->slug) }}" class="blog_box">
                    <div class="img_box">
                        <img src="{{ asset('uploads/blogs/'.$blog->image_file) }}">
                    </div>
                    <div class="text_box">
                        <div class="blog_title">{{$blog->title}}</div>
                        <div class="description">
                            {!! Str::limit($blog->description, 100) !!}
                        </div>
                        <!-- <p>Ut cupidatat fugiat ullamco dolore tempor minim ut veniam elit officia eiusmod non sunt fugiat est.</p> -->
                        <div class="lower_txt">
                            <div class="hospital_name">Orbit Eye Hospital</div>
                            <div class="time">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d-M-Y') }}</div>
                        </div>
                    </div>
                </a>
                @endforeach
                <!-- <div class="blog_box">
                    <div class="img_box">
                        <img src="{{ asset('front/images/blogs/1.png') }}">
                    </div>
                    <div class="text_box">
                        <div class="blog_title">See the doctor for different ways</div>
                        <p>Ut cupidatat fugiat ullamco dolore tempor minim ut veniam elit officia eiusmod non sunt fugiat est.</p>
                        <div class="lower_txt">
                            <div class="hospital_name">Orbit Eye Hospital</div>
                            <div class="time">5 days, 21 hours ago</div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="btn_wrapper center">
                <a href="{{ route('blogs') }}" class="purple_hollow_btn">More Blogs</a>
            </div>

        </div>
    </div>
</div>
<!-- blogs_wrapper -->
@endif


<div class="big_video">
    <div class="video_wrapper">
        <video muted autoplay loop>
            <source src="{{ asset('front/videos/sample.mp4') }}" type="video/mp4">
        </video>
    </div>
</div>
<!-- big_video -->

@include('front.includes.get-in-touch')

</div>
<!-- services_page -->

@endsection