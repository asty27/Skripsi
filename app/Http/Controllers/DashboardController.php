<?php

namespace App\Http\Controllers;

use App\Helpers\Base64;
use App\Models\DetectedImage;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $totalDetectedImageToday = DetectedImage::whereDate('timestamp', now())->count();
        $totalAllDetectedImage = DetectedImage::count();
        $lastImage = DetectedImage::orderBy('timestamp', 'desc')->first();
        $totalUser = User::count();
        $fileName = Base64::decode($lastImage->image_base64);

        $statusFlag = '';

        if ($totalDetectedImageToday >= 100) {
            $statusFlag = 'Siaga 1';
        } elseif ($totalDetectedImageToday >= 50) {
            $statusFlag = 'Siaga 2';
        } elseif ($totalDetectedImageToday >= 10) {
            $statusFlag = 'Siaga 3';
        } else {
            $statusFlag = 'Normal';
        }

        if ($totalAllDetectedImage > 0) {
            $percentageDetectedToday = ($totalDetectedImageToday / $totalAllDetectedImage) * 100;
            $percentageDetectedToday = number_format($percentageDetectedToday, 2) . "%";
        } else {
            $percentageDetectedToday = "0%";
        }

        if ($request->ajax()) {
            return response()->json([
                'totalDetectedImageToday' => $totalDetectedImageToday,
                'percentageDetectedToday' => $percentageDetectedToday,
                'statusFlag' => $statusFlag,
                'totalAllDetectedImage' => $totalAllDetectedImage,
                'lastSeenTime' => Carbon::parse($lastImage->timestamp)->format('Y-m-d H:i:s'),
                'lastSeenImage' => asset('storage/' . $fileName),
                'totalUser' => $totalUser,
            ]);
        }

        return view('dashboard', compact(
            'totalDetectedImageToday',
            'totalAllDetectedImage',
            'percentageDetectedToday',
            'fileName',
            'lastImage',
            'statusFlag',
            'totalUser'
        ));
    }
}
