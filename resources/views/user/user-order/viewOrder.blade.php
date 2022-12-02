@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card elevation-3 mt-2">
                        <div class="card-header">
                            <h3 class="card-title">View Order</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Description</th>
                                        <th>Payment Method</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($orders->orderItems as $orderItem)
                                        <tr>
                                            <td width="10%">{{ $orderItem->product->product_name }}</td>
                                            <td width="10%">{{ $orderItem->product->price }}</td>
                                            <td width="10%">{{ $orderItem->product->category }}</td>
                                            <td width="10%">{{ $orderItem->product->status }}</td>
                                        </tr>
                                    @endforeach


                                </tbody>

                            </table>
                            <a href="{{ url('/user-order') }}">
                                <button class="btn btn-sm btn-danger d-flex justify-content-end float-right mt-2">
                                    <i class="fa fa-arrow-left px-1 mt-1" aria-hidden="true"></i> Back
                                </button>
                            </a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
