<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="flex-shrink-0 mr-2">
        <a href="{{ $tweet->user->path() }}">
            <img src="{{ $tweet->user->avatar }}" alt="" class="mr-2 rounded-full p" width="40" height="40">
        </a>
    </div>

    <div>
        <a href="{{ $tweet->user->path() }}">
            <h5 class="mb-4 font-bold">{{ $tweet->user->name }}</h5>
            <p class="mb-3 text-sm">
                {{ $tweet->body }}
            </p>
        </a>
        <x-like-buttons :tweet="$tweet"></x-like-buttons>
    </div>
</div>
