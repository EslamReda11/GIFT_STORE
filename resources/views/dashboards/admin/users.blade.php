@extends('layouts.admin')
@section('title')
GIFT STORE
@endsection
@section('keywords')
    Home,About,Contact,Car
@endsection
@section('description')
@section('content')
    <div align="center" style="background:#1CD5E8;padding:20px;">
        <h3 class="black-text" style="font-weight:bold;"><a href="{{ url('admin-dash') }}">Admin Dashboard</a></h3>
        <p class="white-text" style="font-weight:bold;">

            <a href="" class="badge badge-pill btn-dark disabled px-3 py-2"> <i class="fas fa-users"></i> All Users</a>
            <a href="{{ url('admin-bin-users') }}" class="badge badge-pill btn-outline-danger px-3 py-2"><i
                    class="fas fa-dumpster"></i> Recycle Bin</a>
        </p>
        @if (session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif


    </div>




    <div class="container py-2">

        <p align="left">
            <i class="fas fa-users"></i> Registerd Users
        </p>
        <!--Grid column-->
        <div class="col-md-12 mb-4">

            <!--Card-->
            <div class="card">

                <!--Card content-->
                <div class="card-body">

                    <!-- Table  -->
                    <table class="table table-striped table-bordered">
                        <!-- Table head -->
                        <thead align="center" style="background-color:cadetblue ">
                            <tr>
                                <th style="font-size:larger;font-weight:bold;">Id</th>
                                <th style="font-size:larger;font-weight:bold;">Name</th>
                                <th style="font-size:larger;font-weight:bold;">Email</th>
                                <th style="font-size:larger;font-weight:bold;">Role</th>
                                <th style="font-size:larger;font-weight:bold;">Action</th>
                            </tr>
                        </thead>
                        <!-- Table head -->

                        <!-- Table body -->
                        <tbody>
                            @foreach ($users as $data)
                                <tr>
                                    <td align="center">{{ $data->id }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td align="center">{{ $data->role }}</td>
                                    <td align="center">
                                        <a href="{{ url('admin/role-edit/' . $data->id) }}"
                                            class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                                        <a href="{{ url('admin/delete-user/' . $data->id) }}"
                                            class="badge badge-pill btn-danger px-3 py-2">Delete</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                        <!-- Table body -->
                    </table>
                    <!-- Table  -->
                    <!-- Feteching Pagination  Links-->
                    {{ $users->links() }}

                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <hr>
@endsection
