@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
   @include('components.alerts.alerts')
    <h1>User Records</h1>
@stop


@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
                <a href="{{route('system.management.users.create-user')}}">
                    <button type="button" class="btn btn-tool" title="Add new user">
                        <i class="fa fa-user-plus fa-fw"></i>
                    </button>
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="card-body table-responsive p-0">
                @include('backend.system.management.users.components.table')
            </div>
        </div>

        <div class="card-footer">
            <div class="justify-content-end">
                <span class="float-right">
                        {{$users->links()}}
                </span>
            </div>
        </div>

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('getting users!'); </script>
@stop
