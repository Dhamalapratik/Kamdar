@extends('User.layout.main')

@section('content')
    @if (session('success'))
        <div>
            <script>
                notyf() -
                    > position('x', 'center') -
                    > position('y', 'top') -
                    > addError('There was a problem re-activating your account.');
            </script>
        </div>

    @endif

        <div class="col-md-12" style="padding:20px;">
            <div class="panel mail-wrapper">
                <div class="panel-body">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-9 col-sm-12 padding-0 mail-right">
                            <div class="col-md-12 mail-right-tool">
                                <ul class="nav">
                                    <li>
                                        <h4>To:</h4>
                                    </li>
                                    <li>
                                        <h4 class="">{{ $user->name }}</h4>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-12 mail-right-content" style="padding-left:10px;">
                                <form method="POST" action="{{ route('user.contact.store', ['id' => $user->id]) }}"
                                    enctype="multipart/form-data" id="contactForm">
                                    @csrf
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <label for="topic">Topic:</label>
                                            <input type="text" name="topic" class="form-control" id="topic"
                                                placeholder="Enter topic" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <textarea name="description" class="form-control" id="description" placeholder="Enter description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <label for="image">Image:</label>
                                            <input type="file" name="image[]" multiple class="form-control-file"
                                                id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <label for="date">Date:</label>
                                            <input type="date" name="date" class="form-control" id="date"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <label for="time">Time:</label>
                                            <input type="time" name="time" class="form-control" id="time"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 padding-0">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary"
                                                onclick="formatDateTime()">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function formatDateTime() {
                // Get the date and time values from the form
                let dateInput = document.getElementById('date').value;
                let timeInput = document.getElementById('time').value;

                // Create a new Date object combining date and time
                let dateTime = new Date(dateInput + ' ' + timeInput);

                // Format the date and time as required (e.g., for MySQL format)
                let formattedDateTime = dateTime.toISOString().slice(0, 19).replace('T', ' ');

                // Set the formatted date and time back to the form fields
                document.getElementById('date').value = formattedDateTime.split(' ')[0];
                document.getElementById('time').value = formattedDateTime.split(' ')[1];
            }
        </script>
    @endsection
