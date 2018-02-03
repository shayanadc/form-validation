<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AgencyResourceApiTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic test example.
     * @test
     * @return void
     */
    public function it_register_agency_data()
    {
        $response = $this->json('POST', 'api/agency', [
            'applicant_name' => 'Sally',
            'business_name' => 'fiber',
            'city' => 'gorgan',
            'phone' => '0171324567',
            'description' => 'i am a good good very',
            'facilities' => 'very very'
        ]);

        $response
            ->assertStatus(200)
            ->assertJson([
                'applicant_name' => 'Sally',
                'business_name' => 'fiber',
                'city' => 'gorgan',
                'phone' => '0171324567',
                'description' => 'i am a good good very',
                'facilities' => 'very very'
            ]);
    }
    /**
     * @test
     */
    public function it_returns_error_messages(){
        $response = $this->json('POST', 'api/agency', [
            'city' => 'gorgan',
            'phone' => '0171324567',
            'description' => 'i am a good good very',
            'facilities' => 'very very'
        ]);

        $response
            ->assertStatus(422)
            ->assertJson([
               'messages' => [
                   'نام کاربر ضروری است.',
                   'نام شرکت ضروری است.',
               ]
            ]);
    }
    
}
