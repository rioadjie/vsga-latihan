const pwShowHide = document.querySelectorAll(".pw_hide");


pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("fa-eye", "fa-eye-slash");
    }
  });
});

function validateForm(event) {
  event.preventDefault();
  let email = document.forms["myForm"]["email"].value;
  let password = document.forms["myForm"]["password"].value;
  let errors = document.getElementById("error").innerHTML;

  if(email === ""){
      errors.innerHTML = "Email tidak boleh kosong";
  } else if(password === "") {
      errors.innerHTML = "Password tidak boleh kosong";
  } else if (email === "rio@gmail.com" && password === "1234") {
      alert("Congratulations, Login Successfully!");
  } else {
      alert("Login Failed!!");
  }
}

