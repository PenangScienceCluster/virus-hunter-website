$(function () {
  $('input[type="file"]').change(function (e) {
    $(".fa-user").css("display", "none");
    $(".uploaded-photo").css("display", "block");
    readURL(this);
  });
  $(".btn-upload").click(function () {
    $('input[type="file"]').trigger("click");
  });

  $("#school_group .dropdown-menu a").on("click", function () {
    var value = $(this).html();
    var id = $(this).attr("id");
    $("#school_group button").html(value);
    $("#school_group input[type=hidden]").val(id);

    $(".display-school").html(value);
  });
  $("#teacher_group .dropdown-menu a").on("click", function () {
    var value = $(this).html();
    var id = $(this).attr("id");
    $("#teacher_group button").html(value);
    $("#teacher_group input[type=hidden]").val(id);
  });

  $("#username").keyup(function () {
    $(".display-username").html($(this).val());
  });

  $("#frm").validate({
    ignore: "",
    rules: {
      email: {
        email: true,
        required: true,
      },
      password: {
        required: true,
        minlength: 6,
      },
    },
    errorClass: "small",
    errorLabelContainer: ".err",
    wrapper: "div",
    submitHandler: function (form) {
      console.log("sdsdsd");
      $(".btn-submit").prop({ disabled: true });
      form.submit();
    },
  });
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $(".photo img").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
