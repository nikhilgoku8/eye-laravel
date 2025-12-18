@extends('front.layout.master')

@section('content')

<div class="gallery_page">

<div class="container">
    <div class="inner_container">
        
        @php
            $galleryFolder = base_path('public/front/images/gallery/');

            // Get all files and directories
            $files_and_dirs = scandir($galleryFolder);

            // Filter out the "." and ".." entries to get only the actual files/folders
            $files = array_diff($files_and_dirs, array('.', '..'));
        @endphp

        <div class="heading">Gallery</div>

        <div class="gallery_images">
            @foreach ($files as $file)
                @if (is_file($galleryFolder . DIRECTORY_SEPARATOR . $file))
                    <div class="img_box">
                        <a class="new_veno" href="{{ asset('front/images/gallery/'.$file) }}" data-gall="gallery">
                            <img src="{{ asset('front/images/gallery/'.$file) }}">
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

    </div>
</div>

</div>
<!-- services_page -->

@endsection