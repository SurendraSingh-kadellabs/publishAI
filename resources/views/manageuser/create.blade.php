@extends('layouts.master')

@section('title')
{{__('Create User')}}
@endsection

@push('styles')
<link rel="stylesheet" href="{{asset('assets/modules/select2/dist/css/select2.min.css')}}" />

@endpush

@section('content')

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('message')}}!</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!--  -->
<div class="section-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="font-size:26px;">{{__('Create Users')}}</h4>
                    <div class="card-header-action">

                        <a href="{{route('manage_user.index')}}" class="btn btn-primary" style="font-size:16px;padding:7px 10px;border-radius:4px !important;">
                            <i class="fa-solid fa-circle-plus"></i>
                            {{__('Back')}}
                        </a>
                    </div>
                </div>
                <div class="card-body">
                <form action="{{route('manage_user.store')}}" method="post">
            @csrf
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">User Role</label>
                <div class="col-sm-10">

                    <select class="form-control" name="role" aria-label="Default select example">
                        <option selected>Select User Role</option>
                        <option value="1">Admin</option>
                        <option value="5">Reviewer</option>

                    </select>


                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="staticEmail" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="staticEmail" value="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                    <input type="password" name="confirm_password" class="form-control" id="inputPassword">
                </div>
            </div>

            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">Create New User
                </button>
            </div>
        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->




@endsection
@push('scripts')
<script src="{{asset('assets/modules/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

<?php //@include('contacts.scripts.contact-create') 
?>
@endpush


