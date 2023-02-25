<div class="border border-blue-400 rounded-2xl px-8 py-6 mb-8 ">
    <form method="POST" action="/tweets">
        @csrf
        <textarea
        name="body"
      class="w-full"
      required
      placeholder="What's up doc?"
      autofocus
      >
    </textarea>

       <hr class="m-4">
        <footer class="flex justify-between">
            <img
            src="{{current_user()->avatar}}"
            alt="your avatar"
            class="rounded-full mr-2"
            width="50"
            height="50"
            >
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-10 text-white">
                Tweet
            </button>
        </footer>
    </form>

    @error('body')
        <p class="text-red-600  text-sm mt-2" >{{$message}}</p>
    @enderror
</div>
