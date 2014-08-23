<?php

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Folder {

        public $dir = "";

        function __construct($dir) {
                $this->dir = $dir;
        }

        function get_files_by_types($file_types = "jpg|gif|ppt|pdf|key", $recursive = true) {
            $files = array();

            $this->dir = rtrim($this->dir, "/") . '/';

            $types = explode("|", strtolower($file_types));

            $dh = opendir($this->dir) or die("Could not open $this->dir");
            while(false !== ($f = readdir($dh))) {
                if (strpos($f, '.') == 0) continue;
                if (is_dir($this->dir . $f)) {
                    $files[] = get_files_by_types($dir. $f . '/', $file_types, true);
                } else {
                    if(in_array(substr(strtolower($f), strrpos($f, ".") + 1), $types)) {
                        array_push($files, $f);
                    }
                }
            }
            closedir($dh);
            return $files;
        }

        public function display_img_table($imgs, $height = '200px', $width = '160px',$isRefPdf = false) {

                // The default table will have 4 columns and 4 rows of thumbnails
                $total = count($imgs);
                $index = 0;
                $enlarged_img = '';
                $thumb_img = '';
                $li_height_width = ' style="height:'.$height.';width:'.$width.';"';

                $img_table = '<link rel="stylesheet" type="text/css" href="/css/gallery.css" media="screen, projection" />'."\n";
                //$img_table .= '<link rel="stylesheet" type="text/css" href="/js/colorbox/colorbox.css" media="screen, projection" />'."\n";
                //$img_table .= '<script type="text/javascript" src="/js/colorbox/jquery-1.3.2.min.js"></script>'."\n";
                //$img_table .= '<script type="text/javascript" src="/js/colorbox/jquery.colorbox-min.js"></script>'."\n";
                //$img_table .= '<script type="text/javascript" src="/js/gallery.js"></script>'."\n";


                $img_table .= '<ul class="gallery">'."\n";

                // print the rows
                //ecards table should looks different, need to be standardized

                foreach ($imgs as $img) {
                    $index++;

                    $enlarged_img =  $this->dir . $img;
                    if (strpos($img, 'ppt') !== false) {
                        $thumb_img = $this->dir . '/thumbs/'.str_replace(".ppt", '.jpg', $img);
                        $img_table .= '<li'.$li_height_width.'>#'.$index.'<a href="' . $enlarged_img . '" class="tb_supersize" title="#'.$index.'"><img src="' . $thumb_img. '" alt="" class="tb_thumbmail"/></a></li>';
                    }

                    elseif (strpos($img, 'pdf') !== false)  {
                        $thumb_img = $this->dir . '/thumbs/'.str_replace(".pdf", '.jpg', $img);
                        $img_table .= '<li'.$li_height_width.'>#'.$index.'<a href="' . $enlarged_img . '" class="tb_supersize" title="#'.$index.'"><img src="' . $thumb_img. '" alt="" class="tb_thumbmail"/></a></li>';
                    }else{
                        $thumb_img = $this->dir . '/thumbs/'.$img;
                        $img_table .= '<li'.$li_height_width.'>#'.$index.'<a href="' . $enlarged_img . '" class="tb_supersize" rel="gallery1" title="#'.$index.'"><img src="' . $thumb_img. '" alt="" class="tb_thumbmail"/></a></li>';
                    }
                }


                $img_table .= "</ul>";

                return $img_table;

        }//end function display_folder()

}
