<x-guest-layout>

<form action="">
        <div class="mt-5">
          <p class="replace_input_label">Sign up as</p>

          <div class="d-flex justify-content-between">
            <div style="display: none">
              <input
                type="radio"
                name="register_account"
                id="register_applicant"
              />
              <label for="replace_applicant">Applicant</label>
            </div>
            <div>
              <input
                type="radio"
                name="register_account"
                id="register_company"
                checked
              />
              <label for="register_company">Company</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm">
            <div class="mt-3">
              <p class="replace_input_label">Enter Location</p>

              <div class="d-flex justify-content-center">
                <input
                  type="text"
                  name=""
                  class="px-5"
                  placeholder="Enter your Location"
                  required
                  id=""
                />
              </div>
            </div>
          </div>
          <div class="col-sm">
            <div class="mt-5">
              <p class="replace_input_label">Enter Companyname</p>

              <div class="d-flex justify-content-center">
                <input
                  type="text"
                  required
                  name=""
                  class="px-5"
                  placeholder="Enter your Companyname"
                  id=""
                />
              </div>
            </div>
          </div>
        </div>

       

        <div class="d-flex justify-content-center mt-4">
          <input id="remember_me" type="checkbox" required /><label
            for="remember_me"
            style="
              font-size: 24px !important;
              color: #757575;
              font-size: 24px;
              font-style: normal;
              font-weight: 700;
              line-height: normal;
            "
            >Ich akzeptiere die <a>AGB</a> und
            <a>Datenschutzerkl&auml;rung.</a></label
          >
        </div>
      </form>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Sign Up') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
