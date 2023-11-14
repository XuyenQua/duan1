"use strict";
document.addEventListener("DOMContentLoaded", function (o) {
  FormValidation.formValidation(document.getElementById("addPermissionForm"), {
    fields: {
      modalPermissionName: {
        validators: { notEmpty: { message: "Please enter permission name" } },
      },
    },
    plugins: {
      trigger: new FormValidation.plugins.Trigger(),
      bootstrap5: new FormValidation.plugins.Bootstrap5({
        eleValidClass: "",
        rowSelector: ".col-12",
      }),
      submitButton: new FormValidation.plugins.SubmitButton(),
      autoFocus: new FormValidation.plugins.AutoFocus(),
    },
  });
});
