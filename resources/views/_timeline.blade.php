<div class="border border-gray-300 rounded-2xl">
    @forelse($tweets as $tweet )
         @include("_tweet")

    @empty

    <p class="p-4">No Tweets yet.</p>
    @endforelse

    {{ $tweets->links()}}

</div>
