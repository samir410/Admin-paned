@extends('admin.admin_dashboard')
@section('title')
Completed ticket
@endsection
@section('content')
<div class="page-content">

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Completed Tickets</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Completed Tickets</li>
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
                                <th>Subject</th>
                                <th>Submitted By </th>
                                <th>Status</th>
                                <th>Priority</th>
                                <th>Date</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
        <tbody>
		<tr>
                    <td>Worng meeting</td>				
                    <td>Samir </td>
					<td>Pending</td>
                    <td>High</td>
                    <td>24 june</td>
                    

                    <td>
                        <a href="#" class="btn btn-primary " title="Details Page"> Details <i class="fa fa-eye"></i> </a>
                    </td> 
                </tr>



        </tbody>
                </table>
            </div>
        </div>
@endsection