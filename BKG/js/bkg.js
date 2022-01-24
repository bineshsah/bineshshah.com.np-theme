// Binesh Sah
jQuery(document).ready(function(){
  $(".nav-link").click(function(){
    if($("#navbarNavAltMarkup").hasClass( "show" )){
      $(".navbar-toggler").click();
    }

  });

  $("#bkgdesign").click(function(){
    console.log("animate");
      $("#bkgdesign").css({opacity: '1'});
  });
  function smoothScroll() {
    var el = $(this),
    target = el.attr('href').split('#')[1];

    if(target === 'about_me'){
      console.log(target);
      toscroll = 55;
    }else{
      toscroll = 30;
    }
    if (target !== undefined && $('#'+target).length) {
      $('html, body').animate({
        scrollTop: $('#'+target).offset().top - toscroll
      }, 1000);
    }
    window.location.href = window.location.href.split('#')[0] + '#' + target;
    return false;
  }

  $('body').on('click', '.smoothScroll', smoothScroll);
  if(jQuery('.menu').hasClass("selected")){
      jQuery('.menu').removeClass('selected');
  }
  if(jQuery('.toggle').hasClass("selected")){
      jQuery('.toggle').removeClass('selected');
    }
});
