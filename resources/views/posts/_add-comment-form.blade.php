@auth
    <x-panel>
        <form method="POST" action="/posts/{{$posts->slug}}/comments">
            @csrf

            <header class="flex item-center">
                <img src="https://i.pravatar.cc/?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">
                <h2 class="ml-3">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea
                name="body"
                cols="30"
                rows="5"
                class="w-full text-sm focus:outline-none focus:ring p-2"
                placeholder="Quick, thing of something to say!"
                required></textarea>
            </div>

            @error('body')
                <span class="text-xs text-red-500">{{$message}}</span>
            @enderror

            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 pt-6">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or <a href="/login" class="hover:underline">Login to leave a comment</a>
    </p>
@endauth
