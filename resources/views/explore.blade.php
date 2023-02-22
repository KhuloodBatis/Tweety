<x-app>
    <div>

        @foreach ($users as $user)
       <a href="{{$user->path()}}" >
        <div class="flex flex-wrap items-center">
              <img
                src="{{$user->avatar}}"
                alt="{{$user->username}}'s avatar"
                width="60"
                class=" rounded-xl mb-4 mr-2 ">


                <h4 class="font-bold ">{{'@'.$user->username }}</h4>
             </div>
            </a>
        @endforeach

        {{$users->links()}}
    </div>
</x-app>
