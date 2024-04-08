@extends('User.layout.main')


@section('content')
    <!-- start: Content -->
    <div class="panel box-shadow-none content-header">
        <div class="panel-body">
            <div class="col-md-12">
                <h3 class="animated fadeInLeft">Message</h3>
                <p class="animated fadeInDown">
                    Message <span class="fa-angle-right fa"></span>Pending
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection
