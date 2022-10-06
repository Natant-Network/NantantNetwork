<?php
// assuming file.zip is in the same directory as the executing script.
$file = 'games.zip';

// get the absolute path to $file
$path = pathinfo(realpath($file), PATHINFO_DIRNAME);

$tar = new TarArchive;
$res = $tar->open($file);
if ($res === TRUE) {
  // extract it to the path we determined above
  $tar->extractTo($path);
  $tar->close();
  echo "WOOT! $file extracted to $path";
} else {
  echo "Doh! I couldn't open $file";
}