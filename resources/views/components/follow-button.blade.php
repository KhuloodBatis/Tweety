@unless (current_user()->is($user))
<form
   action="{{route('follow', $user->username)}}" method="POST">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full border border-shadow py-1 px-1 md:py-2 md:px-2 text-white text-xs md:text-sm">{{current_user()->following($user)? 'Unfollow Me' :'Follow Me'}}</button>
</form>

@endunless

