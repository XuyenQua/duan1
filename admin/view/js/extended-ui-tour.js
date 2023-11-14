"use strict";
!(function () {
  var t = document.querySelector("#shepherd-example");
  t &&
    (t.onclick = function () {
      var t,
        e,
        a = new Shepherd.Tour({
          defaultStepOptions: { scrollTo: !1, cancelIcon: { enabled: !0 } },
          useModalOverlay: !0,
        });
      (t = "btn btn-sm btn-label-secondary md-btn-flat"),
        (e = "btn btn-sm btn-primary btn-next"),
        (a = a).addStep({
          title: "Navbar",
          text: "This is your navbar",
          attachTo: { element: ".navbar", on: "bottom" },
          buttons: [
            { action: a.cancel, classes: t, text: "Skip" },
            { text: "Next", classes: e, action: a.next },
          ],
        }),
        a.addStep({
          title: "Card",
          text: "This is a card",
          attachTo: { element: ".tour-card", on: "top" },
          buttons: [
            { text: "Skip", classes: t, action: a.cancel },
            { text: "Back", classes: t, action: a.back },
            { text: "Next", classes: e, action: a.next },
          ],
        }),
        a.addStep({
          title: "Footer",
          text: "This is the Footer",
          attachTo: { element: ".footer", on: "top" },
          buttons: [
            { text: "Skip", classes: t, action: a.cancel },
            { text: "Back", classes: t, action: a.back },
            { text: "Next", classes: e, action: a.next },
          ],
        }),
        a.addStep({
          title: "Upgrade",
          text: "Click here to upgrade plan",
          attachTo: { element: ".footer-link", on: "top" },
          buttons: [
            { text: "Back", classes: t, action: a.back },
            { text: "Finish", classes: e, action: a.cancel },
          ],
        }),
        a.start();
    });
  t = document.querySelector("#shepherd-docs-example");
  t &&
    (t.onclick = function () {
      var t,
        e,
        a = new Shepherd.Tour({
          defaultStepOptions: { scrollTo: !1, cancelIcon: { enabled: !0 } },
          useModalOverlay: !0,
        });
      (t = "btn btn-sm btn-label-secondary md-btn-flat"),
        (e = "btn btn-sm btn-primary btn-next"),
        (a = a).addStep({
          title: "Navbar",
          text: "This is your navbar",
          attachTo: { element: ".navbar", on: "bottom" },
          buttons: [
            { action: a.cancel, classes: t, text: "Skip" },
            { text: "Next", classes: e, action: a.next },
          ],
        }),
        a.addStep({
          title: "Footer",
          text: "This is the Footer",
          attachTo: { element: ".footer", on: "top" },
          buttons: [
            { text: "Skip", classes: t, action: a.cancel },
            { text: "Back", classes: t, action: a.back },
            { text: "Next", classes: e, action: a.next },
          ],
        }),
        a.addStep({
          title: "Social Link",
          text: "Click here share on social media",
          attachTo: { element: ".footer-link", on: "top" },
          buttons: [
            { text: "Back", classes: t, action: a.back },
            { text: "Finish", classes: e, action: a.cancel },
          ],
        }),
        a.start();
    });
})();
