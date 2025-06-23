<div>
    <h1>Register</h1>

    @if($message = session()->get('message'))
    <div >{{ $message }}</div>
    @endif

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <input type="text" name="name" placeholder="Name">
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <div>
            <input type="email" name="email" placeholder="Email">
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <div>
            <input type="email" name="email_confirmation" placeholder="Email Confirmation">
        </div>

        <br>
        <div>
            <input type="password" name="password" placeholder="Password">
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <br>
        <button>Logar</button>

    </form>
</div>