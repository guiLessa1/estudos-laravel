<x-layout.app>
    <x-container>
        <x-card title="Profile">
            <x-form :route="route('profile')" put id="profile" enctype="multipart/form-data">
                <div>
                    <x-image src="/storage/{{ $user->photo }}" alt="Profile Picture" />
                    <x-file-input name="photo" />
                </div>
                <hr>
                <x-input name="name" placeholder="Name" value="{{ old('name', $user->name) }}" />
                <x-textarea name="description" value="{{ old('description', $user->description) }}"></x-textarea>
                <x-input name="handler" prefix="biolinks.com.br/" placeholder="@seulink"
                    value="{{ old('handler', $user->handler) }}" />
            </x-form>

            <x-slot:actions>
                <x-link href="{{ route('dashboard') }}">Go Back</x-link>
                <x-button type="submit" form="profile">Save</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
