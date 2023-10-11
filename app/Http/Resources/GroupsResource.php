<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GroupsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
       return [
           'id' => $this->id,
           'name' => $this->name,
           'teacher_id' => $this->teacher_id,
           'teacher' => $this->teacher,
           'student' => $this->student
       ];
    }
}
