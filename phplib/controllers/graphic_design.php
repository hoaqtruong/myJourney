<?php
require('./helpers/folder.php');
//require('./helpers/database.php');
//require(HELPERS.DS.'artworks.php');

$folder_path = './images/'. $_GET['v'] .'/';

$folder_name = "graphic_design";
$folder = "";
$imgs = "";


if (isset($_GET['s']) & isset($_GET['f'])) {
        $folder_name = "/graphic_design/".trim($_GET['f']);

                $folder = new Folder($folder_path . $folder_name);
                $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);

} else {
        $folder = new Folder('./images/computer_skills/graphic_design/book_covers/');
        $imgs = $folder->get_files_by_types("jpg|gif|png|ppt|pdf", false);
}



?>
