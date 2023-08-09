<x-guest-layout>
    <x-authentication-card>
        

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-white">
                {{ session('status') }}
            </div>
        @endif


        <form method="POST" action="{{ route('login') }}" style="opacity:1;">
            @csrf

            <div >
                <x-label class="text-white" for="email" value="{{ __('Email') }}" />
                <x-input id="email" style="border-bottom-width: 2px;
                	border-bottom-color: rgb(238 242 255);
                    background-color: rgb(23 23 23);
                    border-style: double;
                    border-radius:30%;
                    color:#fff"
                  class="-b-4 block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label class="text-white" for="password" value="{{ __('Password') }}" />
                <x-input id="password" 
                    style="border-bottom-width: 2px;
                	border-bottom-color: rgb(238 242 255);
                    background-color: rgb(23 23 23);
                    border-radius:30%;
                    color:#fff"
                 class=" b-4 block mt-1 w-full text-black" type="password" name="password" required autofocus autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" style="border-bottom-width: 2px;
                	border-bottom-color: rgb(238 242 255);
                    background-color: rgb(23 23 23);
                    border-style: double;
                    border-radius:30%;" />
                    <span class="ml-2 text-sm text-white">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-white hover:text-white-400 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4" style="background-image: linear-gradient(to top, #a3bded 0%, #6991c7 100%);">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
        </div>
    </x-authentication-card>
</x-guest-layout>
