function validateemail() {
  var email = document.getElementById("email").value;
  var vv =
    /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (email == "") {
    alert("email is missing");
    return;
  }
  if (!email.includes("@")) {
    alert("@ missing");
    return;
  }
  if (email.match(vv)) {
    alert("valid email");
    return;
  }
  if (email.length > 8) {
    alert("email too long");
    return;
  }
}
