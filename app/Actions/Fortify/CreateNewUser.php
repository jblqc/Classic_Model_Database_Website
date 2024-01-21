<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'salesRepEmployeeNumber' => ['required', 'integer', 'max:5000'],
            'creditLimit' => ['required', 'integer'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],

            'contactLastName' => $input['contactLastName'],
            'contactFirstName' => $input['contactFirstName'],
            'phone' => $input['phone'],
            'addressLine1' => $input['addressLine1'],
            'addressLine2' => $input['addressLine2'],
            'city' => $input['city'],
            'state' => $input['state'],
            'postalCode' => $input['postalCode'],
            'country' => $input['country'],
            'salesRepEmployeeNumber' => $input['salesRepEmployeeNumber'],
            'creditLimit' => $input['creditLimit'],

            'password' => Hash::make($input['password']),
        ]);
    }
}
