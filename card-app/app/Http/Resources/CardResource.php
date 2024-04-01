<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'company' => $this->company,
            'title' => $this->title,
            'contact' => $this->contact,
            'created_at' => $this->created_at,
        ];
    }
}
