@unless (current_user()->is($user))
<form
   action="{{$user->name}}/follow" method="POST">
    @csrf
    <button type="submit" class="bg-blue-500 rounded-full border border-shadow py-2 px-2 text-white text-sm">{{current_user()->following($user)? 'Unfollow Me' :'Follow Me'}}</button>
</form>

@endunless

