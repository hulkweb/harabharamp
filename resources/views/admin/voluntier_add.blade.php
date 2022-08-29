@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Voluntier</li>
        </ol>
        <form action="{{ route('voluntier_store') }}" method="post" enctype="multipart/form-data">
            <div class="box_general padding_bottom">
                @csrf
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i> Add Voluntier</h2>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-5 card">

                        <div class="form-group">
                            <label> Name / नाम </label>
                            <input type="text" name="name" class="form-control" placeholder="">
                        </div>



                        <div class="form-group">
                            <label> Email </label>
                            <input type="text" name="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label> Phone </label>
                            <input type="number" name="phone" class="form-control" placeholder="">
                            <input type="hidden" name="pincode" class="form-control" placeholder="" value="0">
                            <input type="hidden" name="voluntier" value="1" class="form-control">
                            <input type="hidden" name="added_by" value="{{ auth()->user()->id }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Upload Image / फोटो</label> <br>
                            <input type="file" name="image" class="form-control">
                        </div>

                    </div>
                    <div class="col-sm-5 offset-sm-1">
                        <div class="form-group">
                            <label>Panchayat / पंचायत <span class="text-danger">*</span></label>
                            <div class="styled-select">
                                <select name="panchayat_id" class="form-control" required>
                                    <option value="">---select---</option>
                                    @foreach ($panchayats as $panchayat)
                                        <option value='{{ $panchayat->id }}'>{{ $panchayat->name }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>
                        <br><br>

                        <p><button type="submit" class="btn_1 medium">Save</button></p>

                    </div>
                </div>




            </div>

        </form>
    </div>
    <!-- /.container-fluid-->
@endsection
