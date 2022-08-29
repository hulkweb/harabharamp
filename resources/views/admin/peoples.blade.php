@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Users
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                 <th>Num</th>
                                <th>Name</th>
                               
                                <th>Phone</th>

                                <th>Event</th>
                                <th>Place</th>
                                 <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($peoples as $i=>$people)
                                <tr>
                                     <td>{{ $i +1}}</td>
                                    <td>{{ $people->name }}</td>
                                
                                    <td>{{ $people->phone }}</td>
                                    <td>{{ date_diff(date_create($people->birthday), date_create(date('d-m-y')))->format('%y') }}
                                    </td>
                                    <td>{{ $people->event->title }}</td>
                                    <td>{{ $people->place }}</td>
                                     
                                    @if (auth()->user()->admin)
                                        <td> <a href="/admin/people_delete/{{ $people->id }}"><i
                                                    class="fa fa-times-circle" aria-hidden="true"></i></a> </td>
                                    @endif
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
