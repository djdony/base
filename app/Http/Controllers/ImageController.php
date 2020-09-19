<?php

namespace App\Http\Controllers;

use App\Models\Image;

class ImageController extends Controller
{
    public function destroy(Image $image)
    {
        try {
            $image->delete();
        } catch (\Exception $e) {
        }

        $data = [
            'success' => true,
            'message'=> 'Your AJAX processed correctly',
        ] ;

        return response()->json($data);
    }
}
