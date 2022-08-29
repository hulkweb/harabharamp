@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Postion</li>
        </ol>
        <form action="{{ route('position_store') }}" method="post" enctype="multipart/form-data">
            <div class="box_general padding_bottom">
                @csrf

                <div class="row">
                    <div class="col-md-5">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-file"></i> Add Position</h2>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Position Title / पद का नाम </label>
                            <input type="text" name="title" class="form-control" placeholder="अध्यक्ष">
                        </div>
                        <div class="form-group">
                            <label>Description / विवरण </label>
                            <textarea name="details" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <p><button name="add_position" type="submit" class="btn_1 medium">Save</button></p>

                    </div>
                    <div class="col-md-6 offset-md-1">

                        <div class="card mb-3">
                            <div class="card-header">
                                <i class="fa fa-table"></i> Position
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Position</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($positions as $position)
                                                <tr>
                                                    <td>{{ $position->title }}</td>
                                                    <td> <a href="/admin/position_delete/{{ $position->id }}"><i
                                                                class="fa fa-times-circle" aria-hidden="true"></i></a> </td>

                                                </tr>
                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </form>
    </div>
    <!-- /.container-fluid-->
@endsection
