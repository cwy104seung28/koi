class RyderMarqueetoLeft {
  constructor(el, direct) {
    this.hero = $(el)
      .parent()
      .get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 2;
    this.direct = direct % 1;
    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect()
        .width / 2}px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }
  }
  animate() {
    this.transform += this.step;
    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }
  render() {
    this.scrollY = $(window).scrollTop();
    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);
    if (percentage > 0 && percentage < 100) {
      this.animate();
    }
  }
  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}
class RyderMarqueetoLeft1 {
  constructor(el, direct) {
    this.hero = $(el)
      .parent()
      .get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 1;
    this.direct = direct % 1;
    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect()
        .width / 2}px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }
  }
  animate() {
    this.transform += this.step;
    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }
  render() {
    this.scrollY = $(window).scrollTop();
    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);
    if (percentage > 0 && percentage < 100) {
      this.animate();
    }
  }
  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}
class RyderMarqueetoLeft2 {
  constructor(el, direct) {
    this.hero = $(el)
      .parent()
      .get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 1.5;
    this.direct = direct % 1;
    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect()
        .width / 2}px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }
  }
  animate() {
    this.transform += this.step;
    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }
  render() {
    this.scrollY = $(window).scrollTop();
    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);
    if (percentage > 0 && percentage < 100) {
      this.animate();
    }
  }
  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}
class RyderMarqueetoLeft3 {
  constructor(el, direct) {
    this.hero = $(el)
      .parent()
      .get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 2;
    this.direct = direct % 1;
    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect()
        .width / 2}px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }
  }
  animate() {
    this.transform += this.step;
    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }
  render() {
    this.scrollY = $(window).scrollTop();
    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);
    if (percentage > 0 && percentage < 100) {
      this.animate();
    }
  }
  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}
