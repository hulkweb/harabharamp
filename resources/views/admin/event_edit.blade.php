@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Event</li>
    </ol>
    <form action="{{route('event_update')}}" method="post" enctype="multipart/form-data">
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Basic info</h2>
            </div>
@csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Event Title / शिर्शक</label>
                        <input type="text" name="title" class="form-control" value="{{ $event->title }}" placeholder=" मन की बात ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Image / फोटो</label> <br>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Event Date / दिनांक </label>
                        <input type="date" name="from_date" value="{{ $event-> }}" class="form-control" placeholder="Hotel Mariott">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Event Timing / समय</label> <br>
                        <input type="time" class="form-control" name="from_time">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Place / स्थान</label>
                        <input type="text" name="place" class="form-control" value="{{ $event->place }}" placeholder="Hotel Mariott">
                    </div>
                </div>
            </div>
            <!-- /row-->
            <input type="hidden" name="image_type" value="{{ $event->image }}">
            <input type="hidden" name="id" value="{{ $event->id }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Description / विवरण </label>
                        <textarea name="" id="" cols="30" rows="5" class="form-control">{{ $event->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <!-- /box_general-->
        <!-- /box_general-->
        <p><button name="update_event" type="submit" class="btn_1 medium">Save</button></p>
    </form>
</div>
<!-- /.container-fluid-->
@endsection
