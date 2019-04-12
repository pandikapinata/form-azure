@extends('layouts.admin.app') 

@section('title') 
Admin Dashboard | Suppliers
@endsection

@section('css')
    <!-- Data table css -->
	<link href="{{asset('/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('/plugins/customscroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
	<!-- Sidemenu Css -->
	<link href="{{asset('/plugins/toggle-sidebar/css/sidemenu.css')}}" rel="stylesheet">
    <!-- sweetalert css-->
	<link href="{{asset('/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
@endsection

@section('js')
    <!-- Data tables -->
	<script src="{{asset('/plugins/datatable/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('/plugins/datatable/dataTables.responsive.min.js')}}"></script>
	<script src="{{asset('/plugins/datatable/responsive.bootstrap4.min.js')}}"></script>

	<!-- Fullside-menu Js-->
	<script src="{{asset('/plugins/toggle-sidebar/js/sidemenu.js')}}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{asset('/plugins/customscroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- Sweet alert Plugin -->
	<script src="{{asset('/plugins/sweet-alert/sweetalert.min.js')}}"></script>
    <script src="{{asset('/js/sweet-alert.js')}}"></script>
    
	<!-- Adon JS -->
	<script src="{{asset('/js/custom.js')}}"></script>
    <script src="{{asset('/js/datatable.js')}}"></script>
    
    <script>
	    $(document).ready(function(){
            @if (\Session::has('success'))  
                swal('Notifikasi', "{{ \Session::get('success') }}", 'success');
            @endif
            $(".btnDeleteAlert").click(function(event){
                button = $(this);
                index = $(".btnDeleteAlert").index(button);
                swal({
                    title: button.data("title"),
                    text: button.data("text"),
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes",
                    closeOnConfirm: false
                }, function() {
                    $(".frmDeleteAlert").eq(index).submit();
                });
            });
	    });
    </script>
@endsection

@section('body_class', 'app sidebar-mini rtl')
@section('content')
<div id="global-loader" ></div>
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
                        <div class="page-header mt-0 pandu">
                            <h3 class="mb-sm-0">Data Supplier</h3>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#"><i class="fe fe-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Supplier</li>
                            </ol>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h2 class="mb-0 table-name">Data Supplier</h2>
                                        <a href="{{ route("supplier.create") }}" class="btn btn-icon btn-primary mt-1 mb-1 float-right">
                                            <span class="btn-inner--icon"><i class="fe fe-plus"></i></span>
                                            <span class="btn-inner--text">Tambah</span>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered w-100 text-nowrap">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-5p">No</th>
                                                        <th class="wd-15p">Nama Supplier</th>
                                                        <th class="wd-15p">Alamat</th>
                                                        <th class="wd-15p">Telp</th>
                                                        <th class="wd-10p">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($suppliers as $key => $supp) 
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{!! $supp->name !!}</td>
                                                        <td>{!! $supp->address !!}</td>
                                                        <td>{!! $supp->telp !!}</td>
                                                        <td>
                                                            <a class="btn btn-icon btn-sm btn-primary mt-1 mb-1" href={{ route("supplier.edit", $supp->id) }}>
                                                                <span class="btn-inner--icon"><i class="fe fe-edit-3"></i></span>
                                                                <span class="btn-inner--text">Edit</span>
                                                            </a>

                                                            <form class="frmDeleteAlert btn-delete" action={{ route("supplier.delete", $supp->id) }} method="post">
                                                                {{ csrf_field() }}
                                                                <button class="btnDeleteAlert btn btn-icon btn-sm btn-danger mt-1 mb-1" type="button" data-title="Hapus Supplier" data-text="Anda yakin menghapus data Supplier ini?">
                                                                    <span class="btn-inner--icon"><i class="fe fe-trash"></i></span>
                                                                    <span class="btn-inner--text">Hapus</span>
                                                                </button>
                                                            </form>

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