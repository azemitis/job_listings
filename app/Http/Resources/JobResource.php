<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // Data for 1 Vue Job Listing
        return [
            'id' => $this->id,
            'title' => $this->title,
            'organization' => $this->organization,
            'degree' => $this->degree,
            'locations' => $this->locations,            
            'day' => $this->day,            
            'month' => $this->month,            
            'year' => $this->year,            
            'remote' => $this->remote,
            'jobType' => $this->jobType,
            'aboutJob' => $this->aboutJob,
            'email' => $this->email,
            'responsibilities' => $this->responsibilities,
            'minimumQualifications' => $this->minimumQualifications,
            'preferredQualifications' => $this->preferredQualifications,
        ];
    }
}
