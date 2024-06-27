@extends('admin.admin_dashboard')
@section('title')
pending mentor
@endsection
@section('content')
<div class="page-content">

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Mentee</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Mentors</li>
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
                                <th>User</th>
                                <th>Email-Phone </th>
                                <th>Country</th>
                                <th>Degination</th>
                                <th>Action</th> 
                            </tr>
                        </thead>
        <tbody>
		<tr>
                    <td>ABC</td>				
                    <td>example@gmail.com 012399394933</td>
					<td>AUS</td>
                    <td>Teacher</td>
                    

                    <td>
                        <a href="#" class="btn btn-primary " title="Details Page"> Details <i class="fa fa-eye"></i> </a>
                    </td> 
                </tr>



        </tbody>
                </table>
            </div>
        </div>
@endsection