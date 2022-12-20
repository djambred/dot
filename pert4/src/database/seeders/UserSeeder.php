<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            'username'  => 'client',
            'password'  => Str::random(40),
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
}
