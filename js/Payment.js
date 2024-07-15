$(document).ready(function () {
  //   -----------------------name --------------------
  let flag1 = 1;
  $(document).on("input", "#pname", function () {
    var na = /^[A-Za-z ]+$/;
    let pname = $("#pname").val();
    if (pname === "") {
      $("#pname").addClass("is-invalid");
      $("#pname").removeClass("in1");
      $("#mpname").addClass("invalid-feedback");
      $("#mpname").text("Name is required and can't be empty");
      flag1 = 0;
    } else if (!na.test(pname)) {
      $("#ppname").addClass("is-invalid");
      $("#npame").removeClass("in1");
      $("#mpname").addClass("invalid-feedback");
      $("#mpname").text("Enter Valid Name");
      flag1 = 0;
    } else {
      $("#pname").addClass("in1 is-valid");
      $("#pname").removeClass("is-invalid");
      flag1 = 1;
    }
  });

  // card------------------------------
  let flag2 = 1;
  $(document).on("input", "#pnumber", function () {
    let pnumber = $("#pnumber").val();
    if (pnumber === "") {
      $("#pnumber").addClass("is-invalid");
      $("#pnumber").removeClass("in1");
      $("#mpnumber").addClass("invalid-feedback");
      $("#mpnumber").text("Card Number is required and can't be empty");
      flag2 = 0;
    } else if (isNaN(pnumber)) {
      $("#pnumber").addClass("is-invalid");
      $("#pnumber").removeClass("in1");
      $("#mpnumber").addClass("invalid-feedback");
      $("#mpnumber").text("Enetr valid crad number");
      flag2 = 0;
    } else if (pnumber.length != 16) {
      $("#pnumber").addClass("is-invalid");
      $("#pnumber").removeClass("in1");
      $("#mpnumber").addClass("invalid-feedback");
      $("#mpnumber").text("The Card Number must 16 characters long");
      flag2 = 0;
    } else {
      $("#pnumber").addClass("in1 is-valid");
      $("#pnumber").removeClass("is-invalid");
      flag2 = 1;
    }
  });

  // ex ----------------------------------
  let flag3 = 1;
  $(document).on("input", "#psel1", function () {
    let psel1 = $("#psel1").val();
    let psel2 = $("#psel2").val();
    let d = new Date();
    if (psel1 === "" || psel2 === "") {
      $("#psel1").addClass("is-invalid");
      $("#psel1").removeClass("in1");
      $("#psel2").addClass("is-invalid");
      $("#psel2").removeClass("in1");
      $("#mpsel").addClass("invalid-feedback d-block");
      $("#mpsel").text("Expiration date is required and can't be empty");
      flag3 = 0;
    } else if (psel2 == d.getFullYear() && psel1 <= d.getMonth()) {
      $("#psel1").addClass("is-invalid");
      $("#psel1").removeClass("in1");
      $("#psel2").addClass("is-invalid");
      $("#psel2").removeClass("in1");
      $("#mpsel").addClass("invalid-feedback d-block");
      $("#mpsel").text("Crad is expired");
      flag3 = 0;
    } else {
      $("#psel1").addClass("in1 is-valid");
      $("#psel1").removeClass("is-invalid");
      $("#psel2").addClass("in1 is-valid");
      $("#psel2").removeClass("is-invalid");
      $("#mpsel").removeClass("invalid-feedback d-block");
      $("#mpsel").addClass("d-none");

      flag3 = 1;
    }
  });

  $(document).on("input", "#psel2", function () {
    let psel1 = $("#psel1").val();
    let psel2 = $("#psel2").val();
    let d = new Date();
    if (psel1 === "" || psel2 === "") {
      $("#psel1").addClass("is-invalid");
      $("#psel1").removeClass("in1");
      $("#psel2").addClass("is-invalid");
      $("#psel2").removeClass("in1");
      $("#mpsel").addClass("invalid-feedback d-block");
      $("#mpsel").text("Expiration date is required and can't be empty");
      flag3 = 0;
    } else if (psel2 == d.getFullYear() && psel1 <= d.getMonth()) {
      $("#psel1").addClass("is-invalid");
      $("#psel1").removeClass("in1");
      $("#psel2").addClass("is-invalid");
      $("#psel2").removeClass("in1");
      $("#mpsel").addClass("invalid-feedback d-block");
      $("#mpsel").text("Crad is expired");
      flag3 = 0;
    } else {
      $("#psel1").addClass("in1 is-valid");
      $("#psel1").removeClass("is-invalid");
      $("#psel2").addClass("in1 is-valid");
      $("#psel2").removeClass("is-invalid");
      $("#mpsel").removeClass("invalid-feedback d-block");
      $("#mpsel").addClass("d-none");

      flag3 = 1;
    }
  });

  // cvv---------------------------------------------
  let flag4 = 1;
  $(document).on("input", "#pcvv", function () {
    let pcvv = $("#pcvv").val();
    if (pcvv === "") {
      $("#pcvv").addClass("is-invalid");
      $("#pcvv").removeClass("in1");
      $("#mpcvv").addClass("invalid-feedback");
      $("#mpcvv").text("CVV is required and can't be empty");
      flag4 = 0;
    } else if (isNaN(pcvv)) {
      $("#pcvv").addClass("is-invalid");
      $("#pcvv").removeClass("in1");
      $("#mpcvv").addClass("invalid-feedback");
      $("#mpcvv").text("Enetr valid CVV number");
      flag4 = 0;
    } else if (pcvv.length != 3) {
      $("#pcvv").addClass("is-invalid");
      $("#pcvv").removeClass("in1");
      $("#mpcvv").addClass("invalid-feedback");
      $("#mpcvv").text("The CVV must 3 characters long");
      flag4 = 0;
    } else {
      $("#pcvv").addClass("in1 is-valid");
      $("#pcvv").removeClass("is-invalid");
      flag4 = 1;
    }
  });

  // all ---------------------------------

  $(document).on("click", "#potp", function validate() {
    let pname = $("#pname").val();
    if (pname === "") {
      $("#pname").addClass("is-invalid");
      $("#pname").removeClass("in1");
      $("#mpname").addClass("invalid-feedback");
      $("#mpname").text("Name is required and can't be empty");
      flag1 = 0;
    }
    let pnumber = $("#pnumber").val();
    if (pnumber === "") {
      $("#pnumber").addClass("is-invalid");
      $("#pnumber").removeClass("in1");
      $("#mpnumber").addClass("invalid-feedback");
      $("#mpnumber").text("Card Number is required and can't be empty");
      flag2 = 0;
    }
    let psel1 = $("#psel1").val();
    let psel2 = $("#psel2").val();
    if (psel1 === "" || psel2 === "") {
      $("#psel1").addClass("is-invalid");
      $("#psel1").removeClass("in1");
      $("#psel2").addClass("is-invalid");
      $("#psel2").removeClass("in1");
      $("#mpsel").addClass("invalid-feedback d-block");
      $("#mpsel").text("Expiration date is required and can't be empty");
      flag3 = 0;
    }

    let pcvv = $("#pcvv").val();
    if (pcvv === "") {
      $("#pcvv").addClass("is-invalid");
      $("#pcvv").removeClass("in1");
      $("#mpcvv").addClass("invalid-feedback");
      $("#mpcvv").text("CVV is required and can't be empty");
      flag4 = 0;
    }

    if (flag1 === 1 && flag2 === 1 && flag3 === 1 && flag4 === 1) {
      $("#potp").addClass("d-none");
      $("#hide").removeClass("d-none");
      $("#pname").prop("disabled", true);
      $("#pnumber").prop("disabled", true);
      $("#psel1").prop("disabled", true);
      $("#psel2").prop("disabled", true);
      $("#pcvv").prop("disabled", true);
    } else {
      return false;
    }
  });
});
