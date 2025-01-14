<?php

namespace App\Helpers;

use App\Models\Region\Area;
use App\Models\Region\SubRegion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

class Base64
{
    public static function decode($base64, $fileName = null): string
    {
        if ($fileName && Storage::disk('public')->exists($fileName)) {
            return $fileName;
        }

        $decodedImage = base64_decode($base64);
        $folderPath = 'enemy-image';

        if (!Storage::disk('public')->exists($folderPath)) {
            Storage::disk('public')->makeDirectory($folderPath);
        }
        $fileName = $folderPath . '/decoded_image_' . Uuid::uuid4()->toString() . '.png';
        Storage::disk('public')->put($fileName, $decodedImage);
        return $fileName;
    }
}
