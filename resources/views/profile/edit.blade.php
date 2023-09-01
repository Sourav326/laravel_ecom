@extends('layouts.app')
@section('content')

<div class="untree_co-section">
    <div class="container">
        <div class="block">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 pb-4 mb-5 formMainDiv">
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div class="col-md-12 col-lg-12 pb-4 mb-5 formMainDiv">
                    @include('profile.partials.update-password-form')
                </div>
                <div class="col-md-12 col-lg-12 pb-4 mb-5 formMainDiv">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

