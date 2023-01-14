<x-master>
    <section class="px-8">
        <main class="container mx-auto" >
            <div class="md:flex md:justify-between">
                <div class="md:w-32">
                    @include('_sidebar-links')
                </div>
                <div class="md:flex-1 md:mx-10" style="max-width: 700px">

                  {{$slot}}


                </div>
                <div class="md:w-1/6 bg-blue-100 rounded-2xl p-4 h-full">
                    @include('_friends-list')
                </div>

               </div>
        </main>
    </section>
</x-master>
