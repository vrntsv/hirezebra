@extends('layout')
@section('content')
@include('countrySelect')
<section class="hero register-candidate">
    <div class="container">
        <div class="hero__content">
            <div class="hero__text">
                <h1 class="hero__title heading-primary">
                    YOUR NEXT AWESOME JOB IS JUST MINUTES AWAY!
                </h1>
            </div>
        </div>
    </div>
</section>
<br><br><br>
<section class="jobs">
    <div class="container">
        <form action="/registerCandidate" method="post">
            <div class="form-group">
                <label for="email"> <h5>Email ID</h5></label>
                @if ($errors->has('email'))
                    <input type="email" name="email" id="title" class="form-control is-invalid" maxlength=100 placeholder="Appartment for rent" required>
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @else
                <input type="email" name="email" value="{{old('email')}}" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                @endif
            </div>
            <div class="form-group">
                <label for="full_name"> <h5>Full name</h5></label>
                @if ($errors->has('full_name'))
                    <input type="text" name="full_name" id="full_name" class="form-control is-invalid" maxlength=100 placeholder="Appartment for rent" required>
                    <div class="invalid-feedback">
                        {{$errors->first('email')}}
                    </div>
                @else
                    <input type="text" name="full_name" value="{{old('full_name')}}" class="form-control" id="full_name" aria-describedby="emailHelp" placeholder="Enter your full name">
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="country"><h5>Date of birth</h5></label>
                        @if ($errors->has('date_of_birth'))
                            <input id="date_of_birth" type="date" class="form-control" placeholder="Enter your date of birth " required>
                            <div class="invalid-feedback">
                                {{$errors->first('date_of_birth')}}
                            </div>
                        @else
                            <input id="date_of_birth" type="date"  placeholder="Enter your date of birth " value="{{old('date_of_birth')}}" class="form-control" required>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <label for="phone"><h5>Phone</h5></label>
                    <div class="form-group">
                        @if ($errors->has('phone'))
                            <input id="phone"  placeholder="Enter your phone" class="form-control is-invalid" maxlength="9"  required>
                            <div class="invalid-feedback">
                                {{$errors->first('phone')}}
                            </div>
                        @else
                            <input id="phone" type="tel" name="phone"  placeholder="Enter your phone" value="{{old('phone')}}" data-inputmask="'alias': 'phone'" class="form-control" maxlength="9" required>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="citizenship"><h5>Citizenship</h5></label>
                        @if ($errors->has('date_of_birth'))
                            @php
                              getSelectOfCountries('citizenship');
                            @endphp
                            <div class="invalid-feedback">
                                {{$errors->first('date_of_birth')}}
                            </div>
                        @else
                            @php
                                getSelectOfCountries('citizenship');
                            @endphp
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="current_country"><h5>Current country</h5></label>

                        @if ($errors->has('notice_period'))
                                @php
                                    getSelectOfCountries('current_country');
                                @endphp
                                <div class="invalid-feedback">
                                    {{$errors->first('notice_period')}}
                                </div>
                            @else
                                @php
                                    getSelectOfCountries('current_country');
                                @endphp
                            @endif
                    </div>
                </div>
            </div>
            <div class="form-group" >
                <label for="work_visas"><h5>Work visas</h5></label>
                <textarea class="form-control" name="work_visas" id="work_visas" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label for="skills_domain"><h5>Skills Domain</h5></label>
                <select class="form-control">
                    @foreach($skills as $skill)
                        <option value="{{$skill->name}}">{{$skill->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="notice_period"><h5>Notice Period </h5></label>
                        @if ($errors->has('notice_period'))
                            <input id="notice_period"  name="notice_period"  placeholder="Enter your notice period" value="{{old('notice_period')}}" data-inputmask="'alias': 'phone'" class="form-control" maxlength="9" required>
                            <div class="invalid-feedback">
                                {{$errors->first('notice_period')}}
                            </div>
                        @else
                            <input id="notice_period" name="notice_period"  placeholder="Enter your notice period" value="{{old('notice_period')}}" data-inputmask="'alias': 'phone'" class="form-control" maxlength="9" required>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">

                        <div class="custom-control custom-switch">
                            <label for="willing_to_relocate"><h5>Willing to relocate?</h5></label>
                            <p>
                                <input type="checkbox" name="willing_to_relocate" id="willing_to_relocate" data-toggle="toggle" data-size="large" data-offstyle="default" data-width="250" data-onstyle="success" data-on="Yes" data-off="No">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" name="image" value="{{ old('image') }}"  id="image" accept=".jpg, .jpeg, .png">
                            <label class="custom-file-label" for="image">Load your photo</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" name="image" value="{{ old('resume') }}"  id="resume" accept=".jpg, .jpeg, .png">
                            <label class="custom-file-label" for="image">Load your resume</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-primary btn-lg btn-block">Register For Interview </button>

        </form>

</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
<script>
    $('#phone').inputmask("(999) 999-99-99");
</script>
<script href="{{ asset('js/jquery.countryselector.js') }}" />

@endsection
