@extends('layouts.backend.app')
@push('title') Show Product Orders @endpush
@push('style')
    <!-- page css -->
    <link href="{{ asset('assets/backend/dist/css/pages/timeline-vertical-horizontal.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/backend/dist/css/pages/ribbon-page.css') }}" rel="stylesheet">
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
                <a href="{{ route('admin.productOrder.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-folder-open"></i>  &nbsp; Back to List </a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Start Contentbar -->
    <div class="contentbar">
        <!-- Start row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card border-danger text-center">
                    <div class="card-header bg-danger">
                        <h4 class="m-b-0 text-white">Order Details | Total items: {{ $productOrder->items->count() }}</h4></div>
                    <div class="card-body">
                        <h3 class="card-title">{{ $productOrder->name }}</h3>
                        <h4><span class="badge badge-success">{{ $productOrder->email  }}</span> &nbsp; <span class="badge badge-success">{{ $productOrder->phone  }}</span></h4>
                        <h4> <span class="badge badge-success">{{ $productOrder->address  }}</span></h4>
                        @if(!$productOrder->completed)
                            <a href="javascript:void(0)" class="btn btn-primary cng-order-status-btn">Make as order completed</a>
                        @else
                            <a href="javascript:void(0)" class="btn btn-success cng-order-status-btn">Make as order incomplete</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="timeline">
                            @foreach($productOrder->items as $item)
                            <li class="@if($loop->even) timeline-inverted @endif">
                                <div class="timeline-badge @if($loop->even) success @else info @endif"><img class="img-responsive" alt="user" src="{{ $item->product->image ?? 'assets/frontend/image/resources/medicine2.png' }}"> </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading ribbon-vwrapper">
                                        <div class="ribbon ribbon-bookmark ribbon-vertical-l @if($loop->even) ribbon-success @else ribbon-info @endif">
                                            <b>{{ $loop->iteration }}</b>
                                        </div>
                                        <h4 class="timeline-title">{{ $item->product->name ?? 'Not Found' }}</h4>
                                        <p><small class="text-muted"><i class="fa fa-clock-o"></i> {{ $item->product->company ?? 'Not Found' }}</small> </p>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End Contentbar -->
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            //Remove to card
            $('.cng-order-status-btn').click(function(){
                var this_btn = $(this);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Order status will be changed!",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'PATCH',
                            url: '{{ route('admin.productOrder.update', $productOrder) }}',
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            processData: false,
                            contentType: false,
                            beforeSend: function (){
                                //this_btn.html('Please wait ---- ');
                                this_btn.prop("disabled",true);
                            },
                            complete: function (){
                                //this_btn.html('Edit now');
                                this_btn.prop("disabled",false);
                            },
                            success: function (data) {
                                if (data.type == 'success'){
                                    console.log(data.cart)
                                    Swal.fire({
                                        position: 'top-end',
                                        icon: data.type,
                                        title: data.message,
                                        showConfirmButton: false,
                                        timer: 1500
                                    }); setTimeout(function () {
                                        location.replace(data.url);
                                    }, 800);
                                }else{
                                    Swal.fire({
                                        icon: data.type,
                                        title: 'Oops...',
                                        text: data.message,
                                        footer: 'Something went wrong!'
                                    });
                                }
                            },
                            error: function (xhr) {
                                var errorMessage = '<div class="card bg-danger">\n' +
                                    '                        <div class="card-body text-center p-5">\n' +
                                    '                            <span class="text-white">';
                                $.each(xhr.responseJSON.errors, function(key,value) {
                                    errorMessage +=(''+value+'<br>');
                                });
                                errorMessage +='</span>\n' +
                                    '                        </div>\n' +
                                    '                    </div>';
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    footer: errorMessage
                                });
                            },
                        });
                    }
                })
            });
        });
    </script>
@endpush
