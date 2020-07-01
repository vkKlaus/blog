// <![CDATA[
$(document).ready(function () {

  //titleSlider
  var title = JSON.parse($.ajax({
    url: '/module/get_themes.php',
    method: 'post',
    async: false,
    dataType: 'json',
    success: function (data) {
      return data;
    }
  }).responseText);

  console
  title.forEach(element => {
    let link= $('<a>', {
      href: '#',
    }
    );
    
    $('<img>',{
      src:element['images'],
      width:'920',
       height:'360',
      alt:element['name'],
    }).appendTo(link);
    
    $('<span>',{
      html:'<big>'+element['title']+'</big><br>'+element['text'],
    }).appendTo(link);

    link.appendTo('#coin-slider');
  });


  // Slider
  $('#coin-slider').coinslider({ width: 960, height: 320, opacity: 0.7,delay: 3500, sDelay: 20,effect: 'random', });

  
});

