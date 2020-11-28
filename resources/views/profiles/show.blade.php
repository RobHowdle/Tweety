<x-app>
    <header class="relative mb-6">
        <div class="releative">
            <img class="mb-2" src="/images/default-profile-banner.jpg" style="max-height:300px; width:100%; border-radius:20px;" alt="default-banner">
            <img src="{{ $user->avatar }}" alt="" class="absolute bottom-0 mr-2 transform -translate-x-1/2 rounded-full -translate-y-1/3" width="200px" height="200px" style="left:50%;">
        </div>

    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="mb-0 text-2xl font-bold" style="max-width:260px;">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
            @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class="px-4 py-2 text-xs text-black border border-gray-300 rounded-full">Edit Profile</a>
            @endcan
            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
    <p class="text-sm">
        The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
        and white rabbit or hare who is famous for his flippant, insouciant personality.
        He is also characterized by a Brooklyn accent, his portrayal as a trickster,
        and his catch phrase "Eh...What's up, doc?"
    </p>


    </header>

        @include('_timeline', [
            'tweets' => $tweets
        ])

</x-app>
