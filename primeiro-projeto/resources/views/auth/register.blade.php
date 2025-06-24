<x-layout.app>
    <x-container>
        <x-card title="Register">
            <x-form :route="route('register')" post id="register-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="email" placeholder="Email" value="{{ old('email') }}" />
                <x-input name="email_confirmation" placeholder="Email Confirmation"
                    value="{{ old('email_confirmation') }}" />
                <x-input name="password" type="password" placeholder="Password" value="{{ old('password') }}" />
            </x-form>

            <x-slot:actions>
                <x-button type="submit" form="register-form">Register</x-button>
                <x-link href="{{ route('login') }}">Alredy have an account?</x-link>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
