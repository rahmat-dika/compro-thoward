<!DOCTYPE html>
<html lang="en" data-topbar-color="dark" class="dark">

    <head>
        <meta charset="utf-8" />
        <title>Company Profile Sternics</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/Sternics-sm.png') }}">

		<!-- Theme Config Js -->
		<script src="{{ asset('assets/js/head.js') }}"></script>

		<!-- Bootstrap css -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

		<!-- App css -->
		<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

		<!-- Icons css -->
		<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        {{-- Datatables --}}
        <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
            rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet"
            type="text/css" />

        {{-- Dropify --}}
        <link href="{{ asset('assets/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/dropify/css/dropify.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            {{-- @include('sweetalert::alert') --}}

            @include('layout.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                @include('layout.topbar')

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        @yield('content')
                        <!-- end page title -->

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('layout.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>

        <!-- custom dmeo js-->
        <script src="{{ asset('assets/js/pages/fontawesome.init.js') }}"></script>

        {{-- datatables --}}
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

        <script src="{{ asset('assets/libs/dropzone/min/dropzone.min.js') }}"></script>
        <script src="{{ asset('assets/libs/dropify/js/dropify.min.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('assets/js/pages/form-fileuploads.init.js')}}"></script>
        <script>
            /* Fungsi */
            function inputFormat(input) {
                input.value = formatRupiah(input.value, 'Rp. ');
            }

            function formatRupiah(angka, prefix)
            {
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                    split    = number_string.split(','),
                    sisa     = split[0].length % 3,
                    rupiah     = split[0].substr(0, sisa),
                    ribuan     = split[0].substr(sisa).match(/\d{3}/gi);

                if (ribuan) {
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }

                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
            }
        </script>
    </body>
</html>
