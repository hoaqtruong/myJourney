
$(document).ready(function() {
     var strLoc = this.location.href;
     var pos = strLoc.indexOf('?');
     var strReq = '';
     if (pos != -1) {
         pos += 1;
         strReq = strLoc.substr(pos, strLoc.length - pos);
     }

     var pattern1 = new RegExp('&');
     var pattern2 = new RegExp('=');

     var par1 = '';
     var par2 = '';
     var arrHref = strReq.split(pattern1)
     par1 = arrHref[0].split(pattern2)[1];
     if (arrHref[1] != undefined){
        par2 = arrHref[1].split(pattern2)[1];
     }

     //$("div#nav_main ul.nav_main li." + par1).css({"background":"url(/images/graphic_elements/button_" + par1 + "_visited.png) no-repeat"});
     $("div#nav_main ul.nav_main li." + par1).addClass("selected_main_nav")
     if (par2 != '')
         $("div#nav_sub ul.nav_sub li." + par2 + " a").addClass("selected");

});
