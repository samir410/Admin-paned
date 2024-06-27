@extends('admin.admin_dashboard')
@section('title')
subscriber
@endsection
@section('content')
<div class="page-content">

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Subscriber Manager</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Subscriber Manager</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <!-- <div class="btn-group">
<a href="" class="btn btn-primary">Add Product</a> 				 
            </div> -->
        </div>
    </div>
    <!--end breadcrumb-->

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th>Subscribe At</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
        <tbody>
		<tr>
                    <td>1@gs.com</td>				
                    <td>12.43.3 </td>
                    

                    <td>
                        <a href="#" class="btn btn-danger " title="Details Page"> Details <i class="fa fa-delete"></i> </a>
                    </td> 
                </tr>



        </tbody>
                </table>
            </div>
        </div>
@endsection