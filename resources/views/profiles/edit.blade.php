<x-app>
    <div>
        <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="mb-6">
                <label for="name" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Name
                </label>

                <input type="text" name="name" id="name" class="w-full p-2 border border-gray-400" value="{{ $user->name }}" required>

                @error('name')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Username
                </label>

                <input type="text" name="username" id="username" class="w-full p-2 border border-gray-400" value="{{ $user->username }}" required>

                @error('username')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="avatar" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Avatar
                </label>

                <div class="flex">
                    <input type="file" name="avatar" id="avatar" class="w-full p-2 border border-gray-400" value="{{ $user->avatar }}">

                    <img src="{{ $user->avatar }}" alt="Your Avatar" width="40">
                </div>
                @error('avatar')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Email
                </label>

                <input type="text" name="email" id="email" class="w-full p-2 border border-gray-400" value="{{ $user->email }}" required>

                @error('email')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Password
                </label>

                <input type="password" name="password" id="password" class="w-full p-2 border border-gray-400">

                @error('password')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password_confirmation" class="block mb-2 font-bold text-gray-700 uppercase text xs">
                    Password Confirmation
                </label>

                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 border border-gray-400">

                @error('password_confirmation')
                    <p class="mt-2 text-red-500 text-xd">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500" type="submit">Submit</button>

                <a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
            </div>

        </form>
    </div>
</x-app>
