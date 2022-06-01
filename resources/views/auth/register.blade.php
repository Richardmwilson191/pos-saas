<x-guest-layout>
    <x-slot name="logo">
        <a href="/">
            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
    </x-slot>

    <!-- Validation Errors -->
    <x-auth-validation-errors :errors="$errors" />
    <div class="font-sans">
      <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-transparent ">
          <div class="relative sm:max-w-sm w-full">
              <div class="card bg-gray-700 shadow-lg w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
              <div class="card bg-blue-500 shadow-lg w-full h-full rounded-3xl absolute  transform rotate-6"></div>
              <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                  <label for="" class="block mt-3 mb-6 text-xl text-gray-700 text-center font-semibold">
                      Register
                  </label>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div class="mt-7">
            <x-input id="Full_name" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="text" name="username" placeholder="Full Name" :value="old('username')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-7">
            <x-input id="email" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="email" name="email" placeholder="Email" :value="old('email')" required />
        </div>

         {{-- <!-- Address -->
         <div class="mt-7">
            <x-input id="address" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="text" name="address" placeholder="Address" :value="old('address')" required />
        </div class="mt-7"> --}}

          {{-- <!-- Phone -->
          <div class="mt-7">
            <x-input id="phone" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="number" name="phone" placeholder="Phone Number" :value="old('name')" required />
        </div> --}}

          {{-- <!-- Id -->
          <div class="mt-7">
            <x-input id="id_image" class="mt-1 p-2 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="file" accept="image/*" name="id_image" required />
        </div> --}}

          {{-- <!-- Id -->
          <div class="mt-7">
            <x-input id="check_box" class="block mt-1" type="checkbox" accept="" name="check_box"/>
            <x-label for="check_box" :value="__('Associate')" />
        </div> --}}

        <!-- Password -->
        <div class="mt-7">
            <x-input id="password" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="password" name="password" placeholder="Password" required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-7">
            <x-input id="password_confirmation" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" type="password" name="password_confirmation" placeholder="Confirm Password" required />
        </div>

            <x-button class="mt-7 bg-blue-500 w-full py-3 justify-center rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                {{ __('Register') }}
            </x-button>

        <div class="mt-7">
          <div class="flex justify-center items-center">
            <a class=" underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
              {{ __('Already registered?') }}
            </a>
          </div>
        </div>
    </form>
  </div>
</div>
</div>
</div>
</x-guest-layout>
