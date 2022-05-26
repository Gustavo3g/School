<?php

namespace Database\Seeders;

use App\Models\Responsible;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();

            $responsibles = Responsible::factory(10)->make()->toArray();

            foreach ($responsibles as $responsible) {

                $responsible = Responsible::create($responsible);

                $student = Student::factory()->make()->toArray();

                $responsible->student()->create($student);

            }

            DB::commit();


        } catch (\Exception $e) {
            DB::rollBack();
        }
    }
}
