<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PropertyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'           => $this->id,
            'name'         => $this->name,
            'slug'         => $this->slug,
            'excerpt'      => $this->excerpt,
            'price'        => $this->price,
            'address'      => $this->address,
            'image'        => $this->image,
            'gallery'      => $this->gallery,
            'attributes'   => $this->attributes,
            'features'     => $this->features,
            'offer_type'   => $this->offer_type,
            'city'         => $this->city,
            'neighborhood' => $this->neighborhood,
            'bedrooms'     => $this->bedrooms,
            'bathrooms'    => $this->bathrooms,
            'property_size'=> $this->property_size,
            'year_built'   => $this->year_built,
            'created_at'   => $this->created_at->toDateString(),
        ];
    }

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);

        $properties = Property::with([
            'attributes',
            'gallery',
            'features',
            'offerType',
            'city',
            'neighborhood'
        ])->paginate($perPage);

        return PropertyResource::collection($properties);
    }
}
