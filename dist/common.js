/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(window).on("resize", function () {
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
}).trigger("resize");

$("[data-r]").each(function (i, el) {
  if (device == "mobile" && $(el).data("mobile-r") != undefined) {
    var _p = $(el).data("mobile-r");
  } else {
    var _p = $(el).data("r");
  }

  var _st_default = {
    trigger: el,
    start: "top 80%",
    end: "bottom 0%",
    toggleActions: "play none play none"
    // markers: true,
  };

  var _st = Object.assign(_st_default, _p.scrollTrigger);

  var _t = $(el).offset().top;
  var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, "") / 100;

  if (_t <= _hook) {
    _p.delay = _p.delay != undefined ? _p.delay += 1 : 1;
  }

  delete _p.scrollTrigger;

  var _setting = {
    scrollTrigger: _st,
    duration: 1.2,
    // opacity: 0,
    ease: "power2.out"
  };

  if (_p != "" && "stagger" in _p) {
    var $el = $(el).children();
  } else {
    var $el = el;
  }

  var _obj = Object.assign(_setting, _p);

  gsap.from($el, _obj);
});

$("#preload").delay(500).fadeOut(500);

$("[data-share]").each((i, el) => {
  var type = el.dataset.share;
  $(el).click(function (e) {
    e.preventDefault();

    var winHeight = 360;
    var winWidth = 600;
    var winTop = screen.height / 2 - winHeight / 2;
    var winLeft = screen.width / 2 - winWidth / 2;
    var url = $(this).attr("href");

    if (type == "facebook") {
      window.open("https://www.facebook.com/sharer/sharer.php?u=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "twitter") {
      window.open("https://twitter.com/share?url=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "pinterest") {
      window.open("https://www.pinterest.com/pin/create/button/?url=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "googleplus") {
      window.open("https://plus.google.com/share?url=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "linkedin") {
      window.open("https://www.linkedin.com/cws/share?url=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "weibo") {
      window.open("https://service.weibo.com/share/share.php?url=" + url, "sharer", "top=" + winTop + ",left=" + winLeft + ",toolbar=0,status=0,width=" + winWidth + ",height=" + winHeight);
    } else if (type == "line") {
      window.open("https://line.naver.jp/R/msg/text/?" + url);
    } else if (type == "instagram") {
      window.open("https://www.instagram.com/?url=" + url);
    }
  });
});
$("[data-move]").each(function (i, el) {
  var _p = $(el).data("move");
  _p.repeatDelay = _p.repeatDelay != undefined ? _p.repeatDelay : 0;
  gsap.to(el, {
    duration: _p.sec,
    backgroundPosition: "0 100%",
    ease: SteppedEase.config(_p.item),
    repeat: -1,
    repeatDelay: _p.repeatDelay
  });
});

$("[data-hover]").each(function (i, el) {
  var _h = $(el).data("hover");
  _h.repeatDelay = _h.repeatDelay != undefined ? _h.repeatDelay : 0;

  var $hover = gsap.timeline({
    paused: true
  }).to(el, {
    duration: _h.sec,
    backgroundPosition: "0 100%",
    ease: SteppedEase.config(_h.item),
    repeat: -1
    // repeatDelay: _h.repeatDelay
  });

  $(el).parent().mouseenter(function () {
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

mouseTarget.addEventListener("mouseover", e => {
  // if (hoverLock) return;
  hoverLock = 1;
  if (hoverLock == 1) {
    $("nav .bg-hover").addClass("is-show");
    $("nav .menu-hover").addClass("is-show");
  }

  setTimeout(function () {
    hoverLock = 0;
  }, 500);
  console.log(hoverLock);
});

mouseTarget.addEventListener("mouseout", e => {
  // if (hoverLock) return;
  hoverLock = 2;
  if (hoverLock == 2) {
    $("nav .menu-hover").removeClass("is-show");
    $("nav .bg-hover").removeClass("is-show");
  }
  setTimeout(function () {
    hoverLock = 0;
  }, 500);
  console.log(hoverLock);
});

$("footer .top").on("click", function () {
  gsap.to(window, {
    duration: 2,
    scrollTo: 0,
    ease: "power2.inOut"
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

if (window.device == "desktop") {
  ScrollTrigger.create({
    toggleActions: "play pause resume reverse", //重覆觸發
    trigger: ".menu-link",
    endTrigger: ".aboutWrap",
    start: "top 78.5%",
    end: "100% 100%",
    scrub: 1,
    pin: true
    // markers: true,
  });
} else {
  ScrollTrigger.create({
    toggleActions: "play pause resume reverse", //重覆觸發
    trigger: ".menu-link",
    endTrigger: ".aboutWrap",
    start: "top 73%",
    end: "100% 100%",
    scrub: 1,
    pin: true
    // markers: true,
  });
}

/***/ })
/******/ ]);