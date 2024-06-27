@extends('admin.admin_dashboard')
@section('title')
Admin Dashboard
@endsection
@section('content')
<div class="page-content">

        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                <div class="col">
                <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">6200</h5>
                            <div class="ms-auto">
                                <i class='bx bx-group fs-3 text-white'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-dark">
                            <p class="mb-0">Total mentor</p>
                            <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                    
                </div>
                </div>
                <div class="col">
                <div class="card radius-10 bg-warning bg-gradient">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">6200</h5>
                            <div class="text-dark ms-auto font-30">     
                            {{-- <i class="bx bx-user-pin"></i> --}}
                            <i class='bx bx-group fs-3 text-black'></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center mb-0 text-dark">
                            <p class="mb-0">Total users</p>
                            <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                    
                </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-orange">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">$8323</h5>
                            <div class="ms-auto">
                                <i class='fadeIn animated bx bx-user-circle'  style="font-size: 1.8rem;"></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center md-0 text-dark">
                            <p class="mb-0">Admin User</p>
                            <p class="mb-0 ms-auto">+1.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ohhappiness">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">6200</h5>
                            <div class="ms-auto">
                                <i class='lni lni-network' style="font-size: 1.8rem;"></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Total mentee</p>
                            <p class="mb-0 ms-auto">+5.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col">
                    <div class="card radius-10 bg-gradient-ibiza">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h5 class="mb-0 text-white">5630</h5>
                            <div class="ms-auto">
                                <i class='lni lni-cross-circle text-black' style="font-size: 1.8rem;"></i>
                            </div>
                        </div>
                        <div class="progress my-3 bg-light-transparent" style="height:3px;">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center text-white">
                            <p class="mb-0">Pending Mentor</p>
                            <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                        </div>
                    </div>
                </div>
                </div>
                
         

                <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3"><i class="lni lni-video text-white"></i>
                                    </div>
                                    </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Pending Meeting</p>
                                    <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            
                            </div>
                            
                        </div>
                    
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3"><i class="lni lni-video text-white"></i>
                                    </div>
                                    </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Approved Meeting</p>
                                    <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                    
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3"><i class="lni lni-video text-white"></i>
                                    </div>
                                    </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Completed Meetings</p>
                                    <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                    
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-gradient-ibiza">
                            <div class="card-body">
                                    <div class="text-center">
                                        <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3">
                                            <i class="lni lni-video text-white"></i>
                                    </div>
                                    </div>
                                <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                    <div class="progress-bar bg-white" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex align-items-center text-white">
                                    <p class="mb-0">Rejected Meetings</p>
                                    <p class="mb-0 ms-auto">+2.2%<span><i class='bx bx-up-arrow-alt'></i></span></p>
                                </div>
                            
                            </div>
                            
                        </div>
                        
                    
                    </div>

                    <div class="col">
                            <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3">
                                                        <i class="lni lni-money-protection text-white"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white">CAD $80</h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-dollar fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Total Deposited</p>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-light">View All</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                   
                    <div class="col">
                            <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3">
                                                        <i class="fadeIn animated bx bx-loader-circle text-white"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white">CAD $80</h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-dollar fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Pending Deposited</p>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-light">View All</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col">
                            <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3">
                                                        <i class="lni lni-cross-circle text-white"></i>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white">CAD $80</h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-dollar fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Rejected Deposited</p>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-light">View All</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col">
                            <div class="card radius-10 bg-gradient-deepblue">
                                <div class="card-body">
                                    <div class="widgets-icons rounded-circle mx-auto bg-light-transparent text-primary mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-percent text-white"><line x1="19" y1="5" x2="5" y2="19"></line><circle cx="6.5" cy="6.5" r="2.5"></circle><circle cx="17.5" cy="17.5" r="2.5" ></circle></svg> 
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h5 class="mb-0 text-white">CAD $80</h5>
                                        <div class="ms-auto">
                                            <i class='bx bx-dollar fs-3 text-white'></i>
                                        </div>
                                    </div>
                                    <div class="progress my-3 bg-light-transparent" style="height:3px;">
                                        <div class="progress-bar bg-white" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center text-white">
                                        <p class="mb-0">Deposite Charge</p>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="btn btn-light">View All</a>
                                    </div>
                                </div>
                            </div>
                    </div>
                   
        
    
    
        
       



        
    
        
    
    </div><!--end row-->




</div>
@endsection