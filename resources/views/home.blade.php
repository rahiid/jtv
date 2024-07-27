@extends('layouts.app')

@section('content')


<!-- TV section starts  -->

 <section class="tv">
    <video
    id="my-video"
    class="video-js vjs-default-skin vjs-fluid"
    controls
    preload="auto"
    data-setup='{}'
    >

    <source src="http://tempe.jagobd.com:1933/iptvsss/jagoronitv.stream/playlist.m3u8" type="application/x-mpegURL" />

  </video>

 </section>

 <!-- TV section ends  -->
 <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        var video = document.getElementById('my-video');
        video.play().catch(function(error) {
            console.log('Autoplay was prevented:', error);
        });
    });
</script>


@endsection

