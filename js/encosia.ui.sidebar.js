(function() {
  $.ajax({
    url: '//encosia-popular-posts-api.azurewebsites.net?callback=?',
    dataType: 'jsonp',
    success: function(stats) {
      stats = stats[0].dates[0].items.slice(0, 7);

      var $ul = $('<ul>'),
          max = 0;

      for (var i = 0; i < stats.length; i++) {
        var $li = $('<li>', {
          'data-percentage': stats[i].value_percent,
          css: {
            position: 'relative'
          }
        });

        var $a = $('<a>', {
          href: stats[i].url,
          text: stats[i].title.replace(' | Encosia', '')
        });

        $li.append($a);

        $ul.append($li);

        max = Math.max(max, stats[i].value_percent);
      }

      $ul.data('max-percentage', max);

      $('#MostPopular').append($ul);

      $('#MostPopular').fadeIn(250);

      $('#MostPopular').trigger('stats.loaded');
    }
  });

  $('#MostPopular').on('stats.loaded', function() {
    var max = $(this).find('ul').data('max-percentage');

    $(this).find('li').each(function() {
      var percentage = $(this).data('percentage'),
          width = percentage / max * 100;

      var $bar = $('<div>', {
        'class': 'popularity-bar'
      });

      $(this).prepend($bar);

      setTimeout(function() {
        $bar.animate({ width: width + '%' }, 2000, 'easeOutExpo');
      }, 2000);
    });
  });
})();