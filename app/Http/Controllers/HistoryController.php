<?php

namespace App\Http\Controllers;

use App\Helpers\Base64;
use App\Models\DetectedImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HistoryController extends Controller
{
    public function index(Request $request)
    {
        $histories = new DetectedImage;
        if ($request->query('start_date') && $request->query('end_date')) {
            $histories = $histories->whereDate('timestamp', '>=', $request->query('start_date'));
            $histories = $histories->whereDate('timestamp', '<=', $request->query('end_date'));
        } else {
            $histories = $histories->whereDate('timestamp', now());
        }

        $histories = $histories->orderBy('timestamp', 'DESC')->orderBy('id', 'DESC')->paginate(12)->appends($request->query());
        foreach ($histories as $i => $history) {
            $fileName = Base64::decode($history->image_base64, $history->file_name);
            if ($fileName != $history->file_name) {
                DetectedImage::where('id', $history->id)->update([
                    'file_name' => $fileName
                ]);
                $histories[$i]->file_name = $fileName;
            }
        }

        return view('history.index', compact('histories'));
    }
}
