<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Resources\JobResource;
use App\Http\Resources\JobsResource;
// use App\Http\Requests\StoreJobRequest;
// use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    // Data for Vue frontend
    public function index()
    {
        //Displays job listings posted during last 3 months
        $jobs = Job::where('created_at', '>=', now()->subMonths(3))->get();
        return JobsResource::collection($jobs);
    }

    //Displays one job listing
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return JobResource::collection(['data' => $job]);
    }
}
