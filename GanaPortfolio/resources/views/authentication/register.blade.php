@include('components.header')

@if ($errors->any())
    <div style="color: red;">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf

    <p>Name</p>
    <input type="text" name="name" value="{{ old('name') }}">

    <p>Email</p>
    <input type="email" name="email" value="{{ old('email') }}">

    <p>Password</p>
    <input type="password" name="password">

    <p>Confirm Password</p>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Register</button>
</form>


@include('components.footer')
