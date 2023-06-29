<script>

    var date_picker_locale = {
        format: 'YYYY-MM-DD',
        daysOfWeek: [
            "{{__('Sun')}}",
            "{{__('Mon')}}",
            "{{__('Tue')}}",
            "{{__('Wed')}}",
            "{{__('Thu')}}",
            "{{__('Fri')}}",
            "{{__('Sat')}}"
        ],
        monthNames: [
            "{{__('January')}}",
            "{{__('February')}}",
            "{{__('March')}}",
            "{{__('April')}}",
            "{{__('May')}}",
            "{{__('June')}}",
            "{{__('July')}}",
            "{{__('August')}}",
            "{{__('September')}}",
            "{{__('October')}}",
            "{{__('November')}}",
            "{{__('December')}}"
        ],
    };

</script>
<!-- General JS Scripts -->
<script src="{{asset('assets/modules/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/modules/jquery.nicescroll/dist/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('assets/modules/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/modules/moment/min/moment-with-locales.min.js')}}"></script>
<script src="{{asset('assets/modules/axios/dist/axios.min.js')}}"></script>
<script src="{{asset('assets/modules/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{asset('assets/modules/Parsley.js/dist/parsley.min.js')}}"></script>
<script src="{{asset('assets/js/stisla.js')}}"></script>

<!-- JS Libraies -->
<script src="{{asset('assets/modules/izitoast/dist/js/iziToast.min.js')}}"></script>
<script src="{{asset('assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('assets/modules/jquery.blockUI/js/jquery.blockUI.js')}}"></script>

<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

@stack('scripts')
@yield('role_template_scripts')

<?php
//@toastr_js
//@toastr_render
?>
