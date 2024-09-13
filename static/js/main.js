import "../css/main.scss";
//------------------------

var discount = ["50", "75"];
var isProcessed = false;

function showResultWindow() {
  setTimeout(function () {
    $(".spin-result-wrapper").css("display", "block");
  }, 2000);
}

let intr,
  time = 600;

function start_timer() {
  intr = setInterval(tick, 1e3);
}

function tick() {
  if (0 < time) {
    time -= 1;
    var e = Math.floor(time / 60),
      t = 10 <= (t = time - 60 * e) ? t : "0" + t;
    if (
      (e < 0 && (e = 0),
      $("#min").html("0" + e),
      $("#sec").html(t),
      0 == e && 0 == t)
    )
      return clearInterval(intr), !1;
  }
}

function showForm() {
  setTimeout(function () {
    $(".amphora").slideUp();

    setTimeout(() => {
      $(".order_block").slideDown();
      start_timer();
    }, 500);
  }, 2000);
}

$(document).ready(function () {
  $(document).on("click", ".amphora__item-img", function () {
    var $parent = $(this).parent();
    var $this = $(this);

    $this.fadeOut("fast");
    $parent.find(".amphora__item-crash").fadeIn();
    setTimeout(() => {
      $(".amphora__subtitle").fadeIn();
    }, 500);
  });

  $(document).on("click", ".amphora__item-crash", function () {
    if (isProcessed) {
      return;
    }
    var $parent = $(this).parent();
    var $this = $(this);

    isProcessed = true;

    $parent.find(".amphora__item-discount").html(`
      <img loading="lazy" src="${filePath}images/shine.png" alt="" class="amphora__item-shine">
      <img loading="lazy" src="${filePath}images/100.png" alt="" class="amphora__item-sale">
    `);
    $this.removeClass("amphora__item-animation amphora__item-crash");
    $parent
      .find(".amphora__item-piece")
      .addClass("amphora__item-piece-animation");

    setTimeout(() => {
      $this.fadeOut();
    }, 1000);

    setTimeout(() => {
      $(".amphora__item-crash").each((index, el) => {
        var $parent = $(el).parent();
        var $this = $(el);

        $parent.find(".amphora__item-img").fadeOut("fast");
        $this.fadeIn();
        $parent.find(".amphora__item-discount").html(`
          <img loading="lazy" src="${filePath}images/${discount.pop()}.png" alt="" class="amphora__item-sale">
        `);
        $this.removeClass("amphora__item-animation amphora__item-crash");
        $parent
          .find(".amphora__item-piece")
          .addClass("amphora__item-piece-animation");

        setTimeout(() => {
          $this.fadeOut();
        }, 500);
      });
    }, 1500);

    setTimeout(() => {
      showResultWindow();
    }, 2000);

    setTimeout(() => {
      isProcessed = false;
      showForm();
    }, 3000);
  });
});

$(".close-popup, .pop-up-button").click(function (e) {
  e.preventDefault();
  $(".spin-result-wrapper").fadeOut();

  let el = $("#roulette");
  if (!el) {
    el = $("#order_form");
  }

  let top = el.offset().top;
  $("body,html").animate({ scrollTop: top }, 800);
});
