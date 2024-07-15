$(document).ready(function () {
  //   -----------------------name --------------------
  let flag1 = 1;
  $(document).on("input", "#name", function () {
    var na = /^[A-Za-z ]+$/;
    let name = $("#name").val();
    if (name === "") {
      $("#name").addClass("is-invalid");
      $("#name").removeClass("in1");
      $("#mname").addClass("invalid-feedback");
      $("#mname").text("Name is required and can't be empty");

      flag1 = 0;
    } else if (!na.test(name)) {
      $("#name").addClass("is-invalid");
      $("#name").removeClass("in1");
      $("#mname").addClass("invalid-feedback");
      $("#mname").text("Enter Valid Name");
      flag1 = 0;
    } else {
      $("#name").addClass("in1 is-valid");
      $("#name").removeClass("is-invalid");
      flag1 = 1;
    }
  });

  //  ---------------------------- number ---------------------------
  let flag2 = 1;
  $(document).on("input", "#number", function () {
    let num = /^[6-9]+[0-9]{0,10}$/;
    let number = $("#number").val();
    if (number === "") {
      $("#number").addClass("is-invalid");
      $("#number").removeClass("in1");
      $("#mnumber").addClass("invalid-feedback");
      $("#mnumber").text("Moblie Number is required and can't be empty");
      flag2 = 0;
    } else if (!num.test(number)) {
      $("#number").addClass("is-invalid");
      $("#number").removeClass("in1");
      $("#mnumber").addClass("invalid-feedback");
      $("#mnumber").text("Enter valid Number");
      flag2 = 0;
    } else if (number.length != 10) {
      $("#number").addClass("is-invalid");
      $("#number").removeClass("in1");
      $("#mnumber").addClass("invalid-feedback");
      $("#mnumber").text("The Number must be more than 10 characters");
      flag2 = 0;
    } else {
      $("#number").addClass("in1 is-valid");
      $("#number").removeClass("is-invalid");
      flag2 = 1;
    }
  });

  // -------------------------------- email -----------------------------
  let flag3 = 1;
  $(document).on("input", "#email", function () {
    let em = /^[A-Za-z][A-Za-z0-9._]{3,20}@[A-Za-z0-9]{4,8}.[A-Za-z.]{2,9}$/;
    let email = $("#email").val();
    if (email === "") {
      $("#email").addClass("is-invalid");
      $("#email").removeClass("in1");
      $("#mamail").addClass("invalid-feedback");
      $("#memail").text("Email is required and can't be empty");
      flag3 = 0;
    } else if (!em.test(email)) {
      $("#email").addClass("is-invalid");
      $("#email").removeClass("in1");
      $("#memail").addClass("invalid-feedback");
      $("#memail").text("Enter valid Email");
      flag3 = 0;
    } else {
      $("#email").addClass("in1 is-valid");
      $("#email").removeClass("is-invalid");
      flag3 = 1;
    }
  });

  // -------------------------------------pass-------------------------------------------
  let flag4 = 1;
  var Password = "";
  var comPassword = "";
  comPassword = $("#comPassword").val();
  $(document).on("input", "#Password", function () {
    Password = $("#Password").val();
    if (Password === "") {
      $("#Password").addClass("is-invalid");
      $("#Password").removeClass("in1");
      $("#mPassword").addClass("invalid-feedback");
      $("#mPassword").text("Password is required and can't be empty");
      flag4 = 0;
    } else if (Password.length < 6) {
      $("#Password").addClass("is-invalid");
      $("#Password").removeClass("in1");
      $("#mPassword").addClass("invalid-feedback");
      $("#mPassword").text("The Password must be more than 6 characters long");
      flag4 = 0;
    } else if (Password != comPassword) {
      $("#Password").addClass("is-invalid");
      $("#Password").removeClass("in1");
      $("#mPassword").addClass("invalid-feedback");
      $("#mPassword").text("Password doesn't  macth");
      $("#comPassword").addClass("is-invalid");
      $("#comPassword").removeClass("in1");
      $("#mcomPassword").addClass("invalid-feedback");
      $("#mcomPassword").text("Password doesn't  macth");
      flag4 = 0;
    } else {
      $("#Password").addClass("in1 is-valid");
      $("#Password").removeClass("is-invalid");
      $("#comPassword").addClass("in1 is-valid");
      $("#comPassword").removeClass("is-invalid");
      flag4 = 1;
      flag5 = 1;
    }
  });

  // ----------------------------com pass-----------------
  let flag5 = 1;
  $(document).on("input", "#comPassword", function () {
    comPassword = $("#comPassword").val();
    if (comPassword === "") {
      $("#comPassword").addClass("is-invalid");
      $("#comPassword").removeClass("in1");
      $("#mcomPassword").addClass("invalid-feedback");
      $("#mcomPassword").text("Password is required and can't be empty");
      flag5 = 0;
    } else if (comPassword.length < 6) {
      $("#comPassword").addClass("is-invalid");
      $("#comPassword").removeClass("in1");
      $("#mcomPassword").addClass("invalid-feedback");
      $("#mcomPassword").text(
        "The Password must be more than 6 characters long"
      );
      flag5 = 0;
    } else if (Password != comPassword) {
      $("#comPassword").addClass("is-invalid");
      $("#comPassword").removeClass("in1");
      $("#mcomPassword").addClass("invalid-feedback");
      $("#mcomPassword").text("Password doesn't  macth");
      $("#Password").addClass("is-invalid");
      $("#Password").removeClass("in1");
      $("#mPassword").addClass("invalid-feedback");
      $("#mPassword").text("Password doesn't  macth");
      flag5 = 0;
    } else {
      $("#comPassword").addClass("in1 is-valid");
      $("#comPassword").removeClass("is-invalid");
      $("#Password").addClass("in1 is-valid");
      $("#Password").removeClass("is-invalid");
      flag5 = 1;
      flag4 = 1;
    }
  });

  // ----------------------  all validate ------------------------------

  $(document).on("click", "#sub", function validate() {
    let name = $("#name").val();
    if (name === "") {
      $("#name").addClass("is-invalid");
      $("#name").removeClass("in1");
      $("#mname").addClass("invalid-feedback");
      $("#mname").text("Name is required and can't be empty");
      flag1 = 0;
    }
    let number = $("#number").val();
    if (number === "") {
      $("#number").addClass("is-invalid");
      $("#number").removeClass("in1");
      $("#mnumber").addClass("invalid-feedback");
      $("#mnumber").text("Moblie Number is required and can't be empty");
      flag2 = 0;
    }
    let email = $("#email").val();
    if (email === "") {
      $("#email").addClass("is-invalid");
      $("#email").removeClass("in1");
      $("#memail").addClass("invalid-feedback");
      $("#memail").text("Email is required and can't be empty");
      flag3 = 0;
    }
    let Password = $("#Password").val();
    if (Password === "") {
      $("#Password").addClass("is-invalid");
      $("#Password").removeClass("in1");
      $("#mPassword").addClass("invalid-feedback");
      $("#mPassword").text("Password is required and can't be empty");
      flag4 = 0;
    }
    let comPassword = $("#comPassword").val();
    if (comPassword === "") {
      $("#comPassword").addClass("is-invalid");
      $("#comPassword").removeClass("in1");
      $("#mcomPassword").addClass("invalid-feedback");
      $("#mcomPassword").text("Password is required and can't be empty");
      flag5 = 0;
    }
    if (
      flag1 === 1 &&
      flag2 === 1 &&
      flag3 === 1 &&
      flag4 === 1 &&
      flag5 === 1
    ) {
      return true;
    } else {
      return false;
    }
  });
});
