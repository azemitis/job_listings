<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'organization', 'degree', 'jobType', 'remote', 'locations', 'responsibilities',
    'minimumQualifications', 'preferredQualifications', 'description', 'user_id', 'day', 'month', 'year', 'email', 'aboutJob'
    
];

    // protected $casts = [
    //     'minimumQualifications' => 'array',
    //     'preferredQualifications' => 'array',
    // ];

    public function scopeFilter($query, $jobs)
    {
        return $query->whereIn('id', $jobs->pluck('id'))->where('created_at', '>=', Carbon::now()->subMonths(3));
    }
    
    // Parses only latest job listings
    public function scopeRecent($query)
    {
        return $query->where('created_at', '>=', Carbon::now()->subMonths(3));
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
