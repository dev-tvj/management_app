<?php

use Illuminate\Database\Seeder;
use App\ContactReason;

class ContactReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactReason::create(['contact_reason' => 'Doubt']);
        ContactReason::create(['contact_reason' => 'Praise']);
        ContactReason::create(['contact_reason' => 'Complaint']);
    }
}
