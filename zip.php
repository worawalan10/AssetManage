<?php
    $outZipPath = "files/imageQR.zip";
    // $pathInfo = pathinfo('images');
    $parentPath = $pathInfo['dirname'];
    $dirName = $pathInfo['basename'];
    $folder = "qrimg";

    $z = new\ZipArchive();
    // $z ->open($outZipPath, \ZIPARCHIVE::CREATE);
    $z ->open($outZipPath, \ZIPARCHIVE::CREATE| \ZIPARCHIVE::OVERWRITE);
    $z ->addEmptyDir($dirName);

    folderToZip($folder,$z,strlen("$parentPath//"), $outZipPath);
    $z->close();

    if(is_file($outZipPath) === true){
        $file = @fopen($outZipPath,'rb');
        $speed = (isset($speed) === true) ? round($speed * 1024) : 524288;
        
        if(is_resource($file) === true){
            set_time_limit(0);
            ignore_user_abort(false);

            while(ob_get_level()>0){
                ob_end_clean();
            }

            header('Expires: 0');
            header('Cache-Control: must-revalidate,post-check=0,pre-check=0');
            header('Pragma: public');
            header('Content-Type: application/octet-stream');
            header('Content-Length:'. sprintf('%u',filesize($outZipPath)));
            header('Content-Disposition: attachment; filename="'.basename($outZipPath).'"');
            header('Content-Transfer-Encoding: binary');

            while (feof($file) !== true){
                echo fread($file,$speed);
                
                while(ob_get_level()>0){
                    ob_end_flush();
                }
                
                flush();
                sleep(1);
            }
            fclose($file);
        }
        exit();
    }

    function folderToZip($folder, &$zipFile, $exclusiveLength,$outPath){
        $handle = opendir($folder);
        $filelimit = 600;
        while(false !== $f = readdir($handle)) {
            if($f != '.' && $f != '..'){
                $filePath = "$folder/$f";

                $localPath = substr($filePath, $exclusiveLength);
                if (is_file($filePath)){
                    if($zipFile->numFiles == $filelimit){
                        $zipFile->close();
                        $zipFile->open($outPath) or die ("Error: Could not reopen zip");
                    }

                    $zipFile->addFile($filePath, $localPath);
                }elseif(is_dir($filePath)){
                    $zipFile->addEmptyDir($localPath);
                    folderToZip($filePath,$zipFile,$exclusiveLength);
                }
            }
        }
        closedir($handle);
    }
?>