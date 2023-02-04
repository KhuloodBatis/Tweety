<h3 class="font-bold text-xl mb-4 ">Friends</h3>
<ul>
    @forelse (current_user()->follows as $user )

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
        @empty
        <p class="p-4">No Freind yet.</p>

    @endforelse
</ul>
