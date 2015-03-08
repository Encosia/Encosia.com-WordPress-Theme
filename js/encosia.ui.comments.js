$('#add-comment').on('click', function(evt) {
  var $button = $(this);

  $button.find('span').text('Posting...');

  $button.find('.spinner').show();

  this.style.cursor = 'not-allowed';
});