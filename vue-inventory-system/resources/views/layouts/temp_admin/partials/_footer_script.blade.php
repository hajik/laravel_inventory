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

{{-- sweetalert --}}
<script src="{{ asset('temp_admin/vendors/sweetalert/sweetalert.min.js') }}"></script>

<script>

    $('div.alert.alert-success').not('.alert-important').delay(3000).fadeOut(350);

    $('.sa-delete').on('click', function() {
        
        let form_id = $(this).data('form-id');

        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this category!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // swal("Poof! Your category has been deleted!", {
                    // icon: "success",
                    // });
                    $('#'+form_id).submit();
                } else {
                    swal("Your category is safe!");
                }
            });
    });

</script>

@stack('js')