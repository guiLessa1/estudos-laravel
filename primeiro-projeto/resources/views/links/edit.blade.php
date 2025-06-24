<x-layout.app>
    <x-container>
        <x-card title="Editing Link | {{ $link->name }}">
            <x-form :route="route('links.edit', $link)" put id="edit-link-form">
                <x-input name="name" placeholder="Name" value="{{ old('name', $link->name) }}" />
                <x-input name="link" placeholder="Link" value="{{ old('link', $link->link) }}" />
            </x-form>

            <x-slot:actions>
                <x-link href="{{ route('dashboard') }}">Cancel</x-link>
                <x-button type="submit" form="edit-link-form">Save</x-button>
            </x-slot:actions>
        </x-card>
    </x-container>
</x-layout.app>
