<ul>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="{{route('home')}}" >Home</a>
    </li>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="{{route('explore')}}">Explore</a>
    </li>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="#">Notifications</a>
    </li>
    <li>
        <a
        class="font-bold text-lg mb-4 block"
        href="#">Messages</a>
    </li>
    <li><a
        class="font-bold text-lg mb-4 block"
        href="#">Bookmarks</a>
    </li>

</li>
<li><a class="font-bold text-lg mb-4 block" href="{{route('profile', auth()->user())}}">Profile</a>
</li>


</li>
<li>
    <a class="font-bold text-lg mb-4 block" href="{{route('logout')}}">
        <div class="flex items-center ">
        <img src="/images/icons8-logout-rounded-64.png"  alt="" class="w-6 translate-y-0 mr-1"> Logout
    </div>
    </a>


</li>
</ul>


