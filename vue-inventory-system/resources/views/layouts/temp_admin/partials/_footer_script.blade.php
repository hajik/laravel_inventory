{{-- vue --}}
<script src="{{ asset('js/app.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('temp_admin/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('temp_admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('temp_admin/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('temp_admin/vendors/nprogress/nprogress.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('temp_admin/vendors/iCheck/icheck.min.js') }}"></script>

<!-- Custom Theme Scripts -->
<script src="{{ asset('temp_admin/build/js/custom.min.js') }}"></script>

<script>

    $('div.alert.alert-success').not('.alert-important').delay(3000).fadeOut(350);

</script>

@stack('js')