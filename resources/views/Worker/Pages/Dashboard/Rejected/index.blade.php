@extends('Worker.layout.main')


@section('content')
    <!-- start: Content -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Message</h3>
                <p class="animated fadeInDown">
                    Message <span class="fa-angle-right fa"></span>Rejected
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-12 top-20 padding-0">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="responsive-table">

                        <table class="table table-striped table-bordered" width="100%" cellspacing="0" id="contacts-table">
                            <thead>
                                <tr>
                                    <th>Topic</th>
                                    <th>Description</th>
                                    <th>Send to</th>
                                    <th>Date</th>
                                    <th>time</th>
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

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#contacts-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('worker.contacts.pending.data') }}',
        columns: [
            { data: 'topic', name: 'topic' },
            { data: 'description', name: 'description' },
            { data: 'sender_id', name: 'sender_id' },
            { data: 'date', name: 'date' },
            { data: 'time', name: 'time' },
            { data: 'status', name: 'status' },
            { data: 'action', name: 'action', orderable: false, searchable: false }
        ]
    });
});
</script>


@endsection
