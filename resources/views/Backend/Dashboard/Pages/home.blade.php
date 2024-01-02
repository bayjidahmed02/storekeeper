@extends('Backend.Dashboard.Layouts.app')
@section('main_page_title', 'Home')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Sales Report</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <a href="javascript: void(0);">Sales</a>
                        </li>
                        <li class="breadcrumb-item active">Sales Report</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5 class="fw-medium text-muted mb-0">Today</h5>
                            <h2 class="mt-4 ff-secondary fw-semibold">
                                {{-- <span class="counter-value" data-target="05"></span>k --}}
                                <span class="counter-value" data-target=" {{ $today }}"></span>Tk

                            </h2>
                            {{-- <p class="mb-0 text-muted">
                                <span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                </span> vs. previous month
                            </p> --}}
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                    <i class="ri-ticket-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Yesterday</p>
                            <h2 class="mt-4 ff-secondary fw-semibold">
                                <span class="counter-value" data-target="{{ $yesterday }}"></span>Tk
                            </h2>
                            {{-- <p class="mb-0 text-muted">
                                <span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                </span> vs. previous month</p> --}}
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                    <i class="ri-ticket-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">This Month</p>
                            <h2 class="mt-4 ff-secondary fw-semibold">
                                <span class="counter-value" data-target="{{ $this_month }}"></span>Tk
                            </h2>
                            {{-- <p class="mb-0 text-muted">
                                <span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                </span> vs. previous month</p> --}}
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                    <i class="ri-ticket-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-sm-6">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p class="fw-medium text-muted mb-0">Last Month</p>
                            <h2 class="mt-4 ff-secondary fw-semibold">
                                <span class="counter-value" data-target="{{ $last_moth }}"></span>Tk
                            </h2>
                            {{-- <p class="mb-0 text-muted">
                                <span class="badge bg-light text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                                </span> vs. previous month</p> --}}
                        </div>
                        <div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                    <i class="ri-ticket-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
