(function() {
  $.ajax({
    url: 'http://encosia-popular-posts-api.azurewebsites.net?callback=?',
    dataType: 'jsonp',
    success: function(stats) {
      stats = stats[0].dates[0].items;

      var $ul = $('<ul>');

      for (var i = 0; i < stats.length; i++) {
        var $li = $('<li>', {
          'data-percentage': stats[i].value_percent
        });

        var $a = $('<a>', {
          href: stats[i].url,
          text: stats[i].title.replace(' | Encosia', '')
        });

        $li.append($a);

        $ul.append($li);
      }

      $('#MostPopular').after($ul);

      $('#MostPopular').parent().fadeIn(250);
    }
  });
})();