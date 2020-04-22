<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Jhalak Javiya',
                'email' => 'jhalakjaviya@gamil.com',
                'password'	=> bcrypt('zncjK9Qax3CMFVtt'),
                'status' => 'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kapeel Patel',
                'email' => 'matrixmob@gamil.com',
                'password' => bcrypt('KzCL3cgU8p78Kvxz'),
                'status' => 'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Kaushal Ziba',
                'email' => 'kaushal.z@matrixmob.com',
                'password' => bcrypt('sqATfj95UpvKZDXZ'),
                'status' => 'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Harsh Bhut',
                'email' => 'harsh.b@matrixmob.com',
                'password' => bcrypt('zjcAJxcR5Rgaftcj'),
                'status' => 'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
