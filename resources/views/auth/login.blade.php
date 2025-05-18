@extends('auth.auth')

@section('auth-content')
<div id="login" class="p-5">
    <h1 class="title has-text-centered">Welcome Back!</h1>
    <form>
        <div class="field">
            <label class="label has-text-grey-darker">Username or Email</label>
            <div class="control has-icons-left">
                <input class="input" type="text" placeholder="e.g. johndoe or john@example.com" required>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
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
        </div>

        <div class="field">
            <label class="checkbox has-text-grey-darker">
                <input type="checkbox">
                Remember me
            </label>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-primary is-fullwidth has-text-white">Login</button>
            </div>
        </div>

        <div class="is-flex is-justify-content-space-between mt-5">
            <a href="{{ route('get.register') }}" class="is-size-6">Don't have an account?</a>
            <!-- <a class="is-size-6">Forgot password?</a> -->
        </div>
    </form>
</div>
@stop