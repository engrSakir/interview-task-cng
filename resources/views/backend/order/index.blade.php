@extends('layouts.backend.app')
@push('title') Product Orders @endpush
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Product Orders</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Product Orders</li>
                </ol>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Orders Table</h4>
                        <div class="table-responsive">
                            <table class="table color-bordered-table success-bordered-table">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name, Phone, Email</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($productOrders as $productOrder)
                                <tr @if($productOrder->completed) class="table-success" @endif>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> <b>{{ $productOrder->name }}</b> <br> {{ $productOrder->phone }} <br> {{ $productOrder->email }}</td>
                                    <td>{{ $productOrder->address }}</td>
                                    <td>
                                        <a href="{{ route('admin.productOrder.show', $productOrder) }}" class="btn btn-outline-success waves-effect waves-light" type="button"><span class="btn-label"><i class="fa fa-eye"></i></span>&nbsp; {{ $productOrder->items->count() }}</a>
                                        &nbsp;
                                        <button class="btn btn-outline-primary waves-effect waves-light" type="button" onclick="delete_function(this)" value="{{ route('admin.productOrder.destroy', $productOrder) }}"><span class="btn-label"><i class="ti-trash"></i></span>&nbsp; Delete</button>
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
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')

@endpush
