@extends('layout')
@section('content')

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
        <form action="">
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
                        <label for="country"><h5>Country</h5></label>
                        <select name="country" class="form-control" id="country">
                            <option>USA</option>
                            <option>Russia</option>
                            <option>Ukraine</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="phone"><h5>Phone</h5></label>
                    <div class="form-group">
                        @if ($errors->has('phone'))
                            <input id="phone" type="tel" class="form-control is-invalid" maxlength="9"  required>
                            <div class="invalid-feedback">
                                {{$errors->first('phone')}}
                            </div>
                        @else
                            <input id="phone" type="tel" value="{{old('full_number')}}" class="form-control" maxlength="9" required>
                        @endif
                    </div>
                </div>
            </div>
        </form>
</div>
</section>
@endsection
