<?php

namespace App\Actions\Fortify;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return User|int|string
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'type' => ['required','boolean'],
            'identity'=>['required','string','max:20','unique:members'],
            'phone'=>['required','string','max:20'],
            'address'=>['required','string','max:30'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $usc=User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'type'=>$input['type'],
        ]);
        $usnum=DB::table('users')->count();
        if($usnum<=0){
            $idmax=0;
        }else{
            $usnumid=DB::table('users')->max('id');
            $idmax=$usnumid;
        }
        //$idmax=$idmax+1;
        Member::create([
            'user_id'=>$idmax,
            'identity' => $input['identity'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'status'=>'使用中',
        ]);
        return $usc;
    }
}
