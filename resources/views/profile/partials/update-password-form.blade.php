<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="row">
            <div class="col-4 mb-4">
                <label class="text-black" for="current_password">Current Password</label>
                <input class="form-control" id="current_password" type="password" password="current_password" required autofocus autocomplete="current-password">
                <span class="errorMsg">{{ $errors->updatePassword->first('current_password') }}</span>
            </div>

            <div class="col-4 mb-4"> 
                <label class="text-black" for="password">New Password</label>
                <input class="form-control" id="password" type="password" name="password" required autofocus autocomplete="new-password">
                <span class="errorMsg">{{ $errors->updatePassword->first('password') }}</span>
            </div>
            <div class="col-4 mb-4"> 
                <label class="text-black" for="password_confirmation">Confirm Password</label>
                <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autofocus autocomplete="new-password">
                <span class="errorMsg">{{ $errors->updatePassword->first('password_confirmation') }}</span>
            </div>
        </diV>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <span class="text-success pl-4">Password Update successfully</span>
            @endif
        </div>
    </form>
</section>
