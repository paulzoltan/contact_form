window.validate = (input) => {
  const validityState = input.validity
  console.log(validityState)
  if (validityState.valueMissing) {
    input.setCustomValidity('Hiba! Kérjük töltsd ki az összes mezőt!')
  } else if (validityState.typeMismatch) {
    input.setCustomValidity('Hiba! Az email cím nem érvényes')
  } else {
    input.setCustomValidity('')
  }
}
