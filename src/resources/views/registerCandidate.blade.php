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
        <form action="/registerCandidate" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
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
                            <input id="date_of_birth"  name="date_of_birth" type="date" class="form-control" placeholder="Enter your date of birth " required>
                            <div class="invalid-feedback">
                                {{$errors->first('date_of_birth')}}
                            </div>
                        @else
                            <input id="date_of_birth" type="date" name="date_of_birth" placeholder="Enter your date of birth " value="{{old('date_of_birth')}}" class="form-control" required>
                        @endif
                    </div>
                </div>
                <div class="col">
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
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="citizenship"><h5>Citizenship</h5></label>
                        @if (!empty($errors))
                            @php
                              getSelectOfCountries('citizenship', old('citizenship'));
                            @endphp
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

                        @if (!empty($errors))
                                @php
                                    getSelectOfCountries('current_country', old('current_country'));
                                @endphp
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

                @if ($errors->has('work_visas'))
                    <textarea class="form-control" name="work_visas" id="work_visas" placeholder="Enter information about your work visas"   rows="4"></textarea>
                    <div class="invalid-feedback">
                        {{$errors->first('work_visas')}}
                    </div>
                @else
                    <textarea class="form-control" name="work_visas" id="work_visas" placeholder="Enter information about your work visas"  rows="4">{{old('work_visas')}}</textarea>
                @endif
            </div>
            <div class="form-group">
                <label for="skills_domain"><h5>Skills Domain</h5></label>
                <select name="skills_domain" class="form-control">
                    @foreach($skills as $skill)
                        @if ($skill->name == old('skills_domain'))
                            <option value="{{$skill->name}}" selected>{{$skill->name}}</option>
                        @else
                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                        @endif
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
                <div class="row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload your photo</span>
                            </div>
                                @if ($errors->any())
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input is-invalid" id="photo"
                                           aria-describedby="inputGroupFileAddon01"
                                           accept=".jpg, .jpeg, .png"
                                           required>
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    <div class="invalid-feedback">
                                        Please, attach file again
                                    </div>
                                </div>

                            @else
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="photo"
                                           aria-describedby="inputGroupFileAddon01"
                                           accept=".jpg, .jpeg, .png"
                                           required>
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload your resume</span>
                            </div>
                            <div class="custom-file">

                                @if ($errors->any())
                                    <input type="file" name="resume" class="custom-file-input is-invalid" id="resume"
                                           accept=".doc, .docx, .pdf, .djvu"
                                           aria-describedby="inputGroupFileAddon01"
                                           required>
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    <div class="invalid-feedback">
                                        Please, attach file again
                                    </div>
                                @else
                                <input type="file" name="resume" class="custom-file-input" id="resume"
                                       accept=".doc, .docx, .pdf, .djvu"
                                       aria-describedby="inputGroupFileAddon01"
                                       required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Register For Interview </button>
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
