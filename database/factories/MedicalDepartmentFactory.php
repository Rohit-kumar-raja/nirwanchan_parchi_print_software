<?php

namespace Database\Factories;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\MedicalDepartment;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalDepartment>
 */
class MedicalDepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       return [
            //
            'clienic_id'=> $this->faker->numberBetween(1, 11),
            'doctor_id' => $this->faker->numberBetween(1, 11),
            'city_id'=> $this->faker->numberBetween(1, 11),
            'medical_department_typd_id'	=> $this->faker->numberBetween(1, 11),
            'name' =>$this->faker->name,
            'address'=>$this->faker->address,
            'pincode' =>$this->faker->numberBetween(1, 6),
            'mobile'=>$this->faker->numberBetween(1, 10),
            'email'=>$this->faker->unique()->safeEmail,
            'doc'=> $this->faker->numberBetween(1, 10),
            'telephone' => $this->faker->numberBetween(1, 10),
            'description'=>$this->faker->paragraph,
            'keywords' =>'exxy',
            'status' =>'active',
            'created_by' => $this->faker->numberBetween(1, 11),
        ];
    }
}
