<x-app>
        <header class="mb-5 relative">
            <img src="/images/mylook.jpg"  alt="" class=" rounded-xl mb-2">

            <div class="flex justify-between items-center mb-5">
                <div>
                  <h2 class="font-blod text-2xl ">{{$user->name}}</h2>
                  <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>

                <div>
                    <a href="" class="bg-white rounded-full border border-shadow py-2 px-2 text-black text-sm mr-2">Edit Profile</a>
                    <a href="" class="bg-blue-500 rounded-full border border-shadow py-2 px-2 text-white text-sm">Follow Me</a>
                </div>
            </div>

            <p class="text-sm">
                I finish my degree in Bachelor of Science in Information Technology and Computing as an IT Software Developer for Back-End and Front-End activities, Mobile interface development with all requirements based on the required documentation of the project, and Good experience in building RESTful APIs and handing integration with internal or external API activities, handling the activities between application interface with databases and make sure the steps, building relationships between models, development, and correcting the issue, rebuilding interfaces,

            </p>
            <img
            src="{{$user->avatar}}"
            alt=""
            class="rounded-full mr-2 absolute "
            style="
            top: 148px;
            width: 150px;
            left: calc(50% - 75px);"
            >
        </header>

        @include('_timeline',[
            'tweets'=>$user->tweets
        ])
</x-app>
