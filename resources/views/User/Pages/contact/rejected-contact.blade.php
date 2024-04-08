@extends('User.layout.main')


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
                    {{-- <div class="col-md-12 padding-0" style="padding-bottom:20px;">
                        <div class="col-md-6" style="padding-left:10px;">
                            <input type="checkbox" class="icheck pull-left" name="checkbox1" />
                            <select>
                                <option>Delete</option>
                                <option>Ignore</option>
                                <option>Cancel</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="col-lg-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" aria-label="...">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Search<span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div><!-- /input-group -->
                            </div><!-- /.col-lg-6 -->
                        </div>
                    </div> --}}
                    <div class="responsive-table">

                        <table class="table table-striped table-bordered" width="100%" cellspacing="0">
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
                            <tbody>
                                @foreach ($contacts as $message)
                                    <tr>
                                        <td>{{ $message->topic }}</td>
                                        <td>{{ $message->description }}</< /td>
                                        <td>{{ $message->receiver->name }}</< /td>
                                        <td>{{ date('Y-m-d', strtotime($message->date)) }}</td>
                                        <td>{{ date('H:i:s', strtotime($message->time)) }}</td>
                                        <td>
                                            <div class="col-md-6" style="margin-top:5px;">
                                                <button class="btn ripple-infinite btn-round btn-warning">
                                                    <div>
                                                        <span> View </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6" style="padding-top:20px;">
                        <span>showing 0-10 of 30 items</span>
                    </div>
                    <div class="col-md-6">
                        <ul class="pagination pull-right">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection
