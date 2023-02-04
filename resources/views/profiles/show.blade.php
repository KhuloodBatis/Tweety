<x-app>
        <header class="mb-5 relative">
            <div class="relative">

                <img src="/images/mylook.jpg"  alt="" class=" rounded-xl mb-2">
                <img
                src="{{$user->avatar}}"
                alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2 ml-52 lg:ml-80 w-[100px] lg:w-[150px]"
                >

            </div>
            <div class="flex justify-between items-center mb-6">
                <div>
                  <h2 class="font-bold text-2xl ">{{$user->name}}</h2>
                  <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div class="flex">
                        @if(current_user()->is($user))
                        <a href="{{$user->path('edit')}}" class="bg-white rounded-full border border-shadow py-2 px-2 text-black text-sm mr-2">Edit Profile</a>

                        @endif
                        <x-follow-button :user="$user"></x-follow-button>

                    </div>
            </div>

            <p class="text-sm">
                I finish my degree in Bachelor of Science in Information Technology and Computing as an IT Software Developer for Back-End and Front-End activities, Mobile interface development with all requirements based on the required documentation of the project, and Good experience in building RESTful APIs and handing integration with internal or external API activities, handling the activities between application interface with databases and make sure the steps, building relationships between models, development, and correcting the issue, rebuilding interfaces,

            </p>

        </header>

        @include('_timeline',[
            'tweets'=>$user->tweets
        ])
</x-app>
