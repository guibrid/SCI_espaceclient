<?php
namespace App\Utility;



class Toolbox
{

  /**
   * uploadFile method
   *
   * @param $data array ('file' => [ 'tmp_name' , 'name' , 'type' , 'size' ],
   *                     'validExtension' => [array()] )
   */

    public static function uploadFile($data)
    {
      $Filesdirectory = WWW_ROOT . 'files/catalogues/';
      if ( self::extensionFile( $data['file']['name'], $data['validExtension'] ) ) {

        $filename =  time() . '-' . str_replace(' ', '_', $data['file']['name']);
        $uniquedir = uniqid();
        mkdir($Filesdirectory.$uniquedir);
        if (move_uploaded_file($data['file']['tmp_name'], $Filesdirectory.'/'.$uniquedir .'/'. $filename)) {
          return ['filename' => $filename , 'folder' => $uniquedir ];
          return true;
        }
      }
    }

    /**
     * extensionFile method
     *
     * @param $filename string
     * @param $validExtension array Ex: ['jpg','gif','pdf']
     */

    public static  function extensionFile($filename, $validExtension)
    {
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
      foreach ($validExtension as $value) {
        if ($ext == $value) {
          return true;
        }
      }
    }

}
