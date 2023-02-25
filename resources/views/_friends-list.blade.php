<div class="md:w-1/7  bg-blue-100 border border-blue-200 rounded-2xl sm:mt-5 md:mt-0 sm:mb-5 md:mb-0 p-4 h-full">

<h3 class=" font-bold text-xl mb-4 ">Friends</h3>
<ul>
    @forelse (current_user()->follows as $user )

            <li class="{{$loop->last ? '': 'mb-4'}} flex flex-wrap">
                    <a href="{{route('profile', $user)}}" class="  flex items-center text-xs  lg:text-sm">
                    <img
                    src={{$user->avatar}}
                    alt=""
                    class="rounded-full mr-2"
                    width="40"
                    height="40"
                    class=" md:w-2 ">
                   <h1 style="max-width:100px"> {{$user->name }}</h1>
                    </a>
            </li>
        @empty
        <p class="p-4">No Freind yet.</p>

    @endforelse
</ul>
</div>
