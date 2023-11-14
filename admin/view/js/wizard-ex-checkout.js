"use strict";
$(function () {
  var e = $(".read-only-ratings");
  e &&
    e.rateYo({
      rtl: isRtl,
      padding: "0px",
      rating: 4,
      starWidth: "20px",
      spacing: "2px",
      starSvg:
        '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" /></svg>',
    });
}),
  (function () {
    window.Helpers.initCustomOptionCheck();
    var e = document.querySelector(".credit-card-mask"),
      o = document.querySelector(".expiry-date-mask"),
      i = document.querySelector(".cvv-code-mask"),
      e =
        (e &&
          new Cleave(e, {
            creditCard: !0,
            onCreditCardTypeChanged: function (e) {
              document.querySelector(".card-type").innerHTML =
                "" != e && "unknown" != e
                  ? '<img src="' +
                    assetsPath +
                    "img/icons/payments/" +
                    e +
                    '-cc.png" height="28"/>'
                  : "";
            },
          }),
        o &&
          new Cleave(o, { date: !0, delimiter: "/", datePattern: ["m", "y"] }),
        i && new Cleave(i, { numeral: !0, numeralPositiveOnly: !0 }),
        document.querySelector("#wizard-checkout"));
    if (null !== e) {
      var o = e.querySelector("#wizard-checkout-form"),
        i = o.querySelector("#checkout-cart"),
        n = o.querySelector("#checkout-address"),
        a = o.querySelector("#checkout-payment"),
        r = o.querySelector("#checkout-confirmation"),
        l = [].slice.call(o.querySelectorAll(".btn-next")),
        o = [].slice.call(o.querySelectorAll(".btn-prev"));
      let t = new Stepper(e, { linear: !1 });
      const s = FormValidation.formValidation(i, {
          fields: {},
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: "",
            }),
            autoFocus: new FormValidation.plugins.AutoFocus(),
            submitButton: new FormValidation.plugins.SubmitButton(),
          },
        }).on("core.form.valid", function () {
          t.next();
        }),
        u = FormValidation.formValidation(n, {
          fields: {},
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: "",
            }),
            autoFocus: new FormValidation.plugins.AutoFocus(),
            submitButton: new FormValidation.plugins.SubmitButton(),
          },
        }).on("core.form.valid", function () {
          t.next();
        }),
        c = FormValidation.formValidation(a, {
          fields: {},
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: "",
            }),
            autoFocus: new FormValidation.plugins.AutoFocus(),
            submitButton: new FormValidation.plugins.SubmitButton(),
          },
        }).on("core.form.valid", function () {
          t.next();
        }),
        d = FormValidation.formValidation(r, {
          fields: {},
          plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            bootstrap5: new FormValidation.plugins.Bootstrap5({
              eleValidClass: "",
              rowSelector: ".col-md-12",
            }),
            autoFocus: new FormValidation.plugins.AutoFocus(),
            submitButton: new FormValidation.plugins.SubmitButton(),
          },
        }).on("core.form.valid", function () {
          alert("Submitted..!!");
        });
      l.forEach((e) => {
        e.addEventListener("click", (e) => {
          switch (t._currentIndex) {
            case 0:
              s.validate();
              break;
            case 1:
              u.validate();
              break;
            case 2:
              c.validate();
              break;
            case 3:
              d.validate();
          }
        });
      }),
        o.forEach((e) => {
          e.addEventListener("click", (e) => {
            switch (t._currentIndex) {
              case 3:
              case 2:
              case 1:
                t.previous();
            }
          });
        });
    }
  })();
