<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="font-sans">
      <div class="relative h-90 min-h-screen flex flex-col sm:justify-center items-center bg-opacity-50 ">
          <div class="relative sm:max-w-sm w-full">
              <div class="card bg-gray-700 shadow-lg w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
              <div class="card bg-blue-500 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
              <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                  <label for="" class="block mt-3 text-xl text-gray-700 text-center font-semibold mb-6">
                      Login
                  </label>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input id="email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input id="password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
        </div>

            <div class="mt-6 flex items-center justify-between">
              
                    <a href="#" class="w-1/2 block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-1 border border-gray-300">
                        
                    <div class="flex space-x-2 py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" viewBox="0 0 24 24" width="24px" height="24px">
                        <path d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.6,5,2.5,9.3,6.9,10.7v-2.3c0,0-0.4,0.1-0.9,0.1c-1.4,0-2-1.2-2.1-1.9 c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1c0.4,0,0.7-0.1,0.9-0.2 c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6c0,0,1.4,0,2.8,1.3 C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4c0.7,0.8,1.2,1.8,1.2,3 c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v3.3c4.1-1.3,7-5.1,7-9.5C22,6.1,16.9,1.4,10.9,2.1z"/></svg>
                    <span>GitHub</span>
                    </div>
                </a>
                    <a href="#"
                    class="w-1/2 block bg-white hover:bg-gray-100 focus:bg-gray-100 text-gray-900 font-semibold rounded-lg px-2 border border-gray-300">
                <div class="flex space-x-2 py-4">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         class="w-6 h-6" viewBox="0 0 48 48">
                        <defs>
                            <path id="a"
                                  d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                        </defs>
                        <clipPath id="b">
                            <use xlink:href="#a" overflow="visible"/>
                        </clipPath>
                        <path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/>
                        <path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                        <path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                        <path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                    </svg>
                    <span class="">Google</span>
                </div>
            </a>
            </div>

            <!-- Remember Me -->
        <div class="mt-7 flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

            <x-button class="mt-7 bg-blue-500 w-full p-8 rounded-xl text-white justify-center shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                {{ __('Log in') }}
            </x-button>
            <div class="mt-7 w-full text-right">
              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                  Already have an account?
              </a>
        </div>
    </form>
  </div>
</div>
</div>
</div>
</x-guest-layout>
