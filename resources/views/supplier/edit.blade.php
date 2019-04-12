@extends('layouts.admin.app') 

@section('title') 
Admin Dashboard
@endsection

@section('css')
	<link href="{{asset('/vendor/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
	<!-- Sidemenu Css -->
	<link href="{{asset('/vendor/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">
@endsection

@section('js')   
	<!-- Fullside-menu Js-->
	<script src="{{asset('/vendor/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>
	<!-- Custom scroll bar Js-->
	<script src="{{asset('/vendor/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	<!-- Adon JS -->
	<script src="{{asset('/vendor/js/custom.js')}}"></script>
@endsection

@section('body_class', 'app sidebar-mini rtl')
@section('content')
{{-- <div id="global-loader" ></div> --}}
<div class="page">
    <div class="page-main">
        <!-- Sidebar menu-->
        @include('layouts.admin.sidebar')
        <!-- Sidebar menu-->

        <!-- app-content-->
        <div class="app-content ">
            <div class="side-app">
                <div class="main-content">
                    <!-- Top navbar -->
                    @include('layouts.admin.header')
                    <!-- Top navbar-->

                    <!-- Page content -->
                    <div class="container-fluid container-pandu">
                        <form action={{ route('supplier.update', $supplier->id) }} method="POST">
                            {{ csrf_field() }}
                            <div class="page-header mt-0 pandu">
                                <h3 class="mb-sm-0">Supplier</h3>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#"><i class="fe fe-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Supplier</li>
                                </ol>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <h2 class="mb-0">Form Edit Supplier</h2>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Supplier</label>
                                                        <input id="name" name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ $supplier->name }}" required autofocus>
                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <input id="address" name="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" placeholder="Fill your supplier address  or distributor." value="{{ $supplier->address }}" required >
                                                        @if ($errors->has('address'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('address') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Telp</label>
                                                        <input id="telp" name="telp" type="text" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }}" placeholder="Fill your supplier phone number or distributor." value="{{ $supplier->telp }}" required>
                                                        @if ($errors->has('telp'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('telp') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-icon btn-secondary">
                                                <span class="btn-inner--icon"><i class="fe fe-check-square"></i></span>
												<span class="btn-inner--text">Submit</span>
                                            </button>
                                            <a href="{{ route('supplier.index') }}" class="btn btn-icon btn-danger">
                                                <span class="btn-inner--icon"><i class="fe fe-x-square"></i></span>
												<span class="btn-inner--text">Cancel</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
 
                        <!-- Footer -->
                        @include('layouts.admin.footer')
                        <!-- Footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection