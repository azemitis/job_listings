<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->paginate(6);
        return view('dashboard', compact('jobs'));
    }

    public function create()
    {
        $job = new Job();
        return view('dashboard.create', compact('job'));
    }

    public function store(Request $request)
    {
        $this->validateRequest();

        $job = Job::create([
            'title' => $request->title,
            'organization' => $request->organization,
            'degree' => $request->degree,
            'jobType' => $request->jobType,
            'locations' => $request->locations,
            'email' => $request->email,
            'remote' => $request->remote,
            'day' => $request->day,
            'month' => $request->month,
            'year' => $request->year,
            'responsibilities' => $request->responsibilities,
            'aboutJob' => $request->aboutJob,
            'minimumQualifications' => $request->minimumQualifications,
            'preferredQualifications' => $request->preferredQualifications,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('dashboard')->with('success', 'New job listing created successfully!');
    }

    public function show($id)
    {
        $job = Job::find($id);
        return view('dashboard.show', compact('job'));
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('dashboard.edit', compact('job'));
    }

    public function update(Request $request, $id)
    {
        $this->validateRequest();

        $job = Job::findOrFail($id);
        $job->id = $request->id;
        $job->title = $request->title;
        $job->organization = $request->organization;
        $job->degree = $request->degree;
        $job->jobType = $request->jobType;
        $job->aboutJob = $request->aboutJob;
        $job->remote = $request->remote;
        $job->day = $request->day;
        $job->month = $request->month;
        $job->year = $request->year;
        $job->locations = $request->location;
        $job->email = $request->email;
        $job->responsibilities = $request->responsibilities;
        $job->minimumQualifications = $request->minimumQualifications;
        $job->preferredQualifications = $request->preferredQualifications;
        $job->save();
        return redirect()->route('dashboard')->with('success', 'Job updated successfully!');
    }

    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->route('dashboard')->with('success', 'Job deleted successfully');
    }

    protected function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'organization' => 'required',
            'email' => 'required|email',
            'remote' => 'required',
            'day' => 'required',
            'month' => 'required',
            'year' => 'required',
        ]);
    }
}
