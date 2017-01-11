<form class="signupForm" method="POST" action="/signup">
    {{ csrf_field() }}

    <div class="signupForm-textInput">
        <label class="signupForm-textInput-label" for="firstName">First Name:</label>
        <input class="signupForm-textInput-input" type="text" name="firstName" value="{{ old('firstName') }}" validate>
    </div>

    <div class="signupForm-textInput">
        <label class="signupForm-textInput-label" for="lastName">Last Name:</label>
        <input class="signupForm-textInput-input" type="text" name="lastName" value="{{ old('lastName') }}" validate>
    </div>

    <div class="signupForm-textInput">
        <label class="signupForm-textInput-label" for="email">Email:</label>
        <input class="signupForm-textInput-input" type="text" name="email" value="{{ old('email') }}" validate>
    </div>

    <button class="signupForm-button button--primary" type="submit">Sign up</button>

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
