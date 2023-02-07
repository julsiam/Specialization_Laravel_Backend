<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Birth>
 */
class BirthFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sex' => 'male',
            'fname' => 'Juls',
            'mname' => 'n/a',
            'lname' => 'Estorco',
            'birthdate' => 2002-03-16,
            'birthplace' => 'Cebu City',
            'idtype'=>'National Identification',
            'ffname'=>'Julecenio',
            'fmname' => 'Delo Santos',
            'flname' => 'Angana',
            'mfname' => 'Amparo',
            'mmname'=>'Casipong',
            'mlname' => 'Estorco',
            'latereg' => 'No',
            'purpose' => 'Education',
            'phone' => 9554800304,
            'status'=> 'Pending'
        ];
    }
}
