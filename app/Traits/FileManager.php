<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait FileManager
{
    public function uploadFile( &$request  , $path , $fileName): void
    {

        $data = $request->except($fileName);

        if( $request->hasFile($fileName) ) {

            $file = $request->file($fileName); //Uploaded File object
            $path = $file->store($path , [
                'disk' => 'public'
            ]);

            $request[$fileName] = $path;
        }
    }

    public function deleteFile($model, $filename): void
    {
        $old_file = $model[$filename];

        if ($old_file){
            Storage::disk('public')->delete($old_file);
        }
    }

    public function storeImage($image)
    {
        $image = uniqid() . '-' . $image;
    }
}
