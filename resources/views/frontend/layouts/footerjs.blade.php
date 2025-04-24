<script src="{{asset('fronted/assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/modernizr.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/counter-up.js')}}"></script>
<script src="{{asset('fronted/assets/js/wow.min.js')}}"></script>
<script src="{{asset('fronted/assets/js/main.js')}}"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var toastEl = document.querySelector('.toast');
        if (toastEl) {
            var toast = new bootstrap.Toast(toastEl);
            toast.show();
        }
    });
</script>
@stack('scripts')