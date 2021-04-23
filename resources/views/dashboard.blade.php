@extends('layouts.main')

@section('title') TVIP - Dashboard @endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="jumbotron jumbotron-fluid p-4 bg-transparent">
                <div class="container text-center">
                    <h1 class="display-4">Available Reward</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/1.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><strong>Tiket Umroh</strong></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue suscipit tempor. Etiam sem nunc, venenatis at tristique vel, ornare.</p>
                            <a href="#" class="badge badge-primary mr-1">AQUA</a>
                            <a href="#" class="badge badge-primary mr-1">1500ml</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="progress-group">
                                    <span>20%</span>
                                    <span class="float-right"><b>1000</b>/5000</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 20%"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body font-italic">
                            <h6 class="m-0 text-muted">Periode 1 April - 31 Mei</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/2.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><strong>Honda Scoopy</strong></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue suscipit tempor. Etiam sem nunc, venenatis at tristique vel, ornare.</p>
                            <a href="#" class="badge badge-primary mr-1">Levite</a>
                            <a href="#" class="badge badge-primary mr-1">500ml</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="progress-group">
                                    <span>0%</span>
                                    <span class="float-right"><b>0</b>/10000</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 0%"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body font-italic">
                            <h6 class="m-0 text-muted">Periode : 1 April - 31 Mei</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/3.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><strong>Cashback Rp 500.000</strong></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue suscipit tempor. Etiam sem nunc, venenatis at tristique vel, ornare.</p>
                            <a href="#" class="badge badge-primary mr-1">VIT</a>
                            <a href="#" class="badge badge-primary mr-1">600ml</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="progress-group">
                                    <span>10%</span>
                                    <span class="float-right"><b>300</b>/3000</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 10%"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body font-italic">
                            <h6 class="m-0 text-muted">Periode 1 April - 31 Mei</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/4.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body">
                            <h5 class="card-title mb-2"><strong>Cashback Rp 300.000</strong></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent congue suscipit tempor. Etiam sem nunc, venenatis at tristique vel, ornare.</p>
                            <a href="#" class="badge badge-primary mr-1">Mizone</a>
                            <a href="#" class="badge badge-primary mr-1">500ml</a>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="progress-group">
                                    <span>67%</span>
                                    <span class="float-right"><b>2000</b>/3000</span>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" style="width: 66.66666666666667%"></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-body font-italic">
                            <h6 class="m-0 text-muted">Periode 1 April - 31 Mei</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
