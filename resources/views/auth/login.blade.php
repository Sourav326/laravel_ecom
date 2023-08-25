@extends('layouts.app')
@section('content')

<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-6 pb-4 formMainDiv">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="email">Email</label>
                                    <input class="form-control" id="email" type="email" name="email"
                                        :value="old('email')" required autofocus autocomplete="username">
                                       
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-4">
                                    <label class="text-black" for="lname">Password</label>
                                    <input class="form-control" id="password" type="password" name="password" required
                                        autocomplete="current-password">
                                        
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary-hover-outline"> {{ __('Log in') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection