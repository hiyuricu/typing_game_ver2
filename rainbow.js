/**
 * rainbow.js
 * Copyright Keisuke Kobayashi 2012
 */
$(document).ready(function(){
  var COLORS = [
    'red', 'orange', 'yellow', 'green', 'blue', 'navy', 'purple'
  ];
  var doms = $('.rainbow');
  doms.each(function (index) {
    var text = $(this).text();
    var html = "";
    for (var i = 0; i < text.length; i++) {
      html += "<span style='color: " + COLORS[i % COLORS.length] + "'>" + text[i] + "</span>";
    }
    $(this).html(html);
  });
});