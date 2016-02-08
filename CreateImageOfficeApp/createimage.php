<?php 
header('Content-Type: image/png');
mb_internal_encoding("UTF-8");

// SET POST Parameter  --------------------------------------------------
if ($_POST) {
    $Mark =  $_POST['Mark'];
    if($Mark == "1"){
        $Message = '›';
    }
    else if($Mark == "2"){
        $Message = '~';
    }
    $FontSize = $_POST['FontSize'];
}
// Set ImageInfo
$StringWidth = $FontSize * 1;
$StringHeight = $FontSize * 1;
$ImageWidth = $StringWidth + 10;
$ImageHeight = $StringHeight + 10;

// Get GD
// SourceFhttp://nucleus.yaibeen.com/item30.html
// ttffileFhttp://mplus.font-face.jp/
$FontFamily = './mplus-1m-medium-sub.ttf';
$arrInfo = gd_info();
// If 'gd_info' contains 'JIS-mapped Japanese Font Support'
if($info['JIS-mapped Japanese Font Support']){
    $OutMessage = $Message;
}
// Else Conert SJIS TO UTF-8
else{
    $OutMessage = mb_convert_encoding($Message, "UTF-8", "SJIS");
}

// Create Image  --------------------------------------------------
$im = @imagecreatetruecolor($ImageWidth, $ImageHeight)
      or die('Cannot Initialize new GD image stream');
$text_color = imagecolorallocate($im, 233, 14, 91);
ImageTTFText($im, $FontSize, 0, ($ImageWidth/2)-($StringWidth/2), ($ImageHeight/2)+($FontSize/2), $text_color, $FontFamily, $OutMessage);
imagepng($im);
imagedestroy($im);
?>
