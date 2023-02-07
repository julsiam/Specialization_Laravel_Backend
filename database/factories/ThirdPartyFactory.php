<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ThirdParty>
 */
class ThirdPartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'companyname' => 'shbchdbc',
            'companyemail' => 'jcbdhbcdj@gmxjbd',
            'companyaddress' => 'sdjsbdj',
            'companyurl'=> 'hdchdbchd.github.io',
            'password' => 'password',
            'accountstatus'=>'InActive'
        ];
    }
}
