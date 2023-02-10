<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobsResource extends JsonResource
{
    public function toArray($request)
    {
        // Data for all Vue Job Listings
        return [
            'id' => $this->id,
            'title' => $this->title,
            'organization' => $this->organization,
            'degree' => $this->degree,
            'locations' => $this->locations,
            'jobType' => $this->jobType,
            'remote' => $this->remote,
            'minimumQualifications' => $this->minimumQualifications,
        ];
    }
}
