$('#add-comment').on('click', function(evt) {
  var $button = $(this);

  $button.find('span').text('Posting...');

  $button.find('.spinner').show();

  setTimeout(function() {
    $button.attr('disabled', 'disabled');
  }, 0);

  this.style.cursor = 'not-allowed';

  evt.preventDefault();
});