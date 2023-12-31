
@extends('layouts.app')
@section('content')

<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 pb-4 formMainDiv">
                    <div class="formHead">Registration</div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="email">Name</label>
                                    <input class="form-control" id="name" type="name" name="name"
                                        :value="old('name')" required autofocus autocomplete="name">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="email">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="lname">Password</label>
                                    <input class="form-control" id="password" type="password" name="password" required
                                        autocomplete="new-password">
                                    <span class="errorMsg">{{ $errors->first('password') }}</span>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="lname">Confirm Password</label>
                                    <input class="form-control" id="password_confirmation" type="password_confirmation" name="password_confirmation" required
                                        autocomplete="new-password">
                                    <span class="errorMsg">{{ $errors->first('password_confirmation') }}</span>

                                </div>
                            </div>
                        </div>
                        <div class="startingFormLink">
                            <a href="{{route('login')}}">{{ __('Already registered?') }}</a>
                            <button type="submit" class="btn btn-primary-hover-outline"> {{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
