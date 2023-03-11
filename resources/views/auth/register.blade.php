<x-master>
<div class="container mx-auto flex justify-center">
    <div class="px-14 py-8  bg-gray-200 border border-gray-300 rounded-3xl">

        <div class="font-bold text-lg mb-4 ">{{ __('Register') }}</div>

          <form method="POST" action="{{ route('register') }}">
                        @csrf


                    <div class="mb-6">
                            <label
                            for="username"
                            class="block mb-2 uppercase  font-bold text-xs text-gray-700">
                            {{__('Username')}}
                        </label>

                            <input
                            id="username"
                            type="text"
                            class="border border-gray-400  p-2  w-full"
                            name="username"
                            value="{{ old('username') }}"
                            required
                            autocomplete="username">

                                @error('username')
                                    <p class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror

                    </div >

                        <div class="mb-6">
                            <label
                            for="name"
                            class="block mb-2 uppercase  font-bold text-xs text-gray-700">
                            {{ __('Name') }}
                            </label>

                            <div >
                                <input
                                id="name"
                                type="text"
                                class= "border mb-2 border-gray-400 p-2 w-full "
                                name="name"
                                value="{{ old('name') }}"
                                required
                                autocomplete="name">

                                @error('name')
                                    <p class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="email"
                                 class="block mb-2 uppercase  font-bold text-xs text-gray-700">

                            {{ __('Email Address') }}
                            </label>
                            <input
                            id="email"
                            type="text"
                            class="border border-gray-400 p-2 w-full"
                            name="email"
                            autocomplete="email"
                            value="{{ old('email') }}"
                            required
                            >
                              @error('email')
                                  <p class="text-red-500 text-xs mt-2" >
                                        <strong>{{ $message }}</strong>
                                  </p>
                              @enderror
                        </div>

                        <div class="mb-6">
                            <label
                            for="password"
                            class="block mb-2 uppercase  font-bold text-xs text-gray-700">
                            {{ __('Password') }}
                            </label>

                             <input
                             id="password"
                             type="password"
                             class= "border border-gray-400 p-2 w-full"
                             name="password"
                             required
                             autocomplete="new-password">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                        </div>
                        <div class="mb-6">
                            <label
                            for=""
                            class="block mb-2 uppercase  font-bold text-xs text-gray-700">
                            {{ __('Confirm Password') }}
                            </label>

                             <input
                             id="password-confirm"
                             type="password"
                             class= "border border-gray-400 p-2 w-full"
                             name="password_confirmation"
                             required
                             autocomplete="new-password">
                                @error('password-confirm')
                                    <p class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                        </div>

                            <div class="flex ">
                                <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-400 mr-2">
                                    {{ __('Register') }}
                                </button>
                                <a href="{{route('login')}}"
                                class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-400 mr-2">
                                    {{ __('Login') }}
                            </a>
                            </div>

             </form>

          </div>

</div>
</x-master>
