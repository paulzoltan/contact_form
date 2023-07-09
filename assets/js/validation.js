const $ = require('jquery')

const name = $('#contact_form_name')[0]
const email = $('#contact_form_email')[0]
const message = $('#contact_form_message')[0]

$('form[name="contact_form"] button').on('click', () => {
  if (name.validity.valueMissing) {
    name.setCustomValidity('Hiba! Kérjük töltsd ki az összes mezőt!')
  } else {
    name.setCustomValidity('')
  }

  if (email.validity.valueMissing) {
    email.setCustomValidity('Hiba! Kérjük töltsd ki az összes mezőt!')
  } else if (email.validity.typeMismatch) {
    email.setCustomValidity('Hiba! Az email cím nem érvényes')
  } else {
    email.setCustomValidity('')
  }

  if (message.validity.valueMissing) {
    message.setCustomValidity('Hiba! Kérjük töltsd ki az összes mezőt!')
  } else {
    message.setCustomValidity('')
  }
})

$(name).on('input', () => {
  if (!name.validity.valueMissing) {
    name.setCustomValidity('')
  }
})
$(email).on('input', () => {
  if (!email.validity.valueMissing && !email.validity.typeMismatch) {
    email.setCustomValidity('')
  }
})
$(message).on('input', () => {
  if (!message.validity.valueMissing) {
    message.setCustomValidity('')
  }
})
