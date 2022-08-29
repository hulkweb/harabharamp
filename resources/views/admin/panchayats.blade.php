@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Panchayats</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Panchayats
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Pincode</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($panchayats as $panchayat)
                                <tr>
                                    <td>{{ $panchayat->name }}</td>
                                    <td>{{ $panchayat->pincode }}</td>
                                    <td> <a href="/admin/panchayat_delete/{{ $panchayat->id }}"><i
                                                class="fa fa-times-circle" aria-hidden="true"></i></a> </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /tables-->
    </div>
    <!-- /container-fluid-->
@endsection
