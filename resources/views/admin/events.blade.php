@extends('layouts.admin')
@section('content')
    <link href="/assets/admin/css/custom.css" rel="stylesheet">

    @php
    $actual_link = '/register?event=';
    @endphp
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Events</li>
        </ol>
        <div class="box_general">
            <div class="header_box">
                <h2 class="d-inline-block">Event list</h2>

            </div>
            <div class="list_general">
                <ul>
                    @foreach ($events as $event)
                        <li>
                            <figure><img src="/uploads/events/{{ $event->image }}" alt="{{ $event->title }}"></figure>
                            <h4>{{ $event->title }}</h4>
                            <ul class="booking_list">
                                <li><strong>Start date</strong> {{ date('d M Y', strtotime($event->from_date)) }}</li>
                                <li><strong>Start Time</strong> {{ date('h:i:s A', strtotime($event->from_time)) }}</li>
                                <li><strong>Registrations</strong> </li>

                            </ul>
                            <br>
                            <p><canvas id="qr-code-{{ $event->id }}"></canvas></p>
                            <p><a href="whatsapp://send?text=https://mpbjym.org/form?event_id={{ $event->id }}"
                                    data-action="share/whatsapp/share" target="_blank" class="btn_1 delete"><i
                                        class="fa fa-whatsapp"></i>
                                    whatsapp</a>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=https://mpbjym.org/form?event_id={{ $event->id }}"
                                    target="_blank" class="btn_1 delete"><i class="fa fa-facebook"></i> facebook</a>

                                <a href="{{ $actual_link }}{{ $event->id }}" target="_blank" class="btn_1 delete"><i
                                        class="fa fa-file"></i> fill Form</a>
                                <a href="/admin/peoples?event={{ $event->id }}" target="_blank" class="btn_1 delete"><i
                                        class="fa fa-users"></i> users</a>

                            </p>
                            <p><a href="/admin/event_delete/{{ $event->id }}" class="btn btn-danger pending"><i
                                        class="fa fa-times-circle-o"></i> Delete</a>
                                <a href="/admin/event_edit/{{ $event->id }}" class="btn_1 primary"><i
                                        class="fa fa-edit"></i> Update</a>
                            </p>

                            <script>
                                var qr;
                                (function() {
                                    qr = new QRious({
                                        element: document.getElementById('qr-code-{{ $event->id }}'),
                                        size: 200,
                                        value: '{{ $actual_link }}/register/{{ $event->id }}'
                                    });
                                })
                                ();

                                function generateQRCode() {

                                    qr.set({
                                        foreground: 'black',
                                        size: 200,
                                        value: '{{ $actual_link }}?id={{ $event['id'] }}'
                                    });
                                }
                            </script>
                        </li>
                    @endforeach




                </ul>
            </div>
        </div>
        <!-- /box_general-->
        <!-- <nav aria-label=" ...">
                                                                                    <ul class="pagination pagination-sm add_bottom_30">
                                                                                      <li class="page-item disabled">
                                                                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                                                      </li>
                                                                                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                                      <li class="page-item">
                                                                                        <a class="page-link" href="#">Next</a>
                                                                                      </li>
                                                                                    </ul>
                                                                                    </nav> -->
        <!-- /pagination-->
    </div>
    <!-- /container-fluid-->
@endsection
