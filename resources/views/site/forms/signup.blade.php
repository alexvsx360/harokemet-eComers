@extends('site.master')

@section('welcome')

<div class="continer">

    <div class="row">
        <div class="col text-center mt-5 mb-5 modal-title">
            <h1 class="text-dark">Here Your can Signup whit your account.</h1>

        </div>
    </div>

    <div class="col-md-6 mx-auto ">
        <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            @csrf()
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group ">
                        <label for="name">User name</label>
                        <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">

                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control"
                            placeholder="you@gmail.com">
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="password">* Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="text-danger">{{ $errors->first('password')}}</span>
                    </div>


                    <div class="form-group">
                        <label for="password-confirmation">* Verify Password</label>
                        <input type="password" name="password_confirmation" id="password-confirmation"
                            class="form-control">
                    </div>
                </div>
            </div>

            <input type="submit" value="Signup" class="btn btn-primary">
            <span class="text-danger">{{ $signin_error ?? ''}}</span>
        </form>

    </div>
</div>
</div>



@endsection