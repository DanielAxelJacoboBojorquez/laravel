@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>DASHBOARD</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header border-transparent">
                        <h2 class="card-title">List of Programming Languages
                            <button class="ml-4 btn btn-sm btn-success"></button>
                        </h2>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table m-0">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Description</th> 
                                <th>Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
