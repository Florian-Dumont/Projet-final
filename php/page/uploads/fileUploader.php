<?php

/**
 * File Uploader class used for media upload
 * @author Mari Doucet & Florian Dumont
*/

require "media.php";

const UPLOADS_DIR = '/uploads/';

// const MIME_TYPES = array(

//     // images
//     'png' => 'image/png',
//     'jpe' => 'image/jpeg',
//     'jpeg' => 'image/jpeg',
//     'jpg' => 'image/jpeg',
//     'gif' => 'image/gif',
//     'bmp' => 'image/bmp',
//     'ico' => 'image/vnd.microsoft.icon',
//     'tiff' => 'image/tiff',
//     'tif' => 'image/tiff',
//     'svg' => 'image/svg+xml',
//     'svgz' => 'image/svg+xml',

//     // audio/video
//     'mp3' => 'audio/mpeg',
//     'qt' => 'video/quicktime',
//     'mov' => 'video/quicktime',

// );

class FileUploader
{
    private string $uploadFile = "/uploads/";
     
   
    
    private function generateFileName() : string
    {
        $randomString = bin2hex(random_bytes(10)); // random string, 20 characters a-z 0-9
        
        return $randomString;
    }
    
    public function checkFileSize(int $fileSize) : bool
    {
        $maxFileSize = 2000000; // 2 Mo
        // vérifier que le fichier n'est pas trop gros
        if($fileSize > $maxFileSize){
           return false;
        }
        else{
            return true;
        }
    }
    
    public function checkFileType(string $fileType) : bool
    {
        $allowedFileTypes = ["png", "PNG", "jpg", "JPG", "jpeg", "JPEG", "WEBP", "webp"];
        if(!in_array($fileType, $allowedFileTypes)){
           return false;
        }
        else{
            return true;
        }
        // vérifier que le type est bien l'un des types autorisés
    }
        //verifier le MIME
    public function checkMime($typeMime)
    {
        $mime_type = array(
    
            // images
            'webp'=> 'image/webp',
            'png' => 'image/png',
            'jpe' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'jpg' => 'image/jpeg',
            'gif' => 'image/gif',
            'bmp' => 'image/bmp',
            'ico' => 'image/vnd.microsoft.icon',
            'tiff' => 'image/tiff',
            'tif' => 'image/tiff',
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
        
            // audio/video
            'mp3' => 'audio/mpeg',
            'qt' => 'video/quicktime',
            'mov' => 'video/quicktime',

        );
        
         if(!in_array(mime_content_type($typeMime), $mime_type, true)){
            return false;
         }
         else{
             return true;
         }
    }
    
    
    
    public function upload(array $file, string $originalName) : void
    {
        // appeler $this->checkFileType(string $fileType) pour vérifier le type du fichier 
        // appeler $this->checkFileSize(int $fileSize) pour vérifier le type du fichier 
        
        // $filename = uniqid().'-'."image.png";
        // $originalName = uniqid()."-".$file["name"];
        // $fileName = $this->generateFileName();
        // $fileType = pathinfo($originalName)["extension"];
        $url = getcwd() . $this->uploadFile . $originalName;
        // var_dump($originalName);
        // var_dump($url);
        // var_dump($file["tmp_name"]);
        // die;
        
        
        
        
        move_uploaded_file($file["tmp_name"], $url);
        
        // return new Media($originalName, $fileName, $fileType, $url);
        
    }
    
    
}  

   