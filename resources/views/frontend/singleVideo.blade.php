@extends("frontend.includes.layout")
@section('title','Video Page')
@section('content')
@push('styles')
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <style>
        .modal-backdrop.show {
            -webkit-filter: blur(4px);
            -moz-filter: blur(4px);
            -o-filter: blur(4px);
            -ms-filter: blur(4px);
            filter: blur(4px);
            z-index: 1040;
        }
        .modal-content {
            z-index: 1050;
            -webkit-filter: none;
            -moz-filter: none;
            -o-filter: none;
            -ms-filter: none;
            filter: none;
        }
        .single-item{
            max-height: 130px;
            min-height: 134px;
        }
    </style>
@endpush
<div class="modal fade" id="unlockModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-body render-restriction">  </div>
        </div>
    </div>
</div>
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
                    <a href="{{ route('video',['video_id'=>$related->video_id,'video_slug'=>$related->slug]) }}" class="single-item related-videos">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script>
        var video_id = "{{ request()->segment(2) }}";
        let isVideoPlaying = false;
        window.onload = ()=>{
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{ route('get.single.video') }}",
                data:{id:video_id},
                dataType: 'json',
                success: function(data){
                    $(".render-restriction").html(data.html);
                    $("#unlockModal").modal('show');
                    $('#unlockModal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                }
            });
        }
        function checkVideoPlaying() {
          return localStorage.getItem('isVideoPlaying');
        }
        isVideoPlaying = true;
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
        $("body").on('click','.unlock-now',function(e){
            const videoElement = document.getElementById('player');
            // videoElement.addEventListener('loadedmetadata', async () => {
            //     try {
            //         await videoElement.requestPictureInPicture();
            //     } catch (error) {
            //         console.error('Error requesting Picture-in-Picture:', error);
            //     }
            // });
            e.preventDefault();
            $("#unlockModal").modal('hide');
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
            localStorage.setItem('isVideoPlaying', true);
        })

        $(document).on('click', function(event) {
          if (!$(event.target).closest('.video-player-content').length && checkVideoPlaying() && !$(event.target).closest('#unlockModal').length && !$(event.target).closest('.swal2-container').length && !$(event.target).closest('.owl-stage').length) {
                showSweetAlert();
          }
        });
        $(document).on('click','.related-videos',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            showSweetAlert(url);
        })
        function showSweetAlert(url = ''){
            Swal.fire({
                title: "Are you sure to leave now?",
                text: "If you leave current session will be expired ",
                type: "warning",
                showCancelButton: true,
                allowOutsideClick: false,
                allowEscapeKey: false,  
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                closeOnConfirm: true,
                closeOnCancel: true
            }).then((result) => {
              if (result.isConfirmed) {
                localStorage.setItem('isVideoPlaying',false);
                if(url === ''){
                    window.location.href = "{{ route('home') }}";
                }else{
                    window.location.href = url;
                }
              } else if (result.isDenied) {
               alert('Action Cancelled');
              }
            });
        }
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
