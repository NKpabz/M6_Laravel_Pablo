<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0102', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '555-0105', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin_john', 'full_name' => 'John Admin', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier_sarah', 'full_name' => 'Sarah Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager_mike', 'full_name' => 'Mike Manager', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff_lisa', 'full_name' => 'Lisa Staff', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'clerk_tom', 'full_name' => 'Tom Clerk', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}