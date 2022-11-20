/************************************************ */
/************* WEB DEV SIMPLIFIED *****************/
/************************************************ */

const signinForm = document.getElementById("signin-form");
const email = document.getElementById("email");
const password = document.getElementById("password");
const errorElement = document.getElementById("error");

signinForm.addEventListener("submit", (e) => {
  let messages = [];

  if (email.value == "" || email.value == null) {
    messages.push("Email is required!");
  }

  if (messages.value > 0) {
    e.preventDefault();
    errorElement.innerText = messages;
  }
});

/************************************************ */
/***********EL ZERO FORM VALIDATION **************/
/************************************************ */

// let email = document.querySelector("[name='email']");
// let password = document.querySelector("[name='password']");

// document.forms[0].onsubmit = function (e) {
//   let emailValid = false;
//   let passwordValid = false;

//   if (emailValid.value != "" && emailValid.length <= 20) {
//     emailValid = true;
//   }
//   if (password.value != "") {
//     passwordValid = true;
//   }

//   if (emailValid == false || passwordValid == false) {
//     e.preventDefault();
//   }
// };
