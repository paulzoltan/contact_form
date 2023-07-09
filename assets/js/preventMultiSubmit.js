const $ = require('jquery')

// preventing multiple submissions when a user clicks the send button multiple times

$('form[name="contact_form"]').on('submit', function (event) {
  const sendButton = $('form[name="contact_form"] button')
  sendButton.prop('disabled', true).html('Küldés...')
})

// preventing multiple submissions when page is refreshed after submition

if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href)
}
