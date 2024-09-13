<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //

    public function download($filename)
    {
        // Get the file path
        $filePath = storage_path('app/public/' . $filename);

        // Check if the file exists
        if (!Storage::disk('public')->exists($filename)) {
            abort(404, 'File not found');
        }

        // Generate the response for file download
        return response()->download($filePath, $filename);
    }

}
