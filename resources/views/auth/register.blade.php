<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- START ADDITIONALS -->
            <div>
                <x-jet-label for="contactLastName" value="{{ __('contactLastName') }}" />
                <x-jet-input id="contactLastName" class="block mt-1 w-full" type="text" name="contactLastName" :value="old('contactLastName')" required autofocus autocomplete="contactLastName" />
            </div>
            
            <div>
                <x-jet-label for="contactFirstName" value="{{ __('contactFirstName') }}" />
                <x-jet-input id="contactFirstName" class="block mt-1 w-full" type="text" name="contactFirstName" :value="old('contactFirstName')" required autofocus autocomplete="contactFirstName" />
            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div>
                <x-jet-label for="addressLine1" value="{{ __('addressLine1') }}" />
                <x-jet-input id="addressLine1" class="block mt-1 w-full" type="text" name="addressLine1" :value="old('addressLine1')" required autofocus autocomplete="addressLine1" />
            </div>

            <div>
                <x-jet-label for="addressLine2" value="{{ __('addressLine2') }}" />
                <x-jet-input id="addressLine2" class="block mt-1 w-full" type="text" name="addressLine2" :value="old('addressLine2')" required autofocus autocomplete="addressLine2" />
            </div>

            <div>
                <x-jet-label for="city" value="{{ __('city') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required autofocus autocomplete="city" />
            </div>

            <div>
                <x-jet-label for="state" value="{{ __('state') }}" />
                <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required autofocus autocomplete="state" />
            </div>

            <div>
                <x-jet-label for="postalCode" value="{{ __('postalCode') }}" />
                <x-jet-input id="postalCode" class="block mt-1 w-full" type="text" name="postalCode" :value="old('postalCode')" required autofocus autocomplete="postalCode" />
            </div>

            <div>
                <x-jet-label for="country" value="{{ __('country') }}" />
                <x-jet-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required autofocus autocomplete="country" />
            </div>

            <div>
                <x-jet-label for="salesRepEmployeeNumber" value="{{ __('salesRepEmployeeNumber') }}" />
                <x-jet-input id="salesRepEmployeeNumber" class="block mt-1 w-full" type="text" name="salesRepEmployeeNumber" :value="old('salesRepEmployeeNumber')" required autofocus autocomplete="salesRepEmployeeNumber" />
            </div>

            <div>
                <x-jet-label for="creditLimit" value="{{ __('creditLimit') }}" />
                <x-jet-input id="creditLimit" class="block mt-1 w-full" type="text" name="creditLimit" :value="old('creditLimit')" required autofocus autocomplete="creditLimit" />
            </div>



            <!-- END ADDITIONALS -->

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
