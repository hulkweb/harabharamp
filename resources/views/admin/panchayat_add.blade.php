@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Panchayat / पंचायत</li>
        </ol>
        <form action="{{ route('panchayat_store') }}" method="post" enctype="multipart/form-data">
            <div class="box_general padding_bottom">
                @csrf

                <div class="row">
                    <div class="col-md-5">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-file"></i> Add Panchayat / पंचायत</h2>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Panchayat Name / पंचायत का नाम </label>
                            <input type="text" name="name" class="form-control" placeholder="" required>
                        </div>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <div class="form-group">
                            <label>Assembly / विधानसभा <span class="text-danger">*</span></label>
                            <div class="styled-select">
                                <select name="parliament" class="form-control" required>
                                    <option value="">---select---</option>
                                    @foreach ($parliaments as $parliament)
                                        <option value='{{ $parliament->title }}'>{{ $parliament->title }}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>District <span class="text-danger">*</span></label>
                            <div>
                                <select name="district" class="form-control" id="" required>
                                    <option value="0">Select</option>
                                    <option value="AGAR MALWA">AGAR MALWA</option>
                                    <option value="ALIRAJPUR">ALIRAJPUR</option>
                                    <option value="ANUPPUR">ANUPPUR</option>
                                    <option value="ASHOKNAGAR">ASHOKNAGAR</option>
                                    <option value="BADWANI">BADWANI</option>
                                    <option value="BALAGHAT">BALAGHAT</option>
                                    <option value="BETUL">BETUL</option>
                                    <option value="3">BHIND</option>
                                    <option value="BHIND">BHOPAL</option>
                                    <option value="BURHANPUR">BURHANPUR</option>
                                    <option value="CHHATARPUR">CHHATARPUR</option>
                                    <option value="CHHINDWARA">CHHINDWARA</option>
                                    <option value="DAMOH">DAMOH</option>
                                    <option value="DATIA">DATIA</option>
                                    <option value="DEWAS">DEWAS</option>
                                    <option value="DHAR">DHAR</option>
                                    <option value="DINDORI">DINDORI</option>
                                    <option value="GUNA">GUNA</option>
                                    <option value="GWALIOR">GWALIOR</option>
                                    <option value="HARDA">HARDA</option>
                                    <option value="HOSHANGABAD">HOSHANGABAD</option>
                                    <option value="INDORE">INDORE</option>
                                    <option value="JABALPUR">JABALPUR</option>
                                    <option value="JHABUA">JHABUA</option>
                                    <option value="KATNI">KATNI</option>
                                    <option value="KHANDWA">KHANDWA</option>
                                    <option value="KHARGONE">KHARGONE</option>
                                    <option value="MANDLA">MANDLA</option>
                                    <option value="MANDSAUR">MANDSAUR</option>
                                    <option value="MORENA">MORENA</option>
                                    <option value="NARSINGHPUR">NARSINGHPUR</option>
                                    <option value="NEEMUCH">NEEMUCH</option>
                                    <option value="NIWARI">NIWARI</option>
                                    <option value="PANNAA">PANNAA</option>
                                    <option value="RAISEN">RAISEN</option>
                                    <option value="RAJGARH">RAJGARH</option>
                                    <option value="RATLAM">RATLAM</option>
                                    <option value="REWA">REWA</option>
                                    <option value="SAGAR">SAGAR</option>
                                    <option value="SATNA">SATNA</option>
                                    <option value="SEHORE">SEHORE</option>
                                    <option value="SEONI">SEONI</option>
                                    <option value="SHAHDOL">SHAHDOL</option>
                                    <option value="SHAJAPUR">SHAJAPUR</option>
                                    <option value="SHEOPUR">SHEOPUR</option>
                                    <option value="SHIVPURI">SHIVPURI</option>
                                    <option value="SIDHI">SIDHI</option>
                                    <option value="SINGOURLI">SINGOURLI</option>
                                    <option value="TIKAMGARH">TIKAMGARH</option>
                                    <option value="UJJAIN">UJJAIN</option>
                                    <option value="UMARIA">UMARIA</option>
                                    <option value="VIDISHA">VIDISHA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Mandal </label>
                                <input type="text" name="mandal" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label> Pincode </label>
                                <input type="text" name="pincode" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>


                    </div>

        </form>
    </div>
    <!-- /.container-fluid-->
@endsection
