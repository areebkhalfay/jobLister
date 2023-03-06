<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(10)->create();

         Listing::factory(6)->create();

//         Listing::create([
//             'title' => 'Senior Software Engineer',
//             'tags' => 'PHP, Javascript, React, Laravel',
//             'company' => 'Salesforce',
//             'location' => 'Atlanta, GA',
//             'email' => 'email1@test.com',
//             'website' => 'https://www.salesforce.com',
//             'description' => 'An opportunity to join Salesforce as a Senior Software Engineer. Salesforce, Inc. is an American cloud-based software company headquartered in San Francisco, California. It provides customer relationship management software and applications focused on sales, customer service, marketing automation, e-commerce, analytics, and application development.'
//         ]);
//
//         Listing::create([
//             'title' => 'Software Engineer',
//             'tags' => 'Swift, Java, MacOS',
//             'company' => 'Apple',
//             'location' => 'Cupertino, CA',
//             'email' => 'email2@test.com',
//             'website' => 'https://www.apple.com',
//             'description' => 'An opportunity to join Apple Inc. as a Software Engineer. Apple Inc. is an American multinational technology company headquartered in Cupertino, California, United States.'
//         ]);
//
//        Listing::create([
//            'title' => 'Product Manager',
//            'tags' => 'Jira',
//            'company' => 'Facebook',
//            'location' => 'Menlo Park, CA',
//            'email' => 'email3@test.com',
//            'website' => 'https://www.facebook.com',
//            'description' => 'Meta Platforms, Inc. is an American multinational technology conglomerate based in Menlo Park, California. The company owns Facebook, Instagram, and WhatsApp, among other products and services.'
//        ]);
//
//        Listing::create([
//            'title' => 'Lead Software Engineer',
//            'tags' => 'Java, Spring Boot, React',
//            'company' => 'Oracle',
//            'location' => 'Redwood City, CA',
//            'email' => 'email4@test.com',
//            'website' => 'https://www.oracle.com',
//            'description' => 'Oracle Corporation is an American multinational computer technology corporation headquartered in Austin, Texas.'
//        ]);
    }
}
