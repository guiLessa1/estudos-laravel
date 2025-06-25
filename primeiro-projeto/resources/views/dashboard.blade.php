<x-layout.app>
    <x-container>
        <div class="absolute top-20 left-0 flex flex-col gap-4">
            <x-link :href="route('profile')" outline>Update Profile</x-link>
            <x-link :href="route('links.create')" outline>Create a new Link</x-link>
            <x-link :href="route('logout')" outline>Logout</x-link>
        </div>
        <div class="text-center space-y-4 w-2/3">
            <x-image src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm opacity-80 mb-6">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="flex items-center justify-center gap-2">


                        @unless ($loop->last)
                            <x-form :route="route('links.down', $link)" patch>
                                <x-button ghost>
                                    <x-icons.down class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.down class="w-6 h-6" />
                            </x-button>
                        @endunless
                        @unless ($loop->first)
                            <x-form :route="route('links.up', $link)" patch>
                                <x-button ghost>
                                    <x-icons.up class="w-6 h-6" />
                                </x-button>
                            </x-form>
                        @else
                            <x-button disabled ghost>
                                <x-icons.up class="w-6 h-6" />
                            </x-button>
                        @endunless

                        <x-link href="{{ route('links.edit', $link) }}" wide outline>
                            {{ $link->name }}
                        </x-link>
                        <x-form :route="route('links.destroy', $link)" delete
                            onsubmit="return confirm('Tem certeza que deseja excluir este link?')">
                            <x-button ghost>
                                <x-icons.trash class="w-6 h-6" />
                            </x-button>
                        </x-form>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
