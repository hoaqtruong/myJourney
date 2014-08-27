<?php


//New $NAV_MAIN = array('home','instructional_design','computer_skills','personal_projects');

$main_nav = "";
if (isset($_REQUEST['v'])) {
        $main_nav = $_REQUEST['v'];
}

switch ($main_nav){
        case "instructional_design":
                $NAV_S = array('ABC_program','tre_xanh', 'Xgen_leadership');
                break;

		case "computer_skills":
		        $NAV_S = array('Flash_and_ActionScript','PHP_CSS_HTML','JavaScript','graphic_design','3D_modeling');
		        break;

		case "personal_projects":
		        $NAV_S = array('sewing','embroidery', 'make', 'spirulina','aquaponics');
		        break;

        default:
                $NAV_S = array('resume');
}


/* This is the sub-nab of the old site */
//Old $NAV_MAIN = array('home', 'wall_photos','graphic_design', 'instructional_design', 'computer_programing', 'blog');
/* switch ($main_nav){
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
} */
