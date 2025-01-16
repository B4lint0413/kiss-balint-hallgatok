<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "neptun_code" => $this->neptun_code,
            "name" => $this->name,
            "training_id" => $this->training_id,
            "admission" => $this->admission,
            "term" => $this->term,
            "active_term" => $this->active_term,
            "training" => new TrainingResource($this->whenLoaded('training'))
        ];
    }
}
