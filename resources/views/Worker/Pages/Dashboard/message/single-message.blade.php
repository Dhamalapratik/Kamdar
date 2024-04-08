@extends('Worker.layout.main')


@section('content')
    <!-- start: Content -->

    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">
        <div class="col-md-12 col-sm-12 col-xs-12 mail-wrapper">

            <div class="col-md-12 col-sm-12 col-xs-12 padding-0">
                <div class="col-md-9 col-sm-12 col-xs-12 mail-right">

                    <div class="col-md-12 col-sm-12 col-xs-12 mail-right-tool">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <h4><span>Subject:</span> <b>{{ $contact->topic }}</b></h4>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <h5><span>From:</span> {{ $sender->email }}</h5> <!-- Display sender's email -->
                            <span class="pull-right">{{ $contact->created_at }}</span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 mail-right-content padding-0">
                            <div class="col-md-12 col-sm-12 col-xs-12 mail-right-text">
                                <h4>Description</h4>
                                <p>
                                    {{ $contact->description }}
                                </p>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <hr />
                            </div>
                            @if ($contact->image)

                            @endif
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <h5 style="margin-bottom:20px;"><span></span> Photos</h5>
                                <div class="col-md-12 padding-0">
                                    <div class="col-md-3 col-sm-4 col-xs-12 mail-attachment mail-attachment-image">
                                        <div class="col-md-12">
                                            <div class="thumbnail">
                                                <img src="asset/img/bg1.jpg" alt="Photo">
                                                <div class="caption">
                                                    <center>
                                                        <span class="label label-danger">
                                                            <span class="fa fa-cloud-download"></span>
                                                            Photo2...jpg
                                                        </span>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 mail-reply">
                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                    <input type="submit" value="Save As Draft" class="btn btn-default pull-right" />
                                    <input type="submit" value="Reply" class="btn btn-danger pull-right" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end: Content -->
    @endsection
