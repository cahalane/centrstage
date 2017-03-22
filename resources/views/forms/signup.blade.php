<form class="form" id="signup" method="POST" action="/signup">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">First Name</label>
        <p class="control">
            <input class="input" type="text" name="firstName" placeholder="First" value="{{ old('firstName') }}" required>
        </p>
    </div>

    <div class="field">
        <label class="label">Last Name</label>
        <p class="control">
            <input class="input" type="text" name="lastName" placeholder="Last" value="{{ old('lastName') }}" required>
        </p>
    </div>

    <div class="field">
        <label class="label">Email</label>
        <p class="control is-expanded">
            <input class="input" type="text" name="email" placeholder="your@email.com" value="{{ old('email') }}" required>
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
