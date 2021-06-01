<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'category' => [
                'id' => $this->categoria->id,
                'name' => $this->categoria->name
            ],
            'title' => $this->title,
            'image' => Storage::disk('public')->url($this->image),
            'status' => $this->status,
            'description' => $this->description,
            'created_at' => $this->created_at->format('d/m/Y H:i:s'),
            'updated_at' => $this->updated_at->format('d/m/Y H:i:s')
        ];
    }
}
