<?php
require('./helpers/folder.php');
//require('./helpers/database.php');
//require(HELPERS.DS.'artworks.php');

$folder_path = './images/'. $_GET['v'] .'/';

$folder_name = "sewing";
$folder = "";
$imgs = "";


if (isset($_GET['s']) & isset($_GET['f'])) {
        $folder_name = "/make/".trim($_GET['f']);

                $folder = new Folder($folder_path . $folder_name);
                $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);

} else {
        $folder = new Folder('./images/personal_projects/make/SF_makeathon/');
        $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);
}



?>
