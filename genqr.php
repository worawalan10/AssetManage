<?php
    // include "phpqrcode/qrlib.php";
    $target_dir = "uploads/";
    $file_download = "files/imageQR.zip";

    $filename = $_FILES["fileToUpload"]["name"];
    $file_tmp_name = $_FILES["fileToUpload"]["tmp_name"];
    $fileError = $_FILES['fileToUpload']['error'];
    $movefile = $target_dir.$filename;

    $size = '300x300';
    // echo $fileError;
    // echo $file_tmp_name;
    // echo $filename;

    if($fileError == 0){
        copy($file_tmp_name,$movefile);
        $handle = fopen($movefile, "r");
        while($count = fgets($handle)){
            $count = preg_replace('/[^\PC\s]/u', '', $count);
            // echo strlen(trim($count));
            // echo "]] ";
            // echo $count;
            //  echo "pp ";
            echo $qrname = trim($count).".png"; echo "<br>";
            $qr = file_get_contents('https://chart.googleapis.com/chart?cht=qr&choe=UTF-8&chld=H|0&chs='.$size.'&chl='.trim($count));
            file_put_contents('qrimg/'.$qrname, $qr);

            // if (file_exists($file_download)) {
            //     header('Content-Description: File Transfer');
            //     header('Content-Type: application/octet-stream');
            //     header('Content-Disposition: attachment; filename="'.basename($file_download).'"');
            //     header('Expires: 0');
            //     header('Cache-Control: must-revalidate');
            //     header('Pragma: public');
            //     header('Content-Length: ' . filesize($file_download));
            //     readfile($file_download);
            //     exit;
        // }

    }
    }


?>