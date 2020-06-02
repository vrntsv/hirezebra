@extends('layout')
@section('content')
    @include('countrySelect')
    <section class="hero register-emp">
        <div class="container">
            <div class="hero__content">
                <div class="hero__text">
                    <h1 class="hero__title heading-primary">
                        WE WILL LOOKOUT FOR YOU, WHILE YOU REST
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <section class="jobs">
        <div class="container">
            <form action="/registerCandidate" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="full_name"> <h5>Name</h5></label>
                            @if ($errors->has('name'))
                                <input type="text" name="name" id="name" class="form-control is-invalid" maxlength=100 placeholder="Appartment for rent" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            @else
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your full name">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="full_name"> <h5>Organization</h5></label>
                            @if ($errors->has('organization'))
                                <input type="text" name="organization" id="organization" class="form-control is-invalid" maxlength=100 placeholder="Enter your organization" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('organization')}}
                                </div>
                            @else
                                <input type="text" name="organization" value="{{old('organization')}}" class="form-control" id="organization" aria-describedby="emailHelp" placeholder="Enter your organization">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="full_name"> <h5>Designation</h5></label>
                            @if ($errors->has('designation'))
                                <input type="text" name="designation" id="designation" class="form-control is-invalid" maxlength=100 placeholder="Appartment for rent" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('designation')}}
                                </div>
                            @else
                                <input type="text" name="organization" value="{{old('organization')}}" class="form-control" id="organization" aria-describedby="emailHelp" placeholder="Enter your designation">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="phone"><h5>Phone Number</h5></label>
                            <div class="form-group">
                                @if ($errors->has('phone_number'))
                                    <input id="phone"  placeholder="Enter your phone" class="form-control is-invalid" maxlength="9"  required>
                                    <div class="invalid-feedback">
                                        {{$errors->first('phone_number')}}
                                    </div>
                                @else
                                    <input id="phone_number" type="tel" name="phone_number"  placeholder="Enter your phone" value="{{old('phone_number')}}" data-inputmask="'alias': 'phone'" class="form-control" maxlength="9" required>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="country"><h5>Start date</h5></label>
                            @if ($errors->has('start_date'))
                                <input id="date_of_birth"  name="start_date" type="date" class="form-control" placeholder="Enter start date " required>
                                <div class="invalid-feedback">
                                    {{$errors->first('start_date')}}
                                </div>
                            @else
                                <input id="date_of_birth" type="date" name="start_date" placeholder="Enter start date" value="{{old('start_date')}}" class="form-control" required>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email"> <h5>Email</h5></label>
                            @if ($errors->has('email'))
                                <input type="email" name="email" id="title" class="form-control is-invalid" maxlength=100 placeholder="Appartment for rent" required>
                                <div class="invalid-feedback">
                                    {{$errors->first('email')}}
                                </div>
                            @else
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group" >
                            <label for="salary_range"><h5>Salary range</h5></label>
                            <input type="text" name="salary_range" value="{{old('salary_range')}}" class="form-control" id="salary_range" aria-describedby="emailHelp" placeholder="Enter salary range">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="job_type"><h5>Job Type</h5></label>
                                <select class="form-control" name="job_type" id="job_type">
                                    <option>Permanent</option>
                                    <option>Contract</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="is_sponsored"><h5>Work Permit Sponsored? </h5></label>
                                    <select class="form-control" name="is_sponsored" id="is_sponsored">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col">
                            <label for="work_location"><h5>Work location</h5></label>
                            <input type="text" name="work_location" value="{{old('work_location')}}" class="form-control" id="work_location" aria-describedby="emailHelp" placeholder="Enter your work location">
                        </div>
                </div>
                <div class="form-group">
                    <label for="talent_requierment"><h5>Talent Requierment </h5></label>
                    <select multiple class="form-control" name="talent_requierment" id="talent_requierment">
                        @foreach($skills as $skill)
                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Register Requirement </button>
            </form>

        </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script>
        $('#phone').inputmask("(999) 999-99-99");
    </script>

    <script>
        $('#photo').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

    <script>
        $('#resume').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

@endsection
