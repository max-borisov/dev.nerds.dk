<?php
// Rename files
$dir = __DIR__ . '/frontend/web/images/original';
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if (strpos($file, '?') !== false) {
                $newName = substr_replace($file, '', strpos($file, '?'));
                echo $newName, "\r\n";
                rename($dir . '/' . $file, $dir . '/' . $newName);
            }
        }
        closedir($dh);
    }
}
?>