@extends("frontend.includes.layout")
@section('title','Video Page')
@section('content')
@push('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
@endpush
<section class="mt-40">
    <div class="container-fluid">
        <div class="row">
            @include("frontend.includes.categories")
            <div class="col-xl-10 col-lg-10 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="single-video mb-40 content-center">
                            <h2 class="video-title">{{ $singleVideo->video_title }}</h2>
                            <div class="video-player-content">
                                <video id="player" controls crossorigin playsinline></video>
                                <button class="play_video">Play Video</button>
                                <div class="video-player-content-btn text-left">
                                    <a href="" class="bttn-small btn-fill"><i class="fa fa-user"></i>Robbin</a>
                                    <a href="" class="bttn-small btn-fill"><i class="fa fa-eye"></i>24M</a>
                                    <a href="" class="bttn-small btn-fill"><i class="fa fa-thumbs-up"></i>16k</a>
                                    <a href="" class="bttn-small btn-fill"><i class="fa fa-thumbs-down"></i>9k</a>
                                    <a href="" class="bttn-small btn-fill"><i class="fa fa-download"></i>Download Now</a>
                                </div>
                                <div class="content mb-30">
                                    <div class="section-title">
                                        <h2>Description</h2>
                                    </div>
                                    <p>{{ $singleVideo->video_description }}</p>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-12">
                                        <div class="all-comments">
                                            <div class="blog-area cl-white">
                                                <div class="post-share-and-tag row">
                                                    <div class="col-xl-7 col-lg-7 col-md-6">
                                                        <div class="tags">
                                                            <span>Tags</span>
                                                            @if(!empty($singleVideo->add_tags))
                                                                @foreach($singleVideo->add_tags as $tags)
                                                                    <a href="">{{$tags}}</a>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-5 col-md-6">
                                                        <div class="social">
                                                            <span><i class="fa fa-share-alt"></i></span>
                                                            <a href="" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                                                            <a href="" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                                                            <a href="" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                                                            <a href="" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Main Content Area-->

<!--Section-->
<section class="section-padding-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title cl-white">
                    <h2>Related Videos</h2>
                </div>
            </div>
        </div>
        <div class="popular-item-2 owl-carousel">
            @if(!empty($relatedVideos))
                @foreach($relatedVideos as $related)
                    <a href="{{ route('video',['video_id'=>$related->video_id,'video_slug'=>$related->slug]) }}" class="single-item">
                        <img src="{{ $related->video_futured_image }}" alt="">
                        <h4>{{ $related->video_title }}</h4>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</section><!--Section-->
@endsection
@push('scripts')
    <script src="https://cdn.plyr.io/3.6.8/plyr.polyfilled.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        const player = new Plyr('#player');
        const video_type = "{{ $singleVideo->video_type }}";
        const video_url = video_type ===  '2' ? "{{ $singleVideo->video_embeded_code }}" : "{{ $singleVideo->upload_video }}";
        const video_platform = video_type ===  '2' ? "youtube" : "s3_bucket";

        // window.onload  = () => {
        //     const videoType = "{{ $singleVideo->video_type }}";
        //     if(videoType === '2'){
        //         loadVideo('youtube', "{{ $singleVideo->video_embeded_code }}");
        //     }else{
        //         loadVideo('s3_bucket', "{{ $singleVideo->upload_video }}");
        //     }
            // const videoElement = document.getElementById('player'); // Replace 'player' with your video element's ID

            // videoElement.addEventListener('loadedmetadata', async () => {
            //     try {
            //         await videoElement.requestPictureInPicture();
            //     } catch (error) {
            //         console.error('Error requesting Picture-in-Picture:', error);
            //     }
            // });
        // }
        $(".play_video").click(function(e){
            const videoElement = document.getElementById('player');
            videoElement.addEventListener('loadedmetadata', async () => {
                try {
                    await videoElement.requestPictureInPicture();
                } catch (error) {
                    console.error('Error requesting Picture-in-Picture:', error);
                }
            });
            e.preventDefault();
            if (video_platform === 'youtube') {
                player.source = {
                    type: 'video',
                    sources: [
                        {
                            src: video_url,
                            provider: 'youtube',
                        },
                    ],
                };
            }else if (video_platform === 's3_bucket') {
                player.source = {
                    type: 'video',
                    sources: [
                        {
                            src: video_url,
                            type: 'video/mp4',
                        },
                    ],
                };
            }
        })
        // function loadVideo(videoType, videoUrl) {
        //     if (videoType === 'youtube') {
        //         player.source = {
        //             type: 'video',
        //             sources: [
        //                 {
        //                     src: videoUrl,
        //                     provider: 'youtube',
        //                 },
        //             ],
        //         };
        //     }else if (videoType === 's3_bucket') {
        //         player.source = {
        //             type: 'video',
        //             sources: [
        //                 {
        //                     src: videoUrl,
        //                     type: 'video/mp4',
        //                 },
        //             ],
        //         };
        //     }
        // }
    </script>
@endpush
