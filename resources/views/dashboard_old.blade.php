@extends('layouts.layout1')
@section('page_title','Dashboard')
@section('dashboard_select','active')
@section('container')
<div class="row">

@role('super.admin')
<h1>
    Welcome To Group Admin Dashboard 
</h1>
@endrole
@role('admin')
<h1>
    Welcome To Admin Dashboard
</h1>
@endrole

@role('reviewer')
<h1>
    Welcome To Reviewer Dashboard
</h1>
@endrole

</div>
                       
@endsection