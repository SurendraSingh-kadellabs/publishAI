@extends('layouts.master')

@section('title')
{{__('Dashboard')}}
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('assets/modules/select2/dist/css/select2.min.css')}}" />

@endpush

@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{__('Dashbaord')}}</h1>
        <div class="section-header-button">
           
        </div>
    
    </div>

    <div class="section-body">
        <div class="row">
            
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="{{asset('assets/modules/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
        $('#number').on('keypress', function(event) {
        var nameregex = new RegExp("^[0-9\\s]+$");
        var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
        if (!nameregex.test(key)) {
            event.preventDefault();
            $("#number-validate-message").text("Only Numbers are Allowed");
            return false;
        } else {
            $("#number-validate-message").text("");
        }
    });
</script>
<?php //@include('contacts.scripts.contact-create') ?>
@endpush