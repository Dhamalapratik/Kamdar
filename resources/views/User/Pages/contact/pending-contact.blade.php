@extends('User.layout.main')


@section('content')
    <!-- start: Content -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Message</h3>
                <p class="animated fadeInDown">
                    Message <span class="fa-angle-right fa"></span>Booking
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="responsive-table">

                        <table class="table table-striped table-bordered" width="100%" cellspacing="0"
                            id="contacts-table">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Description</th>
                                    <th>Send By</th>
                                    <th>Date</th>
                                    <th>time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#contacts-table').DataTable({
                processing: true,
                serverSide: true,
                "ajax": {
                    "url": "{{ route('user.contacts.booking.data') }}",
                    "type": "GET",
                    "dataSrc": ""
                },
                columns: [{
                        data: 'topic',
                        name: 'topic'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'sender_id',
                        name: 'sender_id'
                    },
                    {
                        data: 'date',
                        name: 'date'
                    },
                    {
                        data: 'time',
                        name: 'time'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endsection
