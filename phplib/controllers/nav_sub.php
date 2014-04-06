<?php

//$NAV_MAIN = array('home', 'wall_photos','graphic_design', 'instructional_design', 'computer_programing', 'blog');
$main_nav = "";
if (isset($_REQUEST['v'])) {
        $main_nav = $_REQUEST['v'];
}

switch ($main_nav){
        case "hoa_ff":
                $NAV_S = array('hoa','family', 'friends');
                break;

		case "wall_photos":
		        $NAV_S = array('Abstract','From_our_roof','My_Friends','Objects','Ocean_Beach','Patterns', 'Pics_of_me!','Places', 'Plants', 'San_Francisco', 'Tango', 'Trees', 'Vietnam');
		        break;
		
		case "graphic_design":
				$NAV_S = array('book_covers','logo_n_more','magazine_covers', 'posters', 'product_packaging', 'UI_design', 'draw_n_draft');
				break;

        case "instructional_design":
                $NAV_S = array('Presentations','Kineschool','IChing_Cycle_Recognition');
                break;

        case "Fashion_3D_Modeling":
                $NAV_S = array('Fashion_3D_Modeling', 'Examples');
                break;

        case "blog":
                $NAV_S = array('tango', 'tennis', 'traveling');
                break;

        default:
                $NAV_S = array('about_me', 'about_my_hubby');
}
