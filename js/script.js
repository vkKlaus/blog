// <![CDATA[
$(function () {

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
  $('#coin-slider').coinslider({ width: 960, height: 320, opacity: 1 });
});


// $('<a>', {
//   text: 'Я контейнер-ссылка',
//   href: 'http://google.com',
//   target: "_blank",
//   css: {
//     color: 'green',
//     backgroundColor: 'black',
//     display: 'block',
//     position: 'relative',
//     padding: '10px',
//   },
//   width: 200,
//   height: 100,
//   offset: {
//     top: 20,
//     left: 120,
//   },
//   on: {
//     click: function (event) {
//       alert('На меня кликнули');
//     },
//     mouseover: function (event) {
//       alert("На меня навели мышку");
//       $(this).off('mouseover');
//     }
//   },
//   append: $('<br>')
//     .add($('<span>',
//       {
//         text: 'Я вставленный html',
//         css: { fontWeight: 'bold' }
//       }))
//     .add($('<br>'))
//     .add($('<span>', {
//       html: '<strong>Мой html задан в параметрах</strong>',
//     })),
// })
//   .appendTo('#wrapper');