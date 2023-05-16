@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                    Dashboard
                </a>
                <a href="/users" class="list-group-item list-group-item-action">Quản lý user</a>
                <a href="/users/create" class="list-group-item list-group-item-action">Thêm mới user</a>
                <a href="/products" class="list-group-item list-group-item-action">Quản lý sản phẩm</a>
                <a href="/products/create" class="list-group-item list-group-item-action">Thêm mới sản phẩm</a>
                @can('role-list')
                <a href="/roles" class="list-group-item list-group-item-action">Phân quyền</a>
                @endcan
                @can('role-create')
                <a href="/roles/create" class="list-group-item list-group-item-action">Thêm mới quyền</a>
                @endcan
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection