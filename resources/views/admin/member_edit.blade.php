@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update Member</li>
        </ol>
        <form action="{{ route('member_update') }}" method="post" enctype="multipart/form-data">
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Update Member</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name / नाम</label>
                            <input type="text" name="name" class="form-control" value=" {{ $member->name }}"
                                placeholder="">
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
                            <input type="text" name="phone" value=" {{ $member->phone }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" name="email" class="form-control" value=" {{ $member->phone }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password </label>
                            <input type="password" name="password" class="form-control" value=" {{ $member->password }}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Birthday / जन्म दिनांक </label>
                            <input type="date" name="birthday" class="form-control" 
                                value="{{$member->birthday}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position / पद</label>
                            <div class="styled-select">
                                <select name="position">
                                    @foreach ($positions as $position)
                                    <option value="{{$member->birthday==$position->id?"selected":""}}">{{$position->title}}</option>
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
                            <input type="text" name="place" value=" {{ $member->place }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pincode </label>
                            <input type="text" name="pincode" value=" {{ $member->pincode }}" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                
                <input type="hidden" name="id" value="{{ $member->id }}">
            </div>
            <!-- /box_general-->
            <!-- /box_general-->
            <p><button name="update_member" type="submit" class="btn_1 medium">update</button></p>
        </form>
    </div>
    <!-- /.container-fluid-->
@endsection
