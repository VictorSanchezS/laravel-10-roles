@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
@stop

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('') }}

    <p> </p>
    @canany(['create-role', 'edit-role', 'delete-role'])
        <a class="btn btn-primary" href="{{ route('roles.index') }}">
            <i class="bi bi-person-fill-gear"></i> Manage Roles</a>
    @endcanany
    @canany(['create-user', 'edit-user', 'delete-user'])
        <a class="btn btn-success" href="{{ route('users.index') }}">
            <i class="bi bi-people"></i> Manage Users</a>
    @endcanany
    @canany(['create-product', 'edit-product', 'delete-product'])
        <a class="btn btn-warning" href="{{ route('products.index') }}">
            <i class="bi bi-bag"></i> Manage Products</a>
    @endcanany
    @canany(['create-category', 'edit-category', 'delete-category'])
        <a class="btn btn-info" href="{{ route('categories.index') }}">
            <i class="bi bi-bag"></i> Manage Categories</a>
    @endcanany
    @canany(['create-provider', 'edit-provider', 'delete-provider'])
        <a class="btn btn-dark" href="{{ route('providers.index') }}">
            <i class="bi bi-bag"></i> Manage Providers</a>
    @endcanany
    <p>&nbsp;</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
