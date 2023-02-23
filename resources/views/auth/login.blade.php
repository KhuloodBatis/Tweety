<x-master>
<div class="container mx-auto flex justify-center">
     <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-3xl  ">

        <div class="font-bold text-lg mb-4 ">{{ __('Login') }}
        </div>

            <form method="POST" action="{{ route('login') }}">
                        @csrf

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
                             autocomplete="current-password">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                        </div>


                        <div class="mb-6">
                            <div>
                             <input
                             class="mr-1"
                             type="checkbox"
                             name="remember"
                             id="remember"
                             {{ old('remember') ? 'checked' : '' }}>

                            <label class="text-xs text-gray-700 font-blod uppercase"
                            for="remember">
                                {{ __('Remember Me') }}
                             </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-400 mr-2">
                                    {{ __('Login') }}
                            </button>
                            <a href="{{ route('register') }}"class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-400 mr-2">
                                {{ __('Register') }}
                            </a>
                                @if (Route::has('password.request'))
                                    <a class="text-xs text-gray-700"
                                    href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                        </div>
         </form>

    </div>
</div>
</x-master>
