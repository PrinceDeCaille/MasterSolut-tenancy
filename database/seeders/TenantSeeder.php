<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\Post;
use App\Database\factories;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       $tenant = Tenant::create(['id' => 'dark','name' => 'dark',]);
       $tenant->domains()->create(['domain' => 'dark.multitenancy.test.test']);





    }
}
