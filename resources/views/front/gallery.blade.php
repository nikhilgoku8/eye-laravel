@extends('front.layout.master')

@section('content')

<div class="gallery_page">

<div class="container">
    <div class="inner_container">
        
        @php
            $galleryFolder = base_path('public/front/images/gallery/');

            $entranceFolder = base_path('public/front/images/gallery/entrance/');
            $lobbyFolder = base_path('public/front/images/gallery/lobby/');
            $meetingFolder = base_path('public/front/images/gallery/meeting/');
            $surgicalFolder = base_path('public/front/images/gallery/surgical/');

            // Get all files and directories
            $files_and_dirs = scandir($galleryFolder);

            $entrance_files_and_dirs = scandir($entranceFolder);
            $lobby_files_and_dirs = scandir($lobbyFolder);
            $meeting_files_and_dirs = scandir($meetingFolder);
            $surgical_files_and_dirs = scandir($surgicalFolder);

            // Filter out the "." and ".." entries to get only the actual files/folders
            $files = array_diff($files_and_dirs, array('.', '..'));

            $entrance_files = array_diff($entrance_files_and_dirs, array('.', '..'));
            $lobby_files = array_diff($lobby_files_and_dirs, array('.', '..'));
            $meeting_files = array_diff($meeting_files_and_dirs, array('.', '..'));
            $surgical_files = array_diff($surgical_files_and_dirs, array('.', '..'));
        @endphp

        <div class="heading">Gallery</div>

        <div class="gallery_images">
            @foreach ($entrance_files as $file)
                @if (is_file($entranceFolder . DIRECTORY_SEPARATOR . $file))
                    <div class="img_box">
                        <a class="new_veno" href="{{ asset('front/images/gallery/entrance/'.$file) }}" data-gall="gallery">
                            <img src="{{ asset('front/images/gallery/entrance/'.$file) }}">
                        </a>
                    </div>
                @endif
            @endforeach
            @foreach ($lobby_files as $file)
                @if (is_file($lobbyFolder . DIRECTORY_SEPARATOR . $file))
                    <div class="img_box">
                        <a class="new_veno" href="{{ asset('front/images/gallery/lobby/'.$file) }}" data-gall="gallery">
                            <img src="{{ asset('front/images/gallery/lobby/'.$file) }}">
                        </a>
                    </div>
                @endif
            @endforeach
            @foreach ($meeting_files as $file)
                @if (is_file($meetingFolder . DIRECTORY_SEPARATOR . $file))
                    <div class="img_box">
                        <a class="new_veno" href="{{ asset('front/images/gallery/meeting/'.$file) }}" data-gall="gallery">
                            <img src="{{ asset('front/images/gallery/meeting/'.$file) }}">
                        </a>
                    </div>
                @endif
            @endforeach
            @foreach ($surgical_files as $file)
                @if (is_file($surgicalFolder . DIRECTORY_SEPARATOR . $file))
                    <div class="img_box">
                        <a class="new_veno" href="{{ asset('front/images/gallery/surgical/'.$file) }}" data-gall="gallery">
                            <img src="{{ asset('front/images/gallery/surgical/'.$file) }}">
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