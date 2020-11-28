<div class="px-8 py-6 mb-8 border border-blue-400 rounded-lg">
    <form action="/tweets" method="POST">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's up doc?" required> </textarea>

        <hr class="my-4">

        <footer class="flex items-center justify-between">
            <img src="{{ current_user()->avatar }}" alt="" class="rounded-full" width="40" height="40">
            <x-button></x-button>
        </footer>
    </form>
    @error('body')
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
<div>

</div>
