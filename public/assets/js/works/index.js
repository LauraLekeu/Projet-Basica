

$(function(){

  // Au click du btn "More works"
  $('#works-index-more').click(function(e){
    e.preventDefault();

    let offset = $('#works_list .col-md-4').length;
    let limit  = (typeof $(this).data('limit') !== typeof undefined && $(this).data('limit') !== false)? $(this).data('limit') : 6;

    $.get($(this).data('url'), {
      offset,
      limit
    },function(reponsePHP){
      $('#works_list').append(reponsePHP)
                      .find('.col-md-4:nth-last-of-type(-n+' + offset + ')');
    });

  });

  // Au scroll
  $(window).scroll(function() {
   if($(window).scrollTop() + $(window).height() > $(document).height() - 1) {
       $('#works-index-more').click();
     }
  });

});
