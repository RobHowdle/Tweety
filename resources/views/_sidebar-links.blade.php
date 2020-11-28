<ul>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/tweets">Home</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/explore">Explore</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">Notifications</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">Messages</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">Bookmarks</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="/">Lists</a>
    </li>
    <li>
        <a class="block mb-4 text-lg font-bold" href="{{ route('profile', current_user()) }}">Profile</a>
    </li>
    <li>
        <form method="POST" action="/logout">
            @csrf

            <button class="block mb-4 text-lg font-bold">Logout</button>
        </form>
    </li>
</ul>
