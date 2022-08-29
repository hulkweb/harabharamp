@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Voluntiers</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Voluntiers
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Num</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>Email</th>
                                <th>Panchayat</th>
                                <th>Destrict</th>
                                <th>Mandal</th>
                                <th>Vidhansabha</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                         
                            @foreach ($voluntiers as $i=>$voluntier)
                                <tr>
                                     <td>{{ $i+1 }}</td>
                                    <td>{{ $voluntier->name }}</td>
                                    <td>{{ $voluntier->phone }}</td>
                                    <td>{{ $voluntier->email }}</td>
                                    <td>{{ $voluntier->panchayat->name}}</td>
                                    <td>{{ $voluntier->panchayat->district }}</td>
                                    <td>{{ $voluntier->panchayat->mandal }}</td>
                                    <td>{{ $voluntier->panchayat->parliament }}</td>

                                    <td> <a href="/admin/voluntier_delete/{{ $voluntier->id }}"><i
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
