$(function () {
  $("#frm").validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
    },
    errorClass: "small",
    errorLabelContainer: ".err",
    wrapper: "div",
    submitHandler: function (form) {
      form.submit();
    },
  });
});
