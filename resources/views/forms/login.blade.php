<form class="form" id="signup" method="POST" action="/login">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Email</label>
        <p class="control is-expanded">
            <input class="input" type="email" name="email" placeholder="your@email.com" value="{{ old('email') }}" required>
        </p>
    </div>

    <div class="field">
        <label class="label">Password</label>
        <p class="control is-expanded">
            <input class="input" type="password" name="password" placeholder="••••••••" required>
        </p>
    </div>

    <div class="field">
        <p class="control">
            <button class="button is-primary" type="submit">Log In</button>
            <a class="button" href="{{ route('password.request') }}"> Forgot Your Password? </a>
        </p>
    </div>

    <div class="field">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
    </div>


    <div class="signupForm-errors">
        @if (count($errors))
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

</form>
