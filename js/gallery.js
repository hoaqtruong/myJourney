var numPerPage = 9;
$(document).ready(function(){
  $("a[rel='gallery1']").colorbox({transition:"none", width:"75%", height:"75%"});
  $("#click").click(function(){
      $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
      return false;
  });

  $('ul.gallery').each(function() {
    var currentPage = 0;
    var $table = $(this);
    $table.bind('repaginate', function() {
      $table.find('li').hide()
        .slice(currentPage * numPerPage,
          (currentPage + 1) * numPerPage)
        .show();
    });
    var numRows = $table.find('li').length;
    var numPages = Math.ceil(numRows / numPerPage);
    if (numPages > 1) {
        var $pager = $('<div class="pager"></div>');
        for (var page = 0; page < numPages; page++) {
             $('<span class="page-number"></span>').text(page + 1)
                 .bind('click', {newPage: page}, function(event) {
             currentPage = event.data['newPage'];
             $table.trigger('repaginate');
             $(this).addClass('active')
                     .siblings().removeClass('active');
             }).appendTo($pager).addClass('clickable');
        }
        $pager.insertBefore($table)
         .find('span.page-number:first').addClass('active');
        $('<br>').insertBefore($pager);
    }
  });
  $('ul.gallery').find('li').hide().slice(0, numPerPage).show();
});