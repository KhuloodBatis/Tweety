<div class="flex">

    <form method="POST" action="/tweets/{{$tweet->id}}/like">
        @csrf
        {{--like--}}
        <div class="flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
        <svg  viewBox="0 0 20 20" class=" mr-1 w-5" >
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g class='fill-current'>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9 4.5C15.9 3 14.418 2 13.26 2c-.806 0-.869.612-.993 1.82-.055.53-.121 1.174-.267 1.93-.386 2.002-1.72 4.56-2.996 5.325V17C9 19.25 9.75 20 13 20h3.773c2.176 0 2.703-1.433 2.899-1.964l.013-.036c.114-.306.358-.547.638-.82.31-.306.664-.653.927-1.18.311-.623.27-1.177.233-1.67-.023-.299-.044-.575.017-.83.064-.27.146-.475.225-.671.143-.356.275-.686.275-1.329 0-1.5-.748-2.498-2.315-2.498H15.5S15.9 6 15.9 4.5zM5.5 10A1.5 1.5 0 0 0 4 11.5v7a1.5 1.5 0 0 0 3 0v-7A1.5 1.5 0 0 0 5.5 10z"  />
            </g>
        </g>
        </svg>
        <button type="submit" class=" text-lg  ">
            {{$tweet->likes->where('liked',1)->count()  ?: 0}}</button>
        </div>

    </form>

        <form method="POST" action="/tweets/{{$tweet->id}}/like">
            @csrf
            @method('DELETE')
                    {{--dislike--}}
                    <div class="flex items-center mr-4 {{ $tweet->isDisLikedBy(current_user()) ? 'text-blue-500' : 'text-gray-500' }}">
                        <svg  viewBox="0 0 20 20" class="   mr-1 w-5" >
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class='fill-current'>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.1 20.5c0 1.5 1.482 2.5 2.64 2.5.806 0 .869-.613.993-1.82.055-.53.121-1.174.267-1.93.386-2.002 1.72-4.56 2.996-5.325V8C15 5.75 14.25 5 11 5H7.227C5.051 5 4.524 6.432 4.328 6.964A15.85 15.85 0 0 1 4.315 7c-.114.306-.358.546-.638.82-.31.306-.664.653-.927 1.18-.311.623-.27 1.177-.233 1.67.023.299.044.575-.017.83-.064.27-.146.475-.225.671-.143.356-.275.686-.275 1.329 0 1.5.748 2.498 2.315 2.498H8.5S8.1 19 8.1 20.5zM18.5 15a1.5 1.5 0 0 0 1.5-1.5v-7a1.5 1.5 0 0 0-3 0v7a1.5 1.5 0 0 0 1.5 1.5z" />
                            </g>
                        </g>
                        </svg>
                            <button type="submit" class=" text-lg  ">
                                {{$tweet->likes->where('liked',0)->count() ? :0}}</button>
                        </div>

        </form>
           {{--edit--}}
           <div class="flex items-center mr-4">
            <svg class="text-gray-500 mr-1 hover:text-gray-700 w-5"
            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g class='fill-current'>
                <path fill-rule="evenodd" clip-rule="evenodd" d="m3.99 16.854-1.314 3.504a.75.75 0 0 0 .966.965l3.503-1.314a3 3 0 0 0 1.068-.687L18.36 9.175s-.354-1.061-1.414-2.122c-1.06-1.06-2.122-1.414-2.122-1.414L4.677 15.786a3 3 0 0 0-.687 1.068zm12.249-12.63 1.383-1.383c.248-.248.579-.406.925-.348.487.08 1.232.322 1.934 1.025.703.703.945 1.447 1.025 1.934.058.346-.1.677-.348.925L19.774 7.76s-.353-1.06-1.414-2.12c-1.06-1.062-2.121-1.415-2.121-1.415z" />
            </g>
        </g>
        </svg>
           </div>

            {{--delete--}}
            <div class="flex items-center mr-4">
                <svg class="text-gray-500 mr-1 w-5  hover:text-gray-700" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g class='fill-current'>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.663 1.5h-1.326c-1.069 0-1.49.09-1.921.27-.432.181-.792.453-1.084.82-.292.365-.493.746-.784 1.774L7.368 5H5a1 1 0 0 0 0 2h.563l.703 11.25c.082 1.32.123 1.98.407 2.481a2.5 2.5 0 0 0 1.083 1.017C8.273 22 8.935 22 10.258 22h3.484c1.323 0 1.985 0 2.502-.252a2.5 2.5 0 0 0 1.083-1.017c.284-.5.325-1.16.407-2.482L18.437 7H19a1 1 0 1 0 0-2h-2.367l-.18-.636c-.292-1.028-.493-1.409-.785-1.775a2.694 2.694 0 0 0-1.084-.819c-.431-.18-.852-.27-1.92-.27zm1.89 3.5-.025-.09c-.203-.717-.29-.905-.424-1.074a.696.696 0 0 0-.292-.221c-.2-.084-.404-.115-1.149-.115h-1.326c-.745 0-.95.031-1.149.115a.696.696 0 0 0-.292.221c-.135.169-.221.357-.424 1.074L9.446 5h5.108zM9.61 8.506a.75.75 0 0 0-.724.776l.297 8.495a.75.75 0 0 0 1.499-.053l-.297-8.494a.75.75 0 0 0-.775-.724zm4.008.724a.75.75 0 0 1 1.499.052l-.297 8.495a.75.75 0 0 1-1.499-.053l.297-8.494z" />
                </g>
            </g>
                </svg>

        </div>
</div>






