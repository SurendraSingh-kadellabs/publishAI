@extends('layouts.master')

@section('title')
{{__('Manage User')}}
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
                    <h4 style="font-size:26px;">{{__('Manage Users')}}</h4>
                    <div class="card-header-action">
                        
                        <a href="{{route('manage_user.create')}}" class="btn btn-primary" style="font-size:16px;padding:7px 10px;border-radius:4px !important;">
                            <i class="fa-solid fa-circle-plus"></i>
                            {{__('Create User')}}
                        </a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="contactsDataTable" class="table table-striped dataTable width-100">
                        <thead>
                        <tr>
                        <!-- <th>ID</th> -->
                        <th> {{__('Name')}}</th>
                        <th>{{__('Email')}}</th>
                        <th>{{__('Role')}}</th>
                        <th>{{__('Action')}}</th>
                    </tr>
                            
                        </thead>
                        <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->getRoles()[0]->name??'old'}}</td>
                        <td>
                            <a href="{{route('manage_user.edit',$user->id)}}" class="btn btn-primary ">Edit</a>
                            <a href="{{route('manage_user.destroy',$user->id)}}" class="btn btn-danger ">Delete</a>
                        </td>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
                    </table>
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
<script type="text/javascript">
   $(document).ready(function() {
        $('#contactsDataTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('manage_user.index') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'users', name: 'users.name'},
            ]
        });
    });
</script>

@include('manageuser.scripts.index') 

@endpush