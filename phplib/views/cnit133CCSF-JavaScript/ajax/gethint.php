<?php
header("Cache-Control: no-cache, must-revalidate");
 // Date in the past
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

 // Fill up array with names
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";
$a[]="Devorah";
$a[]="Demetra";
$a[]="Velma";
$a[]="Margarite";
$a[]="Frederica";
$a[]="Frederica";
$a[]="Merissa";
$a[]="Lisette";
$a[]="Walter";
$a[]="Gaylord";
$a[]="Burton";
$a[]="Xiomara";
$a[]="Phyllis";
$a[]="Leonardo";
$a[]="Lauran";
$a[]="Maira";
$a[]="Kandace";
$a[]="Stuart";
$a[]="Grazyna";
$a[]="Floyd";
$a[]="Rickey";
$a[]="Nubia";
$a[]="Claris";
$a[]="Carolee";
$a[]="Sharla";
$a[]="Rosamond";
$a[]="Jenniffer";
$a[]="Emerita";
$a[]="Andre";
$a[]="Phylis";
$a[]="Shondra";
$a[]="Jesus";
$a[]="Loraine";
$a[]="Haywood";
$a[]="Andree";
$a[]="Petunia";
$a[]="Candance";
$a[]="Inell";
$a[]="Kraig";
$a[]="Khalilah";
$a[]="Esta";
$a[]="Jenise";
$a[]="Octavio";
$a[]="Huey";
$a[]="Pinkie";
$a[]="Serita";
$a[]="Quintin";
$a[]="Zelda";
$a[]="Franklin";
$a[]="Yuki";


 //get the q parameter from URL
 $q=$_GET["q"];
 //lookup all hints from array if length of q>0
 if (strlen($q) > 0)
 {
   $hint="";
     for($i=0; $i<count($a); $i++)
       {
	 if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
	     {
		 if ($hint=="")
		       {
			     $hint=$a[$i];
				   }
				       else
					     {
						   $hint=$hint." , ".$a[$i];
							 }
							     }
							       }
							       }

							       // Set output to "no suggestion" if no hint were found
							       // or to the correct values
							       if ($hint == "")
							       {
							       $response="no suggestion";
							       }
							       else
							       {
							       $response=$hint;
							       }

							       //output the response
							       echo $response;
							       ?>



