@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h2>Home</h2>
@stop

@section('content')
    <div class="card">

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            @canany(['create-role', 'edit-role', 'delete-role'])
                <a class="btn btn-primary" href="{{ route('roles.index') }}">
                    <i class="fas fa-cogs"></i> Manage Roles
                </a>
            @endcanany

            @canany(['create-user', 'edit-user', 'delete-user'])
                <a class="btn btn-success" href="{{ route('users.index') }}">
                    <i class="fas fa-users"></i> Manage Users
                </a>
            @endcanany

            @canany(['create-product', 'edit-product', 'delete-product'])
                <a class="btn btn-warning" href="{{ route('products.index') }}">
                    <i class="fas fa-shopping-bag"></i> Manage Products
                </a>
            @endcanany

            @canany(['create-category', 'edit-category', 'delete-category'])
                <a class="btn btn-info" href="{{ route('categories.index') }}">
                    <i class="fas fa-briefcase"></i> Manage Categories
                </a>
            @endcanany

            @canany(['create-provider', 'edit-provider', 'delete-provider'])
                <a class="btn btn-dark" href="{{ route('providers.index') }}">
                    <i class="fas fa-truck"></i> Manage Providers
                </a>
            @endcanany
        </div>
    </div>
@stop



@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
