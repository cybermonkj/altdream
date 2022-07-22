@php
    $home_page_variant = $home_page ?? get_static_option('home_page_variant');
@endphp
<footer class="footer-area home-variant-{{$home_page_variant}}">
        <div class="footer-top bg-black bg-image padding-top-90 padding-bottom-65 @if($home_page_variant == '02') style-01 bg-image @endif"
             @if($home_page_variant == '02') style="background-image: url({{asset('assets/frontend/img/shape/footer-bg.png')}})" @endif
        >
            <div class="container">
                <div class="row">
                    {!! render_frontend_sidebar('footer',['column' => true]) !!}
                </div>
            </div>
        </div>
    <div class="copyright-area  @if($home_page_variant == '02') style-01 bg-image @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-item">
                        <div class="copyright-area-inner">
                            {!! purify_html_raw(get_footer_copyright_text()) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="back-to-top">
    <span class="back-top">
        <i class="fas fa-angle-up"></i>
    </span>
</div>
<!--@if(preg_match('/(xgenious)/',url('/')))-->
<!--    <div class="buy-now-wrap">-->
<!--        <ul class="buy-list">-->
<!--            <li><a target="_blank"href="https://xgenious.com/docs/fundorex/" data-container="body" data-toggle="popover" data-placement="left" data-content="{{__('Documentation')}}"><i class="far fa-file-alt"></i></a></li>-->
<!--            <li><a target="_blank"href="https://codecanyon.net/item/fundorex-crowdfunding-platform/33286096"><i class="fas fa-shopping-cart"></i></a></li>-->
<!--            <li><a target="_blank"href="https://xgenious51.freshdesk.com/"><i class="fas fa-headset"></i></a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--@endif-->

<!-- load all script -->
<script src="{{asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/dynamic-script.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.magnific-popup.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.waypoints.js')}}"></script>
<script src="{{asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/jQuery.rProgressbar.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/active.rProgressbar.js')}}"></script>
<script src="{{asset('assets/frontend/js/wow.min.js')}}"></script>
<script src="{{asset('assets/backend/js/sweetalert2.js')}}"></script>
<script src="{{asset('assets/frontend/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/common/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
<script src="{{asset('assets/backend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/main.js')}}"></script>
<script src="{{asset('assets/frontend/js/main2.js')}}"></script>

@include('frontend.partials.google-captcha')
@include('frontend.partials.gdpr-cookie')
@include('frontend.partials.inline-script')
@include('frontend.partials.twakto')

<script>
    $( document ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip({'placement': 'left','color':'green'});
    });
</script>

<x-sweet-alert-msg/>
@yield('scripts')


</body>
</html>
