<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Http;

class ImageGeneratorService
{
    protected $baseUrl = 'https://picsum.photos';
    protected $dimensions = '400/300';

    public function generateUrl(int $categoryId): ?string
    {
        $category = Category::find($categoryId);

        $url = "{$this->baseUrl}/{$category->image_seeder}";

        $response = Http::get($url);

        if ($response->successful()) {
            $finalUrl = $response->effectiveUri();
            return (string) $finalUrl;
        }

        return null;
    }
}