class RyderMarqueetoLeft4 {
  constructor(el, direct) {
    this.hero = $(el)
      .parent()
      .get(0);
    this.wrapper = el;
    this.delta = 0;
    this.transform = 0;
    this.step = 3;
    this.direct = direct % 1;
    if (this.direct == 1) {
      this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect()
        .width / 2}px, 0, 0)`;
      this.transform = -this.wrapper.getBoundingClientRect().width / 2;
    }
  }
  animate() {
    this.transform += this.step;
    if (this.direct == 1) {
      if (this.transform > 0) {
        this.transform = -this.wrapper.getBoundingClientRect().width / 2;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    } else {
      if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
        this.transform = 0;
      }
      this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
    }
  }
  render() {
    this.scrollY = $(window).scrollTop();
    const bounding = this.hero.getBoundingClientRect();
    const distance =
      window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
    const percentage =
      distance / ((window.innerHeight + bounding.height) / 100);
    if (percentage > 0 && percentage < 100) {
      this.animate();
    }
  }
  create() {
    gsap.ticker.add(this.render.bind(this));
  }
}

$(".marquee-left").each(function(i, el) {
  var $copy = $(el)
    .contents()
    .clone();
  $(el).append($copy);
  var ryderMarquee = new RyderMarqueetoLeft(el, i).create();
});
$(".marquee-1").each(function(i, el) {
  var $copy = $(el)
    .contents()
    .clone();
  $(el).append($copy);
  var ryderMarquee = new RyderMarqueetoLeft1(el, i).create();
});
$(".marquee-2").each(function(i, el) {
  var $copy = $(el)
    .contents()
    .clone();
  $(el).append($copy);
  var ryderMarquee = new RyderMarqueetoLeft2(el, i).create();
});

$(".marquee-3").each(function(i, el) {
  var $copy = $(el)
    .contents()
    .clone();
  $(el).append($copy);
  var ryderMarquee = new RyderMarqueetoLeft3(el, i).create();
});
$(".marquee-4").each(function(i, el) {
  var $copy = $(el)
    .contents()
    .clone();
  $(el).append($copy);
  var ryderMarquee = new RyderMarqueetoLeft4(el, i).create();
});

$(window)
  .on("resize", function() {
    if ($(this).width() > 1025) {
      if (window.device == "mobile") {
        location.reload();
      }
      window.device = "desktop";
    } else {
      if (window.device == "desktop") {
        location.reload();
      }
      window.device = "mobile";
    }
  })
  .trigger("resize");

$("[data-r]").each(function(i, el) {
  if (device == "mobile" && $(el).data("mobile-r") != undefined) {
    var _p = $(el).data("mobile-r");
  } else {
    var _p = $(el).data("r");
  }

  var _st_default = {
    trigger: el,
    start: "top 80%",
    end: "bottom 0%",
    toggleActions: "play none play none",
    // markers: true,
  };

  var _st = Object.assign(_st_default, _p.scrollTrigger);

  var _t = $(el).offset().top;
  var _hook = ($(window).height() * _st.start.replace(/[^0-9]/g, "")) / 100;

  if (_t <= _hook) {
    _p.delay = _p.delay != undefined ? (_p.delay += 1) : 1;
  }

  delete _p.scrollTrigger;

  var _setting = {
    scrollTrigger: _st,
    duration: 1.2,
    // opacity: 0,
    ease: "power2.out",
  };

  if (_p != "" && "stagger" in _p) {
    var $el = $(el).children();
  } else {
    var $el = el;
  }

  var _obj = Object.assign(_setting, _p);

  gsap.from($el, _obj);
});

$("#preload")
  .delay(500)
  .fadeOut(500);

$("[data-share]").each((i, el) => {
  var type = el.dataset.share;
  $(el).click(function(e) {
    e.preventDefault();

    var winHeight = 360;
    var winWidth = 600;
    var winTop = screen.height / 2 - winHeight / 2;
    var winLeft = screen.width / 2 - winWidth / 2;
    var url = $(this).attr("href");

    if (type == "facebook") {
      window.open(
        "https://www.facebook.com/sharer/sharer.php?u=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "twitter") {
      window.open(
        "https://twitter.com/share?url=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "pinterest") {
      window.open(
        "https://www.pinterest.com/pin/create/button/?url=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "googleplus") {
      window.open(
        "https://plus.google.com/share?url=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "linkedin") {
      window.open(
        "https://www.linkedin.com/cws/share?url=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "weibo") {
      window.open(
        "https://service.weibo.com/share/share.php?url=" + url,
        "sharer",
        "top=" +
          winTop +
          ",left=" +
          winLeft +
          ",toolbar=0,status=0,width=" +
          winWidth +
          ",height=" +
          winHeight
      );
    } else if (type == "line") {
      window.open("https://line.naver.jp/R/msg/text/?" + url);
    } else if (type == "instagram") {
      window.open("https://www.instagram.com/?url=" + url);
    }
  });
});
// $("[data-move]").each(function(i, el) {
//   var _p = $(el).data("move");
//   _p.repeatDelay = _p.repeatDelay != undefined ? _p.repeatDelay : 0;
//   gsap.to(el, {
//     duration: _p.sec,
//     backgroundPosition: "0 100%",
//     ease: SteppedEase.config(_p.item),
//     repeat: -1,
//     repeatDelay: _p.repeatDelay,
//   });
// });

$("[data-hover]").each(function(i, el) {
  var _h = $(el).data("hover");
  _h.repeatDelay = _h.repeatDelay != undefined ? _h.repeatDelay : 0;

  var $hover = gsap
    .timeline({
      paused: true,
    })
    .to(el, {
      duration: _h.sec,
      backgroundPosition: "0 100%",
      ease: SteppedEase.config(_h.item),
      repeat: -1,
      // repeatDelay: _h.repeatDelay
    });

  $(el)
    .parent()
    .mouseenter(function() {
      $hover.restart();
      $(".hover-arrow .stop").addClass("not-show");
    });

  // gsap.to(el, {
  // 	duration: _h.sec,
  // 	backgroundPosition: "0 100%",
  // 	ease: SteppedEase.config(_h.item),
  // 	repeat: -1,
  // 	repeatDelay: _h.repeatDelay
  // });
});

const mouseTarget = document.getElementById("mouseTarget");
var hoverLock = 0;

mouseTarget.addEventListener("mouseover", (e) => {
  // if (hoverLock) return;
  hoverLock = 1;
  if (hoverLock == 1) {
    $("nav .bg-hover").addClass("is-show");
    $("nav .menu-hover").addClass("is-show");
  }

  setTimeout(function() {
    hoverLock = 0;
  }, 500);
  console.log(hoverLock);
});

mouseTarget.addEventListener("mouseout", (e) => {
  // if (hoverLock) return;
  hoverLock = 2;
  if (hoverLock == 2) {
    $("nav .menu-hover").removeClass("is-show");
    $("nav .bg-hover").removeClass("is-show");
  }
  setTimeout(function() {
    hoverLock = 0;
  }, 500);
  console.log(hoverLock);
});

$("footer .top").on("click", function() {
  gsap.to(window, {
    duration: 2,
    scrollTo: 0,
    ease: "power2.inOut",
  });
});
// mouseTarget.addEventListener("mouseover", (e) => {
// 	if (hoverLock) return;
// 	hoverLock = true;
// 	$('nav .bg-hover').addClass('is-show');
// 	$('nav .menu-hover').addClass('is-show');

// 	setTimeout(function () {
// 		hoverLock = false;
// 	}, 500);
// 	console.log(hoverLock);
// });

// mouseTarget.addEventListener("mouseout", (e) => {
// 	if (hoverLock) return;
// 	hoverLock = true;
// 	$('nav .menu-hover').removeClass('is-show');
// 	$('nav .bg-hover').removeClass('is-show');
// 	setTimeout(function () {
// 		hoverLock = false;
// 	}, 500);
// 	console.log(hoverLock);
// });

// $('nav .menuWrap').hover(function () {
// 	$('nav .bg-hover').addClass('is-show');
// 	gsap.delayedCall(0.2, function() {
// 		$('nav .circle-hover').addClass('is-show');
// 	});
// }, function () {
// 	$('nav .menu-hover').removeClass('is-show');
// 	gsap.delayedCall(0.2, function() {
// 		$('nav .bg-hover').removeClass('is-show');
// 	});
// });

// if (window.device == "desktop") {
//   ScrollTrigger.create({
//     toggleActions: "play pause resume reverse", //重覆觸發
//     trigger: ".menu-link",
//     endTrigger: ".aboutWrap",
//     start: "top 78.5%",
//     end: "100% 100%",
//     scrub: 1,
//     pin: true,
//     // markers: true,
//   });
// } else {
//   ScrollTrigger.create({
//     toggleActions: "play pause resume reverse", //重覆觸發
//     trigger: ".menu-link",
//     endTrigger: ".aboutWrap",
//     start: "top 73%",
//     end: "100% 100%",
//     scrub: 1,
//     pin: true,
//     // markers: true,
//   });
// }
$(".hamburger").click(function(e) {
  $(".bg-hover").addClass("is-show");
  $(".menu-mobileWrap .menu").addClass("is-show");
  $('html').addClass("is-lock");
});
$(".menu-mobileWrap .close").click(function(e) {
  $(".bg-hover").removeClass("is-show");
  $(".menu-mobileWrap .menu").removeClass("is-show");
  $('html').removeClass("is-lock");
});

