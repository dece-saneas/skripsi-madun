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
        <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 bg-transparent">
                <div class="container text-center">
                    <h1 class="display-4">Available Reward</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut.</p>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/1.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body pb-0">
                            <h5 class="card-title mb-2"><strong>Tiket Umroh</strong></h5>
                            <p class="card-text text-sm">Ayo perbanyak transaksi pembelian produk <strong>VIT 25ml</strong> dan dapatkan Tiket Umroh tanpa di undi.</p>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="progress-group">
                                        <span>0%</span>
                                        <span class="float-right"><b>0</b>/5000</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn  btn-sm btn-light btn-block" disabled>Claim Reward</button>
                        </div>
                    </div>
                </div>                
                <div class="col-md-4 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/2.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body pb-0">
                            <h5 class="card-title mb-2"><strong>Honda Scoopy</strong></h5>
                            <p class="card-text text-sm">Ayo perbanyak transaksi pembelian produk <strong>AQUA 300ml</strong> dan dapatkan Honda Scoopy tanpa di undi.</p>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="progress-group">
                                        <span>20%</span>
                                        <span class="float-right"><b>1000</b>/5000</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn  btn-sm btn-light btn-block" disabled>Claim Reward</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/3.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body pb-0">
                            <h5 class="card-title mb-2"><strong>Cashback 500rb</strong></h5>
                            <p class="card-text text-sm">Ayo perbanyak transaksi pembelian produk <strong>AQUA 300ml</strong> dan dapatkan Honda Scoopy tanpa di undi.</p>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="progress-group">
                                        <span>40%</span>
                                        <span class="float-right"><b>2000</b>/5000</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 40%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn  btn-sm btn-light btn-block" disabled>Claim Reward</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 card-reward">
                        <img src="{{ asset('img/rewards/4.jpg') }}" class="card-img-top" alt="Reward Image">
                        <div class="card-body pb-0">
                            <h5 class="card-title mb-2"><strong>Cashback 500rb</strong></h5>
                            <p class="card-text text-sm">Ayo perbanyak transaksi pembelian produk <strong>AQUA 300ml</strong> dan dapatkan Honda Scoopy tanpa di undi.</p>
                        </div>
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="progress-group">
                                        <span>140%</span>
                                        <span class="float-right"><b>7000</b>/5000</span>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 140%"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <button class="btn  btn-sm btn-success btn-block">Claim Reward</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
