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

$('.comment-reply-link').on('click', function(evt) {
  evt.preventDefault();

  var commentId = $(this).closest('.comment').attr('id').substring(8),
      postId = $(this).closest('.post').attr('id').substring(5);

  addComment.moveForm('comment-' + commentId, commentId, 'respond', postId);
});