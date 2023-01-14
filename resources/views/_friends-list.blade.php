<h3 class="font-blod text-xl mb-4 ">Friends</h3>
<ul>
    @foreach (auth()->user()->follows as $user )

    <li class="mb-4">

            <a href="{{route('profile', $user)}}" class="flex items-center text-sm">
            <img
            src={{$user->avatar}}
            alt=""
            class="rounded-full mr-2"
            width="50"
            height="50"
            >
            {{$user->name }}
            </a>


    </li>
    @endforeach
</ul>
