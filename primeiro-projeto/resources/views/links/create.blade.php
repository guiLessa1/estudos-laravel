<x-layout.app>
    <x-container>
        <x-card title="Create a new Link">
            <x-form :route="route('links.create')" post id="create-link-form">
                <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                <x-input name="link" placeholder="Link" value="{{ old('link') }}" />
            </x-form>

            <x-slot:actions>
                <x-link href="{{ route('dashboard') }}">Cancel</x-link>
                <x-button type="submit" form="create-link-form">Create Link</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
