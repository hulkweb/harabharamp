@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Member</li>
        </ol>
        <form action="code/member_.php" method="post" enctype="multipart/form-data">
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add Member</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name / नाम</label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Upload Image / फोटो</label> <br>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password </label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter </label>
                            <input type="text" name="twitter" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Birthday / जन्म दिनांक </label>
                            <input type="date" name="birthday" class="form-control" placeholder="Hotel Mariott">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position / पद</label>
                            <div class="styled-select">
                                <select name="position_id" required>
                                    <option value="">---select---</option>
                                    @foreach ($positions as $position)
                                        <option value='{{ $position->id }}'>{{ $position->title }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Place / स्थान</label>
                            <input type="text" name="place" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pincode </label>
                            <input type="text" name="pincode" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->

            </div>
            <!-- /box_general-->
            <!-- /box_general-->
            <p><button name="add_member" type="submit" class="btn btn-primary medium">Save</button></p>
        </form>
    </div>
    <!-- /.container-fluid-->
@endsection
