<?php


namespace App\Helpers;


class Helper
{
    protected static $file, $fileName, $fileDirectory, $fileUrl;

    public static function uploadFile($fileObject, $directory, $modelObject = null)
    {


        if ($fileObject)
        {
            if (file_exists($modelObject))
            {
                unlink($modelObject);
            }
            self::$fileName = rand(10, 999999).time().'.'.$fileObject->getClientOriginalExtension();
            self::$fileDirectory = 'back/assets/uploaded-files/'.$directory.'/';
            $fileObject->move(self::$fileDirectory, self::$fileName);
            self::$fileUrl = self::$fileDirectory.self::$fileName;
        } else {
            if ($modelObject == null)
            {
                self::$fileUrl = null;
            } else {
                self::$fileUrl = $modelObject;
            }
        }
        return self::$fileUrl;


    }
}
