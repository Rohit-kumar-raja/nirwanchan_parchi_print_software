<x-layout>
    @slot('title', 'Dashboard')
    @slot('body')
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-transparent card-block card-stretch card-height border-none">
                            <div class="card-body p-0 mt-lg-2 mt-0">
                                <h3 class="mb-3">Hi {{ Auth::user()->name }}</h3>
                                <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.
                                </p>
                            </div>
                        </div>
                    </div>
                    @if (check_permission('dashboard') || (Auth::user()->type = 'superadmin'))
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-success-light">
                                                    <i class="fas fa-clinic-medical"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-2">Clinic</p>
                                                    <h4>{{ $Clinic }} + </h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-success iq-progress progress-1" data-percent="75">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-info-light">
                                                    <i class="fas fa-user-md"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-2">Doctor</p>
                                                    <h4>{{ $Doctor }}+</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-info iq-progress progress-1" data-percent="85">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-danger-light">
                                                    <i class="fas fa-users"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-2">AppUser</p>
                                                    <h4>{{ $AppUser }}+</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-danger iq-progress progress-1" data-percent="70">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-warning-light">
                                                    <i class="fas fa-city"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-2">City</p>
                                                    <h4>{{ $City }} +</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-warning iq-progress progress-1" data-percent="75">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-info-light">
                                                    <i class="fas fa-gifts"></i>                                                </div>
                                                <div>
                                                    <p class="mb-2">Specialization</p>
                                                    <h4>{{ $Specialization }} +</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-info iq-progress progress-1" data-percent="75">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-secondary-light">
                                                    <i class="fas fa-graduation-cap"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-2">Degree</p>
                                                    <h4>{{ $Degree }} +</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-secondary iq-progress progress-1" data-percent="75">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="card card-block card-stretch card-height">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                                <div class="icon iq-icon-box-2 bg-warning-light">
                                                    <i class="fas fa-comments"></i>                                                </div>
                                                <div>
                                                    <p class="mb-2">Feedback</p>
                                                    <h4>{{ $Feedback }} +</h4>
                                                </div>
                                            </div>
                                            <div class="iq-progress-bar mt-2">
                                                <span class="bg-warning iq-progress progress-1" data-percent="75">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Overview</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton001"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton001">
                                                <a class="dropdown-item" href="#">Year</a>
                                                <a class="dropdown-item" href="#">Month</a>
                                                <a class="dropdown-item" href="#">Week</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="layout1-chart1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Revenue Vs Cost</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton002">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="layout1-chart-2" style="min-height: 360px;"></div>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="card card-block card-stretch card-height">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Order Summary</h4>
                                    </div>
                                    <div class="card-header-toolbar d-flex align-items-center">
                                        <div class="dropdown">
                                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005"
                                                data-toggle="dropdown">
                                                This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                            </span>
                                            <div class="dropdown-menu dropdown-menu-right shadow-none"
                                                aria-labelledby="dropdownMenuButton005">
                                                <a class="dropdown-item" href="#">Year</a>
                                                <a class="dropdown-item" href="#">Month</a>
                                                <a class="dropdown-item" href="#">Week</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center mt-2">
                                        <div class="d-flex align-items-center progress-order-left">
                                            <div class="progress progress-round m-0 orange conversation-bar"
                                                data-percent="46">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value text-secondary">46%</div>
                                            </div>
                                            <div class="progress-value ml-3 pr-5 border-right">
                                                <h5>$12,6598</h5>
                                                <p class="mb-0">Average Orders</p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center ml-5 progress-order-right">
                                            <div class="progress progress-round m-0 primary conversation-bar"
                                                data-percent="46">
                                                <span class="progress-left">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <span class="progress-right">
                                                    <span class="progress-bar"></span>
                                                </span>
                                                <div class="progress-value text-primary">46%</div>
                                            </div>
                                            <div class="progress-value ml-3">
                                                <h5>$59,8478</h5>
                                                <p class="mb-0">Top Orders</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="layout1-chart-5"></div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                {{-- Page end   --}}
            </div>
        </div>
    @endslot
</x-layout>
