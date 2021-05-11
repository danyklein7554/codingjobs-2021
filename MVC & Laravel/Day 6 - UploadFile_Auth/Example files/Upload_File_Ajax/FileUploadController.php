<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    // Show the form
    public function fileUpload()
    {
        // Only show the view
        return view('file-upload');
    }

    // Save the file / Submit the form
    public function fileUploadSubmit(Request $request)
    {
        // Check if the file match our criteria
        /*$request->validate([
            'file' => 'required|mimes:pdf,csv,jpeg|max:2048'
        ]);*/

        // Rename the file with timestamp
        $fileName = time() . '.' . $request->file->extension();

        // Save the path to the public folder
        $public_path = public_path('uploads');

        // Save the file in public/uploads folder
        $request->file->move($public_path, $fileName);

        // Refresh the view with success message
        return response('{"success": "You have successfully uploaded the file"');
    }
}
