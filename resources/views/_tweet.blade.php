<div class="flex p-4 {{$loop->last? '':'border-b border-b-gray-400'}} ">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ $tweet->user->path()}}">

            <img
            src="{{$tweet->user->avatar}}"
            alt=""
            class="rounded-full mr-2"
            width="50"
            height="50"
            >
        </div>
        <div>
            <h5 class="font-bold mb-4">{{$tweet->user->name}}</h5>

        </a>
        <p class="text-sm mb-3">{{$tweet->body}}</p>

                {{--like and dislike--}}
       <x-tweet-buttons :tweet="$tweet"/>
    </div>
</div>
