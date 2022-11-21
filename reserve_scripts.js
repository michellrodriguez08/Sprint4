// // js for auto-formatting phone number - step 1
// function formatPhoneNumber1() {
//     // retrieve value of what user is typing and get by element ID
//     let inputField = document.getElementById('phone');

//     // format input with the `formatPhoneNumber2` function.
//     let inputValue = formatPhoneNumber2(inputField.value);

//     // set the value of the inputField to the inputValue
//     inputField.value = inputValue;
// }

// // js for auto-formatting phone number - step 2
// function formatPhoneNumber2(value) {
//   // if input value is false, then just return
//   if (!value) return value;

//   // clean input for non-digit values
//   let phoneNumber = value.replace(/[^\d]/g, '');

//   // set phone number length
//   let phoneNumberLength = phoneNumber.length;

//   // return the value with no formatting if its less than four digits
//   if (phoneNumberLength < 4) return phoneNumber;

//   // if phoneNumberLength is greater than 4 and less the 7, start typing formatted number
//   if (phoneNumberLength < 7) {
//       return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(3)}`;
//   }

//   // if the phoneNumberLength is greater then seven, we add the last
//   // bit of formatting and return it.
//   return `(${phoneNumber.slice(0, 3)}) ${phoneNumber.slice(
//       3,
//       6
//   )}-${phoneNumber.slice(6, 9)}`;
// }

// // validate phone number
// function phoneValidation(input_str) {
//   let num = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

//   return num.test(input_str);
// }

// function validateForm(event) {
//   let phone = document.getElementById('phone').value;
//   if (!phoneValidation(phone)) {
//     document.getElementById('error_phone').classList.remove('hidden');
//   } else {
//     document.getElementById('error_phone').classList.add('hidden');
//     return true;
//   }
//   event.preventDefault();
// }
// document.getElementById('myform').addEventListener('submit', validateForm);