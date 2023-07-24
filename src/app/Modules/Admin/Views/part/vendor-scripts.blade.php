<!-- JAVASCRIPT -->
<script src="{{ asset('assets/admin/libs/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/node-waves/waves.min.js') }}"></script>

<!-- Plugin Js-->
<script src="{{ asset('assets/admin/libs/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/raphael/raphael.min.js') }}"></script>
<!-- Peity chart-->
<script src="{{ asset('assets/admin/libs/peity/jquery.peity.min.js') }}"></script>

<!-- Plugins js-->
<script src="{{ asset('assets/admin/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}">
</script>
<script
    src="{{ asset('assets/admin/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}">
</script>

<!-- Required datatable js -->
<script src="{{ asset('assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<script src="{{ asset('assets/admin/libs/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/metrojs/release/MetroJs.Full/MetroJs.min.js') }}"></script>
<script src="{{ asset('assets/admin/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/pages/form-repeater.init.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<script>
    //Script tạo popup hiện lên khi bấm nút xóa
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.nutXoaDayNe').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                    title: "Confirm!",
                    text: "Car that has been deleted cannot be retrieved!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Oh good luck, not deleted yet!!!");
                    }
                });
        })
    })
</script>
@stack('scripts')
