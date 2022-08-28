@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="header-container responsive">
            <h1>
                विधानसभा
            </h1>


        </div>

        <div class="row">

            <div class="col-sm-5  card">
                <form method="post" action="{{ route('parliament_store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="method">विधानसभा</label>
                        <input type="text" name="title" class="form-control" autofocus>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 offset-sm-1 p-4 card">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Num</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parliaments as $parliament)
                            <tr>
                                <td>{{ $parliament->id }}</td>
                                <td>{{ $parliament->title }}</td>
                                <td> <a class="btn btn-danger m-1" href="/admin/parliament_delete/{{ $parliament->id }}"> <i
                                            class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>


        </div>




    </div>
@endsection
