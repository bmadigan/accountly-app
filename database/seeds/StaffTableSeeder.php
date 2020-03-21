<?php

use App\Models\Staff;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a test staff account for me
        $me = factory(Staff::class)->create([
            'name' => 'Brad Wessa',
            'email' => 'bradmadigan@gmail.com'
        ]);
    }
}
