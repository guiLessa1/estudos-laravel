<x-layout.app>
    <x-container>
        <div class="text-center space-y-4">
            <x-image src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm opacity-80">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($links as $link)
                    <li class="flex items-center gap-2">


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



                        <x-link href="{{ route('links.edit', $link) }}" block outline>
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
