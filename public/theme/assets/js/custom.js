$(document).ready(function() {

    $('body').on('click', '#click', loadDoc); 

    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
        $('body').toggleClass('overflw');
    });

   $('.index-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });


    $('.m-silder').slick({
        dots: true,
        arrows: true,
        infinite: true,
        fade: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows:false
            }
        },
        ]
    });

            $('.product-slid').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });

        $('.client-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
            }
        },
        ]
    });

    $('.event-slider').slick({
        dots: false,
        arrows: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        centerMode: true,
        responsive: [
        {
            breakpoint: 825,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                arrows:false
                
            }
        },
        ]
    });


// counter javascript start

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

// counter javascript end


    $('ul.faq-ul li.active div').slideDown();
    $('ul.faq-ul li h4').click(function() {
        $('ul.faq-ul li').removeClass('active');
        $(this).parent('li').addClass('active');
        $('ul.faq-ul li div').slideUp();
        $(this).parent('li').find('div').slideDown();
    });
    
        $('.faq-ul>li').click(function(){
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        });
    
        $('.fancybox-media').fancybox({
            openEffect: 'none',
            closeEffect: 'none',
            helpers: {
                media: {}
            }
        });

    $('.searchBtn').click(function() {
        $('.searchWrap').addClass('active');
        $('.overlay').fadeIn('active');
        $('.searchWrap input').focus();
        $('.searchWrap input').focusout(function(e) {
            $(this).parents().removeClass('active');
            $('.overlay').fadeOut('active');
            $('body').removeClass('ovr-hiddn');

        });
    });

});


$(window).on('load', function() {
    var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
    $('ul.menu li a').each(function() {
        var hrefVal = $(this).attr('href');
        if (hrefVal == currentUrl) {
            $(this).removeClass('active');
            $(this).closest('li').addClass('active')
            $('ul.menu li.first').removeClass('active');
        }
    })

});

// tabing

     $('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
});


     // sticky header

     $(window).scroll(function() {
    if ($(this).scrollTop() > 500){  
        $('').addClass("box-visable");
    }
    else{
        $('').removeClass("box-visable");
    }
});


// slider additional js for tabbing
          $("[data-targetit]").on("click", function (e) {
        $(".test").slick("setPosition");
    });

function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
 
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
    console.log(ev);
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
//   ev.preventDefault();
//   var data = ev.dataTransfer.getData("text");
//   var dropTargetId = ev.target.id;
//   console.log("Dropped element id:", data);
//   console.log("Drop target id:", dropTargetId);

//   var data = ev.dataTransfer.getData("text");
//   ev.target.appendChild(document.getElementById(data));
//   updateLead(data ,dropTargetId);
ev.preventDefault();
  var data = ev.dataTransfer.getData("text");



  var dropTargetId = ev.target.id;

  // Log the id of the dragged element and the id of the drop target
  console.log("Dropped element id:", data);
  console.log("Drop target id:", dropTargetId);

  ev.target.appendChild(document.getElementById(data));
  updateLead(data,dropTargetId);
}

