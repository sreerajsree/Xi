// login
function displayPass() {
  let x = document.getElementById("passwordLogin");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
}

function displayConfirmPass() {
  let x = document.getElementById("confirm-password");
  if (x.type === "password") {
      x.type = "text";
  } else {
      x.type = "password";
  }
}

//   register
function switchDisplay() {
  let profilePic = document.getElementById("submitProfilePicture");
  let pInfo = document.getElementById("personalInfo");

  if (profilePic.style.display === "none" || pInfo.style.display === "block") {
      profilePic.style.display = "block";
      pInfo.style.display = "none";

  }
  else if (profilePic.style.display === "block" || pInfo.style.display === "none") {
      profilePic.style.display = "none";
      pInfo.style.display = "block";
  }
}

let lowerCase = /[a-z]/g;
let upperCase = /[A-Z]/g;
let number = /[0-9]/g;

// changePassword
function confirmChangePass() {
  let newPass = document.getElementById("newPassword");
  let confirmNewPass = document.getElementById("confirmNewPassword");
  let btnConfirmPass = document.getElementById("submitConfirmPass");
  if (newPass.value != confirmNewPass.value) {
      btnConfirmPass.type = "button";
      alert("Confirmation Password and Password doen't Match!");
  }
  else if (newPass.value === confirmNewPass.value) {
      btnConfirmPass.type = "submit";
  }
}

// carousel
$('.one-time').slick({
  dots: true,
  infinite: true,
  speed: 350,
  slidesToShow: 1,
  adaptiveHeight: true,
  arrows: false,
  autoplay: true,
  autoplaySpeed: 3000
});

function popUpBlue() {
  let pop = document.getElementById("profilePopUpBlue");
  if (pop.style.display === "none") {
      pop.style.display = "block";
  } else {
      pop.style.display = "none";
  }
}

function popUpWhite() {
  let pop = document.getElementById("profilePopUpWhite");
  if (pop.style.display === "none") {
      pop.style.display = "block";
  } else {
      pop.style.display = "none";
  }
}

$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
      $('#noRegisBlue').css('display', 'none');
  } else {
      $('#noRegisBlue').css('display', 'flex');
  }
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
      $('#noregisWhite').css('display', 'flex');
  } else {
      $('#noregisWhite').css('display', 'none');
  }
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
      $('#regisBlue').css('display', 'none');
  } else {
      $('#regisBlue').css('display', 'flex');
  }
});

$(window).scroll(function () {
  if ($(window).scrollTop() > 500) {
      $('#regisWhite').css('display', 'flex');
  } else {
      $('#regisWhite').css('display', 'none');
  }
});