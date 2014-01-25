// Initialize image zooming, but limit that slow selector to links in the post area.
$('.post').find('a[rel=attachment]').colorbox({ rel: 'nofollow' });

// Uno clicko, por favor.
$('#searchform').on('submit', function(evt) {
  // If the search field is empty, bail.
  if (document.getElementById('s').value === '')
    return false;

  // Else
  var searchSubmit = document.getElementById('searchsubmit');

  // Disable the button to prevent double clicks.
  searchSubmit.disabled = true;

  // Show a "not allowed" pointer while submitting the search.
  searchSubmit.style.cursor = 'not-allowed';
});

// Push WordPress usernames and emails into Clicky.
function clicky_get_cookie( name ) {
  var ca = document.cookie.split(';');

  for (var i in ca ) {
    if (ca[i].indexOf( name+'=' ) > -1 ) {
      return decodeURIComponent( ca[i].split('=')[1] );
    }
  }

  // Else
  return '';
}

window.clicky_custom_session = {
  username: clicky_get_cookie('comment_author_f0a237db1cb71445787d907e54df6077'),
  email: clicky_get_cookie('comment_author_email_f0a237db1cb71445787d907e54df6077')
};
