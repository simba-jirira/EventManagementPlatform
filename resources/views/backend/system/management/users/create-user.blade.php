@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    @include('components.alerts.alerts')
    <h1>Create New User</h1>
@stop


@section('content')
    <div class="card">


        <div class="card-body">
            <div class="card-body table-responsive p-0">
{{--                @include('backend.system.management.users.components.table')--}}
            </div>
        </div>

        <div class="card-footer">
            <div class="justify-content-end">
                <span class="float-right">

                </span>
            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('create new user!'); </script>
@stop
