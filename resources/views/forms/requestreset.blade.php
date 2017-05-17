<form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}

    <div class="field">
        <label class="label">Email</label>
        <p class="control is-expanded">
            <input class="input" type="email" name="email" placeholder="your@email.com" value="{{ old('email') }}" required>
        </p>
    </div>

    <div class="field">
        <p class="control">
            <button class="button is-primary" type="submit">Send Password Rest Link</button>
        </p>
    </div>
</form>