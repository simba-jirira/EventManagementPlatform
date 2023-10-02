@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    @include('components.alerts.alerts')
    <h1>New Record</h1>
@stop


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-user-plus fa-faw"></i>
                            <small>User form</small>
                        </h3>
                    </div>
                    @include('backend.system.management.users.components.form')
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('create new user!'); </script>
@stop
