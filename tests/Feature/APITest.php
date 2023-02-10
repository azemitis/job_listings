<?php

namespace Tests\Feature;

use App\Models\Job;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class APITest extends TestCase
{
    use RefreshDatabase;

    public function test_the_api_jobs_route_works()
    {
        $response = $this->get('api/jobs');

        $response->assertStatus(200);
    }

    public function test_the_api_job_single_route_works()
    {
        User::factory(10)->create();
        Job::factory(2)->create();


        $response = $this->get('api/jobs/2');

        $response->assertStatus(200);
    }

    public function test_the_api_jobs_is_json_data()
    {
        $response = $this->json('GET', 'api/jobs');

        $response->assertStatus(200);
    }

    public function test_the_api_json_data_is_structured()
    {
        User::factory(10)->create();
        Job::factory(2)->create();

        $response = $this->json('GET', 'api/jobs');

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'title',
                        'organization',
                        'degree',
                        'jobType',
                    ],
                ]
            ]);
    }
}
