@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Members</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Members
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr> <th>Num</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Position</th>
                                <th>Place</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($members as $i=>$member)
                                <tr>
                                      <td>{{ $i +1}}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->phone }}</td>
                                    <td>{{ $member->position->title }}</td>
                                    <td>{{ $member->place }}</td>
                                    <td>{{ date("d M Y ",$member->created_at)  }}</td>
                                    <td>
                                        <a href="/admin/member_edit/{{ $member->id }}" class="btn btn-primary">Update</a>

                                        <a href="/admin/member_delete/{{ $member->id }}"
                                            class="btn btn-sm btn-danger">Delete</a>

                                    </td>
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
