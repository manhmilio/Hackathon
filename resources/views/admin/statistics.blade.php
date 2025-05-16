@extends('admin.layouts.master')

@section('title', 'Thống Kê Người Dùng')

@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Contacts
        @endslot
        @slot('title')
            Statistics
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <h4>Thống Kê Người Dùng Ngừng Hoạt Động</h4>
                    <div class="alert alert-info">
                        Số lượng người dùng ngừng hoạt động: {{ $inactive_count }}
                    </div>
                    <a href="{{ route('contacts-list') }}" class="btn btn-primary">Quay Lại</a>
                </div>
            </div>
        </div>
    </div>
@endsection