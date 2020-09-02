@extends('site.master')

@section('welcome')

<div class="continer">

    <div class="row">
        <div class="col text-center mt-5 mb-5 modal-title">
            <h1 class="text-dark">Here Your can Signup whit your account.</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                @csrf()
                <div class="form-group">
                    <label for="email">* Email</label>
                    <input value="{{ old('email') }}" type="email" name="email" id="semail" class="form-control">
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="spassword" class="form-control">
                    <span class="text-danger">{{ $errors->first('password')}}</span>
                </div>
                <input name="submit" type="submit" value="signin" class="btn btn-primary">
                <span class="text-danger">{{ $signin_error ?? ''}}</span>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>




@endsection