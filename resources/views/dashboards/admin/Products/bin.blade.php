@extends('layout')
@section('title')
    GIFT STORE
@endsection
@section('keywords')
    Home,About,Contact,Car
@endsection
@section('description')

@endsection
@section('content')
    <div align="center" style="background:#1CD5E8;padding:20px;">
        <h3 class="black-text" style="font-weight:bold;"><a href="{{ url('admin-dash') }}">Admin Dashboard</a></h3>

        <p class="white-text" style="font-weight:bold;">
            <a href="{{ url('admin-products') }}" class="badge badge-pill btn-outline-green px-3 py-2"> <i
                    class="fas fa-file-powerpoint"></i> &nbsp; Show All Products</a>

            <a href="{{ url('admin-add-product') }}" class="badge badge-pill btn-outline-dark   px-3 py-2"> <i
                    class="fas fa-plus"></i> &nbsp; Add New Product</a>
            <a href="{{ url('admin-bin-products') }}" class="badge badge-pill btn-outline-danger px-3 py-2"><i
                    class="fas fa-dumpster"></i> Recycle Bin</a>

        </p>
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif


    </div>



    <div class="container py-5">
        <p align="left">
            <i class="fas fa-dumpster"></i> Recently Deleted Products
        </p>
        <div cla <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead align="center" style="background-color:cadetblue ">

                            <th style="font-size:larger;font-weight:bold;">Name</th>
                            <th style="font-size:larger;font-weight:bold;">Description</th>
                            <th style="font-size:larger;font-weight:bold;">Images</th>
                            <th style="font-size:larger;font-weight:bold;">Price</th>
                            <th style="font-size:larger;font-weight:bold;">Show/Hide</th>
                            <th style="font-size:larger;font-weight:bold;">Action</th>

                        </thead>
                        <tbody>
                            @foreach ($Products as $item)
                                <tr>

                                    <td align="center">{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>


                                    <td align="center">
                                        <img src="{{ asset('Uploads/Products/' . $item->image1) }}" width="50px;"
                                            alt="{{ $item->image1 }}" />
                                        <img src="{{ asset('Uploads/Products/' . $item->image2) }}" width="50px;"
                                            alt="{{ $item->image2 }}" />
                                        <img src="{{ asset('Uploads/Products/' . $item->image3) }}" width="50px;"
                                            alt="{{ $item->image3 }}" />
                                        <img src="{{ asset('Uploads/Products/' . $item->image4) }}" width="50px;"
                                            alt="{{ $item->image4 }}" />


                                    </td>
                                    <td align="center">{{ $item->price }}</td>

                                    <td align="center">
                                        <?php
                                        if ($item->status == 1) {
                                            echo '<p class="badge badge-pill btn-success"><i class="fas fa-check "></i></p>';
                                        } else {
                                            echo '<p class="badge badge-pill btn-danger"><i class="fas fa-times"></i></p>';
                                        }
                                        ?>
                                    </td>
                                    <td align="center">
                                        <a href="{{ url('admin-product-restore/' . $item->id) }}"
                                            class="badge badge-pill btn-warning px-3 py-2">Restore</a><br><br>
                                        <a href="{{ url('admin-product-delete-confirm/' . $item->id) }}"
                                            class="badge badge-pill btn-danger px-3 py-2">Delete Permanently</a>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr>
@endsection
