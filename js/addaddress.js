$(document).ready(function () {
  //   -----------------------name --------------------
  let flag1 = 1;
  $(document).on("input", "#house", function () {
    let house = $("#house").val();
    if (house === "") {
      $("#house").addClass("is-invalid");
      $("#mhouse").addClass("invalid-feedback");
      $("#mhouse").text("House No is required and can't be empty");
      flag1 = 0;
    } else {
      $("#house").addClass(" is-valid");
      $("#house").removeClass("is-invalid");
      flag1 = 1;
    }
  });
  //   -------------------------------------------------
  let flag2 = 1;
  $(document).on("input", "#street", function () {
    let street = $("#street").val();
    if (street === "") {
      $("#street").addClass("is-invalid");
      $("#mstreet").addClass("invalid-feedback");
      $("#mstreet").text("Street is required and can't be empty");
      flag2 = 0;
    } else {
      $("#street").addClass(" is-valid");
      $("#street").removeClass("is-invalid");
      flag2 = 1;
    }
  });
  // -----------------------------------------------------
  let flag3 = 1;
  $(document).on("input", "#city", function () {
    let city = $("#city").val();
    if (city === "") {
      $("#city").addClass("is-invalid");
      $("#mcity").addClass("invalid-feedback");
      $("#mcity").text("City is required and can't be empty");
      flag3 = 0;
    } else {
      $("#city").addClass(" is-valid");
      $("#city").removeClass("is-invalid");
      flag3 = 1;
    }
  });
  // -------------------------------------------------------------
  let flag4 = 1;
  $(document).on("input", "#district", function () {
    let district = $("#district").val();
    if (district === "") {
      $("#district").addClass("is-invalid");
      $("#mdistrict").addClass("invalid-feedback");
      $("#mdistrict").text("district is required and can't be empty");
      flag4 = 0;
    } else {
      $("#district").addClass(" is-valid");
      $("#district").removeClass("is-invalid");
      flag4 = 1;
    }
  });
  //   ------------------------------------------------------------------
  let flag5 = 1;
  $(document).on("input", "#pin", function () {
    let pin = $("#pin").val();
    if (pin === "") {
      $("#pin").addClass("is-invalid");
      $("#mpin").addClass("invalid-feedback");
      $("#mpin").text("Pincode is required and can't be empty");
      flag5 = 0;
    } else if (isNaN(pin)) {
      $("#pin").addClass("is-invalid");
      $("#mpin").addClass("invalid-feedback");
      $("#mpin").text("Enter Valid Pincode");
      flag5 = 0;
    } else if (pin.length !== 6) {
      $("#pin").addClass("is-invalid");
      $("#mpin").addClass("invalid-feedback");
      $("#mpin").text("The pincode must be 6 characters ");
      flag5 = 0;
    } else {
      $("#pin").addClass(" is-valid");
      $("#pin").removeClass("is-invalid");
      flag5 = 1;
    }
  });
});
