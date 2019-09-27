@extends('backend.theme.master')

@section('title','Dashboard')

@section('content')


    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Registered</li>
    </ol>




    <!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Registered User </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Institute</th>
                        <th>Reference</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Institute</th>
                        <th>Reference</th>
                        <th>Mobile</th>
                        <th>Country</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->f_name.' '.$user->l_name }} </td>
                        <td>{{ $user->title }}</td>
                        <td>{{ $user->organization }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->mobile }}</td>
                        <td>{{ $user->country }}</td>
                        <td><a href="" class="btn btn-info">Details</a></td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted"></div>
    </div>

@endsection