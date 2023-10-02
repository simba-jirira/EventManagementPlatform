@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>View all users in the system</h1>
@stop

@section('content')
    <p>a view to see all users in the system.</p>
    @forelse($users as $user)
        {{$user->name}}
    @empty
        <p>a view to see all users in the system.</p>
    @endforelse
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('getting users!'); </script>
@stop
