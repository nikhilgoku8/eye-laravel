@extends('front.layout.master')

@section('content')

<div class="blogs_page">

<div class="hero">
    <div class="img_box">
        <img src="{{ asset('front/images/banners/surgeries.png') }}">
    </div>
    <div class="text_overlay">
        <div class="inner_container">
            <div class="banner_heading">
                <span>your eyes</span>
                <br>
                <span class="bold">we care</span>
            </div>
            <div class="banner_title">Mumbai’s Premier Eye Care Center Since 2006</div>
            <div class="banner_btns">
                <a href="#" class="purple_hollow_btn">Book An Appoinment</a>
                <a href="#" class="purple_hollow_btn">Call emergency care</a>
            </div>
        </div>
    </div>
</div>

@include('front.includes.features')

<div class="about_hospital grey_bg">
    <div class="container">
        <div class="inner_container">
            
            <!-- <div class="title">Main Services Overview</div> -->
            <div class="text">
                <p class="sub_title">Stay informed with expert articles on eye health, treatments, and advanced care. Our blogs simplify complex topics to help you make confident, well-guided decisions.</p>
            </div>

        </div>
    </div>
</div>
<!-- about_hospital -->

<div class="blogs_wrapper">
    <div class="container">
        <div class="inner_container">
            
            <div class="left_pane">
                @if(!empty($blogs) && count($blogs) > 0)
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
                                    <div class="lower_txt">
                                        <div class="hospital_name">Orbit Eye Hospital</div>
                                        <div class="time">{{ \Carbon\Carbon::parse($blog->blog_date)->format('d-M-Y') }}</div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="table_pagination">
                        {{$blogs->links()}}
                    </div>
                @else
                NO BLOGS
                @endif
            </div>
            <div class="right_pane">
                @if(!empty($blogCategories) && count($blogCategories) > 0)
                <ul class="blog_categories">
                    @foreach($blogCategories as $category)
                        <li class="@if(!empty($currentCategory) && ($category->slug == $currentCategory->slug)) active @endif"><a href="{{ url('blogs/'.$category->slug) }}">{{$category->title}}</a></li>
                    @endforeach
                </ul>
                @endif
            </div>

        </div>
    </div>
</div>

@include('front.includes.get-in-touch')

</div>
<!-- blogs_page -->

@endsection