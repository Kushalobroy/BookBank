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
            'usertype'=>['string'],
            'regno'=>['string','unique:users'],
            'year'=>['numeric'],
            'branch'=>['string'],
            'm_number'=>['numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'p_photo'=>['nullable', 'max:1024'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        
        return User::create([
            'name' => $input['name'],
            'regno' => $input['regno'],
            'year' => $input['year'],
            'branch'=>$input['branch'],
            'm_number' => $input['m_number'],
            'email' => $input['email'],
            
            'p_photo' => $input['p_photo'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
