@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
<!-- Text slider section starts  -->
<div class="ribbon-section">
    <div class="text-slide scroll-right">
        <span>Breaking News</span>
        <marquee behavior="" direction="left" class="text-slider">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla eum quia error placeat recusandae hic, nostrum doloremque nihil ducimus repellendus ea eius architecto doloribus sed.
        </marquee>
    </div>
</div>
<!-- Text slider section ends -->

<!-- News section starts  -->
<section class="menu" id="menu">
    <h1 class="heading">LATEST <span>NEWS</span></h1>
    <div class="news-container">
        <div class="news">
            <img src="{{ asset('images/no_image.jpg') }}" alt="">
            <h3>NEWS HEADLINE</h3>
            <div class="price" style="overflow: hidden; white-space: nowrap;">
                You may put any HTML here. This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the look and feel of finished, typeset text. Only for show. He who searches for meaning here will be sorely disappointed.
            </div>
            <ul style="list-style-type: none;" id="inline-popups">
                <li><a href="#test-popup" data-effect="mfp-zoom-in">See More</a></li>
                <!-- Hidden popup content -->
                <div id="test-popup" class="white-popup mfp-hide">
                    <h2>Popup content</h2>
                    <p>Here is some content for the popup.</p>
                </div>

            </ul>
        </div>
        <div class="news">
            <img src="{{ asset('images/no_image.jpg') }}" alt="">
            <h3>NEWS HEADLINE</h3>
            <div class="price"></div>
        </div>
        <div class="news">
            <img src="{{ asset('images/no_image.jpg') }}" alt="">
            <h3>NEWS HEADLINE</h3>
            <div class="price"></div>
        </div>
    </div>
</section>
<!-- News section ends -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
    $(document).ready(function() {
        $('#inline-popups').magnificPopup({
            delegate: 'a',
            removalDelay: 500, // delay removal by X to allow out-animation
            callbacks: {
                beforeOpen: function() {
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
            midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
        });
    });
</script>
@endsection