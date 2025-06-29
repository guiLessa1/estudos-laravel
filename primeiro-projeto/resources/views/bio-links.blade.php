<x-layout.app>
    <x-container>
        <div class="text-center space-y-4 w-2/3">
            <x-image src="/storage/{{ $user->photo }}" alt="Profile Picture" />
            <div class="font-bold text-2xl tracking-wider">{{ $user->name }}</div>
            <div class="text-sm opacity-80 mb-6">{{ $user->description }}</div>

            <ul class="space-y-2">
                @foreach ($user->links as $link)
                    <li class="flex items-center justify-center gap-2">
                        <x-link href="{{ $link->link }}" wide outline target="_blank">
                            {{ $link->name }}
                        </x-link>
                    </li>
                @endforeach
            </ul>
        </div>
    </x-container>
</x-layout.app>
