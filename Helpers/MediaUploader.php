<?php

namespace App\Helpers;

trait MediaUploader{
  function uploadSingleMedia($file,$fileName, $dirName, $old = null, $accessibility = 'public')
  {
    if ($file) {


        if($old){
            storage::disk($accessibility)->delete($old);
        }


     $fileName = "$fileName.". $file->getClientOriginalExtension();
      $mediaPath = $file->storeAs($dirName, $fileName, $accessibility);
      return $mediaPath;
    }
  }

  function uploadMultipleMedia($files, $dirName, $accessibility ="public")
  {
    if($files){
        $mediaPathArray = [];
        foreach($files as $file)
        {
            if ($file) {
                $fileName = uniqid() . '.' .$file->getClientOriginalExtension();
                $mediaPath = $file->storeAs($dirName, $fileName, $accessibility);
                $mediaPathArray[] =  $mediaPath;
            }
        }
        return $mediaPathArray;
    }

  }
}
