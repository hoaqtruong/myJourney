<?php
require('./helpers/folder.php');
//require('./helpers/database.php');
//require(HELPERS.DS.'artworks.php');

$folder_path = './images/'. $_GET['v'] .'/';

$folder_name = "graphic_design";
$folder = "";
$imgs = "";


if (isset($_GET['s'])) {
        $folder_name = trim($_GET['s']);

                $folder = new Folder($folder_path . $folder_name);
                $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);


} else {
        $folder = new Folder('./images/graphic_design/logo_n_more/');
        $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);
}



?>
