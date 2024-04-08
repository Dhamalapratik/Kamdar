<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('otika/assets/css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('otika/assets/bundles/jquery-selectric/selectric.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('otika/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('otika/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('otika/assets/css/custom.css') }}">
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('otika/assets/img/favicon.ico') }}' />
</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Fill details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('user.contact.send',['id'=> $user->id]) }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="about">Write about yourself</label>
                                            <textarea id="about" class="form-control" name="about" autofocus autocomplete="about">{{ old('about') }}</textarea>
                                            @error('about')
                                                <div class="text-red-500 mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <!-- Add image field -->
                                        <div class="form-group col-6">
                                            <label for="profile_image">Profile Image</label>
                                            <input id="profile_image" type="file" class="form-control" name="profile_image">
                                            <!-- Add validation error message for image if needed -->
                                        </div>
                                    </div>
                                    <!-- Add DOB field -->
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input id="dob" type="date" class="form-control" name="dob"
                                            value="{{ old('dob') }}" required>
                                        <!-- Add validation error message for DOB if needed -->
                                    </div>
                                    <!-- Add gender field -->
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control" name="gender" required>
                                            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male
                                            </option>
                                            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>
                                                Female</option>
                                            <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>
                                                Other</option>
                                        </select>
                                        <!-- Add validation error message for gender if needed -->
                                    </div>
                                    <!-- Add dropdown menu for province, city, and area -->
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="province">Province</label>
                                            <select id="province" class="form-control" name="province" required>
                                                <option value="">Select Providence</option>
                                                <option value="Koshi">Koshi</option>
                                                <option value="Madhesh">Madhesh</option>
                                                <option value="Bagmati">Bagmati</option>
                                                <option value="Gandaki">Gandaki</option>
                                                <option value="Lumbini">Lumbini</option>
                                                <option value="Karnali">Karnali</option>
                                                <option value="Sudurpashchim">Sudurpashchim</option>

                                                <!-- Add options for provinces -->
                                            </select>
                                            <!-- Add validation error message for province if needed -->
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="city">City</label>
                                            <input id="city" type="text" class="form-control" name="city"
                                                value="{{ old('city') }}" required autocomplete="text">
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="area">Area</label>
                                            <input id="area" type="text" class="form-control" name="area"
                                                value="{{ old('area') }}" required autocomplete="text">
                                        </div>
                                    </div>

                                    @if (auth()->user()->role == 'worker')
                                        <div class="form-group">
                                            <label for="working_field">Working Field</label>
                                            <input id="working_field" type="text" class="form-control"
                                                name="working_field" value="{{ old('working_field') }}" required
                                                autofocus autocomplete="off">
                                            <!-- Add validation error message for working field if needed -->
                                        </div>
                                        <div class="form-group">
                                            <label for="experience">Experience</label>
                                            <input id="experience" type="text" class="form-control"
                                                name="experience" value="{{ old('experience') }}" required>
                                            <!-- Add validation error message for experience if needed -->
                                        </div>

                                        <div class="form-group">
                                            <label for="citizenship_number">Citizenship Number</label>
                                            <input id="citizenship_number" type="text" class="form-control"
                                                name="citizenship_number" value="{{ old('citizenship_number') }}"
                                                required>
                                            <!-- Add validation error message for citizenship number if needed -->
                                        </div>
                                        <div class="form-group">
                                            <label for="citizenship_front">Citizenship Front Image</label>
                                            <input id="citizenship_front" type="file" class="form-control"
                                                name="citizenship_front" accept="image/*" required>
                                            <!-- Add validation error message for citizenship front image if needed -->
                                        </div>
                                        <div class="form-group">
                                            <label for="citizenship_back">Citizenship Back Image</label>
                                            <input id="citizenship_back" type="file" class="form-control"
                                                name="citizenship_back" accept="image/*" required>
                                            <!-- Add validation error message for citizenship back image if needed -->
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Save
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- General JS Scripts -->
    <script src="{{ asset('otika/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('otika/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
    <script src="{{ asset('otika/assets/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('otika/assets/js/page/auth-register.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('otika/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('otika/assets/js/custom.js') }}"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->

</html>
