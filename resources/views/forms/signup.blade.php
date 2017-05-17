<form class="form" id="signup" method="POST" action="/register">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Name</label>
        <p class="control">
            <input class="input" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
        </p>
    </div>

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
        <label class="label">Confirm Password</label>
        <p class="control is-expanded">
            <input class="input" type="password" name="password_confirmation" placeholder="••••••••" required>
        </p>
    </div>

    <div class="field">
        <p class="control">
            <button class="button is-primary" type="submit">Sign Up</button>
        </p>
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
