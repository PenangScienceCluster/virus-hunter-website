$(function () {
  $("#frm").validate({
    rules: {
      password: {
        required: true,
        minlength: 1,
      },
    },
    errorClass: "small",
    errorLabelContainer: ".err",
    wrapper: "div",
    submitHandler: function (form) {
      $(".btn-submit").prop({ disabled: true });
      form.submit();
    },
  });
});
