@extends('auth.auth')

@section('auth-content')
<div id="register" class="p-5">
    <h1 class="title has-text-centered">Create Account</h1>
    <form>
        <div class="field">
            <label class="label has-text-grey-darker">Full Name</label>
            <div class="control has-icons-left">
                <input class="input" type="text" placeholder="e.g. John Doe" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label has-text-grey-darker">Username</label>
            <div class="control has-icons-left">
                <input class="input" type="text" placeholder="e.g. johndoe" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-at"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label has-text-grey-darker">Email</label>
            <div class="control has-icons-left">
                <input class="input" type="email" placeholder="e.g. john@example.com" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <label class="label has-text-grey-darker">Password</label>
            <div class="control has-icons-left">
                <input class="input" type="password" placeholder="********" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
            <p class="help is-info">Password must be at least 8 characters</p>
        </div>

        <div class="field">
            <label class="label has-text-grey-darker">Confirm Password</label>
            <div class="control has-icons-left">
                <input class="input" type="password" placeholder="********" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary is-fullwidth has-text-white">Register</button>
            </div>
        </div>

        <div class="is-flex is-justify-content-space-between mt-5">
            <a href="{{ route('get.login') }}" class="is-size-6">Already have an account?</a>
            <!-- <a class="is-size-6">Forgot password?</a> -->
        </div>
    </form>
</div>
@stop