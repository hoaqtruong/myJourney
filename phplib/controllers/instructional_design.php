<?php
require('./helpers/folder.php');
//require('./helpers/database.php');
//require(HELPERS.DS.'artworks.php');

$folder_path = './images/'. $_GET['v'] .'/';

$folder_name = "presentation";
$folder = "";
$imgs = "";


if (isset($_GET['s'])) {
        $folder_name = trim($_GET['s']);

                $folder = new Folder($folder_path . $folder_name);
                $imgs = $folder->get_files_by_types("jpg|gif|ppt|pdf|key", false);


} else {
        $folder = new Folder('./images/instructional_design/presentations/');
        $imgs = $folder->get_files_by_types("jpg|gif|ppt|pdf|key", false);
}



?>
