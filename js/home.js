"use strict";

var newsSwiper;

(function () {
  // Bus Station Swiper //
  var busSwiper = new Swiper('.swiper-bus-station', {
    slidesPerView: 2,
    spaceBetween: 0,
    slidesPerGroup: 2,
    slidesPerGroupSkip: 0,
    followFinger: false,
    navigation: {
      nextEl: '.swiper-bus-next',
      prevEl: '.swiper-bus-prev'
    },
    pagination: {
      el: '.bus-pagination',
      clickable: true
    }
  }); // Left Bus Station Swiper //

  var busLeftSwiper = new Swiper('.swiper-bus-station-left', {
    allowTouchMove: false
  }); // Right Bus Station Swiper //

  var busRightSwiper = new Swiper('.swiper-bus-station-right', {
    allowTouchMove: false
  });
  busSwiper.on('slideNextTransitionStart', function () {
    busLeftSwiper.slideNext();
    busRightSwiper.slideNext();
  });
  busSwiper.on('slidePrevTransitionStart', function () {
    busLeftSwiper.slidePrev();
    busRightSwiper.slidePrev();
  });
})(); // Adjust left swiper container //


(function () {
  var maxWidth = 1600;
  var lSwiper = document.getElementById('bus-left-swiper');
  var lSwiperOffsetAtMaxWidth = 202;
  var rSwiper = document.getElementById('bus-right-swiper');
  var rSwiperOffsetAtMaxWidth = 202;
  var prevBtn = document.getElementById('bus-prev-btn');
  var prevBtnOffset = 290;
  var nextBtn = document.getElementById('bus-next-btn');
  var nextBtnOffset = 290; // Adjust offset when load //

  adjustSwiperOffset(); // Adjust offset when client width changes //

  window.addEventListener('resize', function () {
    adjustSwiperOffset();
  });

  function adjustSwiperOffset() {
    lSwiper && adjustOffset(lSwiper, lSwiperOffsetAtMaxWidth, 'left')();
    rSwiper && adjustOffset(rSwiper, rSwiperOffsetAtMaxWidth, 'right')();
    prevBtn && adjustOffset(prevBtn, prevBtnOffset, 'left')();
    nextBtn && adjustOffset(nextBtn, nextBtnOffset, 'right')();
  }

  function adjustOffset(elem, offset, side) {
    return function () {
      var diffWith = maxWidth - document.documentElement.clientWidth;

      if (!elem) {
        return;
      }

      if (diffWith > 0) {
        elem.style[side] = (offset - diffWith / 2).toString() + 'px';
      } else {
        elem.style[side] = offset.toString() + 'px';
      }
    };
  }
})();

"use strict";

(function () {
  var contents = [{
    image: '/assets/images/example_image/content02.png',
    date: '25 ???.???. 2562',
    read: 456,
    share: 321,
    title: '?????????????????????????????????????????????????????????????????? World Robocup 2019',
    desc: '?????????????????????????????????????????????????????????????????? ????????? SKUBA ??????????????????????????????????????? ??????????????????????????????????????? Robocup 2019 ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????'
  }, {
    image: '/assets/images/example_image/content01.png',
    date: '15 ???.???. 2563',
    read: 568,
    share: 355,
    title: 'Run for Andaman 2019  International',
    desc: '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Run for Andaman 2019 International Ultra-marathon ???????????????????????? 22 ????????????????????? 2562 ??? ????????????????????????????????????????????? ???. ???????????????'
  }, {
    image: '/assets/images/example_image/content02.png',
    date: '25 ???.???. 2562',
    read: 456,
    share: 321,
    title: '?????????????????????????????????????????????????????????????????? World Robocup 2019',
    desc: '?????????????????????????????????????????????????????????????????? ????????? SKUBA ??????????????????????????????????????? ??????????????????????????????????????? Robocup 2019 ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????'
  }, {
    image: '/assets/images/example_image/content01.png',
    date: '15 ???.???. 2563',
    read: 568,
    share: 355,
    title: 'Run for Andaman 2019  International',
    desc: '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Run for Andaman 2019 International Ultra-marathon ???????????????????????? 22 ????????????????????? 2562 ??? ????????????????????????????????????????????? ???. ???????????????'
  }, {
    image: '/assets/images/example_image/content02.png',
    date: '25 ???.???. 2562',
    read: 456,
    share: 321,
    title: '?????????????????????????????????????????????????????????????????? World Robocup 2019',
    desc: '?????????????????????????????????????????????????????????????????? ????????? SKUBA ??????????????????????????????????????? ??????????????????????????????????????? Robocup 2019 ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????'
  }, {
    image: '/assets/images/example_image/content01.png',
    date: '15 ???.???. 2563',
    read: 568,
    share: 355,
    title: 'Run for Andaman 2019  International',
    desc: '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Run for Andaman 2019 International Ultra-marathon ???????????????????????? 22 ????????????????????? 2562 ??? ????????????????????????????????????????????? ???. ???????????????'
  }, {
    image: '/assets/images/example_image/content02.png',
    date: '25 ???.???. 2562',
    read: 456,
    share: 321,
    title: '?????????????????????????????????????????????????????????????????? World Robocup 2019',
    desc: '?????????????????????????????????????????????????????????????????? ????????? SKUBA ??????????????????????????????????????? ??????????????????????????????????????? Robocup 2019 ?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????'
  }, {
    image: '/assets/images/example_image/content01.png',
    date: '15 ???.???. 2563',
    read: 568,
    share: 355,
    title: 'Run for Andaman 2019  International',
    desc: '??????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????? Run for Andaman 2019 International Ultra-marathon ???????????????????????? 22 ????????????????????? 2562 ??? ????????????????????????????????????????????? ???. ???????????????'
  }];
  var slideWrapper = document.querySelector('.swiper-news .swiper-wrapper');

  if (!slideWrapper) {
    console.log('swiper-news not founc');
    return;
  }
/*
  contents.forEach(function (content) {
    var newSlide = "\n        <div class=\"swiper-slide news-slide\">\n                <div class=\"img\">\n                    <img src=\"" + content.image + "\" alt=\"\"/>\n                </div>\n                <div class=\"info d-flex justify-content-between pt-3 pl-3 pr-3 pb-1\">\n                    <div class=\"date\">" + content.date + "</div>\n                    <div class=\"stat d-flex\">\n                        <span class=\"mr-2\">\n                            <span class=\"mr-2\">\n                                <i class=\"fas fa-book-open\"></i>\n                            </span>\n                            <span>" + content.read + "</span>\n                        </span>\n                        <span class=\"ml-2\">\n                            <span class=\"mr-2\">\n                                 <i class=\"fas fa-share-alt\"></i>\n                            </span>\n                            <span>" + content.share + "</span>\n                        </span>\n                    </div>\n                </div>\n                <div class=\"content pt-2 pl-3 pr-3 pb-3\">\n                    <div class=\"news-title\">" + content.title + "</div>\n                    <div class=\"pt-2\">\n                       <p>\n                       " + content.desc + "\n                       </p>\n                    </div>\n                </div>\n            </div>\n        ";
    slideWrapper.innerHTML += newSlide;
  });*/
 // newsSwiper.update();
})();
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImhvbWUtbWFpbi1zd2lwZXIuanMiLCJpbnNlcnQtbmV3cy1zbGlkZS5qcyJdLCJuYW1lcyI6WyJuZXdzU3dpcGVyIiwiYnVzU3dpcGVyIiwiU3dpcGVyIiwic2xpZGVzUGVyVmlldyIsInNwYWNlQmV0d2VlbiIsInNsaWRlc1Blckdyb3VwIiwic2xpZGVzUGVyR3JvdXBTa2lwIiwiZm9sbG93RmluZ2VyIiwibmF2aWdhdGlvbiIsIm5leHRFbCIsInByZXZFbCIsInBhZ2luYXRpb24iLCJlbCIsImNsaWNrYWJsZSIsImJ1c0xlZnRTd2lwZXIiLCJhbGxvd1RvdWNoTW92ZSIsImJ1c1JpZ2h0U3dpcGVyIiwib24iLCJzbGlkZU5leHQiLCJzbGlkZVByZXYiLCJtYXhXaWR0aCIsImxTd2lwZXIiLCJkb2N1bWVudCIsImdldEVsZW1lbnRCeUlkIiwibFN3aXBlck9mZnNldEF0TWF4V2lkdGgiLCJyU3dpcGVyIiwiclN3aXBlck9mZnNldEF0TWF4V2lkdGgiLCJwcmV2QnRuIiwicHJldkJ0bk9mZnNldCIsIm5leHRCdG4iLCJuZXh0QnRuT2Zmc2V0IiwiYWRqdXN0U3dpcGVyT2Zmc2V0Iiwid2luZG93IiwiYWRkRXZlbnRMaXN0ZW5lciIsImFkanVzdE9mZnNldCIsImVsZW0iLCJvZmZzZXQiLCJzaWRlIiwiZGlmZldpdGgiLCJkb2N1bWVudEVsZW1lbnQiLCJjbGllbnRXaWR0aCIsInN0eWxlIiwidG9TdHJpbmciLCJjb250ZW50cyIsImltYWdlIiwiZGF0ZSIsInJlYWQiLCJzaGFyZSIsInRpdGxlIiwiZGVzYyIsInNsaWRlV3JhcHBlciIsInF1ZXJ5U2VsZWN0b3IiLCJjb25zb2xlIiwibG9nIiwiZm9yRWFjaCIsImNvbnRlbnQiLCJuZXdTbGlkZSIsImlubmVySFRNTCIsInVwZGF0ZSJdLCJtYXBwaW5ncyI6IkFBQUE7O0FBQ0EsSUFBQUEsVUFBQTs7QUFDQSxDQUFBLFlBQUE7QUFDQTtBQUNBLE1BQUFDLFNBQUEsR0FBQSxJQUFBQyxNQUFBLENBQUEscUJB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LEVBQUE7QUFDQSxRQUFBQyxRQUFBLEdBQUEsNEhBQUFELE9BQUEsQ0FBQVgsS0FBQSxHQUFBLDBLQUFBLEdBQUFXLE9BQUEsQ0FBQVYsSUFBQSxHQUFBLHdTQUFBLEdBQUFVLE9BQUEsQ0FBQVQsSUFBQSxHQUFBLDBSQUFBLEdBQUFTLE9BQUEsQ0FBQVIsS0FBQSxHQUFBLDJNQUFBLEdBQUFRLE9BQUEsQ0FBQVAsS0FBQSxHQUFBLHVHQUFBLEdBQUFPLE9BQUEsQ0FBQU4sSUFBQSxHQUFBLGlIQUFBO0FBQ0FDLElBQUFBLFlBQUEsQ0FBQU8sU0FBQSxJQUFBRCxRQUFBO0FBQ0EsR0FIQTtBQUlBeEQsRUFBQUEsVUFBQSxDQUFBMEQsTUFBQTtBQUNBLENBN0VBIiwiZmlsZSI6ImhvbWUuanMiLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcbnZhciBuZXdzU3dpcGVyO1xuKGZ1bmN0aW9uICgpIHtcbiAgICAvLyBCdXMgU3RhdGlvbiBTd2lwZXIgLy9cbiAgICB2YXIgYnVzU3dpcGVyID0gbmV3IFN3aXBlcignLnN3aXBlci1idXMtc3RhdGlvbicsIHtcbiAgICAgICAgc2xpZGVzUGVyVmlldzogMixcbiAgICAgICAgc3BhY2VCZXR3ZWVuOiAwLFxuICAgICAgICBzbGlkZXNQZXJHcm91cDogMixcbiAgICAgICAgc2xpZGVzUGVyR3JvdXBTa2lwOiAwLFxuICAgICAgICBmb2xsb3dGaW5nZXI6IGZhbHNlLFxuICAgICAgICBuYXZpZ2F0aW9uOiB7XG4gICAgICAgICAgICBuZXh0RWw6ICcuc3dpcGVyLWJ1cy1uZXh0JyxcbiAgICAgICAgICAgIHByZXZFbDogJy5zd2lwZXItYnVzLXByZXYnLFxuICAgICAgICB9LFxuICAgICAgICBwYWdpbmF0aW9uOiB7XG4gICAgICAgICAgICBlbDogJy5idXMtcGFnaW5hdGlvbicsXG4gICAgICAgICAgICBjbGlja2FibGU6IHRydWUsXG4gICAgICAgIH0sXG4gICAgfSk7XG4gICAgLy8gTGVmdCBCdXMgU3RhdGlvbiBTd2lwZXIgLy9cbiAgICB2YXIgYnVzTGVmdFN3aXBlciA9IG5ldyBTd2lwZXIoJy5zd2lwZXItYnVzLXN0YXRpb24tbGVmdCcsIHtcbiAgICAgICAgYWxsb3dUb3VjaE1vdmU6IGZhbHNlXG4gICAgfSk7XG4gICAgLy8gUmlnaHQgQnVzIFN0YXRpb24gU3dpcGVyIC8vXG4gICAgdmFyIGJ1c1JpZ2h0U3dpcGVyID0gbmV3IFN3aXBlcignLnN3aXBlci1idXMtc3RhdGlvbi1yaWdodCcsIHtcbiAgICAgICAgYWxsb3dUb3VjaE1vdmU6IGZhbHNlXG4gICAgfSk7XG4gICAgYnVzU3dpcGVyLm9uKCdzbGlkZU5leHRUcmFuc2l0aW9uU3RhcnQnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIGJ1c0xlZnRTd2lwZXIuc2xpZGVOZXh0KCk7XG4gICAgICAgIGJ1c1JpZ2h0U3dpcGVyLnNsaWRlTmV4dCgpO1xuICAgIH0pO1xuICAgIGJ1c1N3aXBlci5vbignc2xpZGVQcmV2VHJhbnNpdGlvblN0YXJ0JywgZnVuY3Rpb24gKCkge1xuICAgICAgICBidXNMZWZ0U3dpcGVyLnNsaWRlUHJldigpO1xuICAgICAgICBidXNSaWdodFN3aXBlci5zbGlkZVByZXYoKTtcbiAgICB9KTtcbn0pKCk7XG4vLyBBZGp1c3QgbGVmdCBzd2lwZXIgY29udGFpbmVyIC8vXG4oZnVuY3Rpb24gKCkge1xuICAgIHZhciBtYXhXaWR0aCA9IDE2MDA7XG4gICAgdmFyIGxTd2lwZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnVzLWxlZnQtc3dpcGVyJyk7XG4gICAgdmFyIGxTd2lwZXJPZmZzZXRBdE1heFdpZHRoID0gMjAyO1xuICAgIHZhciByU3dpcGVyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J1cy1yaWdodC1zd2lwZXInKTtcbiAgICB2YXIgclN3aXBlck9mZnNldEF0TWF4V2lkdGggPSAyMDI7XG4gICAgdmFyIHByZXZCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnVzLXByZXYtYnRuJyk7XG4gICAgdmFyIHByZXZCdG5PZmZzZXQgPSAyOTA7XG4gICAgdmFyIG5leHRCdG4gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnVzLW5leHQtYnRuJyk7XG4gICAgdmFyIG5leHRCdG5PZmZzZXQgPSAyOTA7XG4gICAgLy8gQWRqdXN0IG9mZnNldCB3aGVuIGxvYWQgLy9cbiAgICBhZGp1c3RTd2lwZXJPZmZzZXQoKTtcbiAgICAvLyBBZGp1c3Qgb2Zmc2V0IHdoZW4gY2xpZW50IHdpZHRoIGNoYW5nZXMgLy9cbiAgICB3aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcigncmVzaXplJywgZnVuY3Rpb24gKCkge1xuICAgICAgICBhZGp1c3RTd2lwZXJPZmZzZXQoKTtcbiAgICB9KTtcbiAgICBmdW5jdGlvbiBhZGp1c3RTd2lwZXJPZmZzZXQoKSB7XG4gICAgICAgIGxTd2lwZXIgJiYgYWRqdXN0T2Zmc2V0KGxTd2lwZXIsIGxTd2lwZXJPZmZzZXRBdE1heFdpZHRoLCAnbGVmdCcpKCk7XG4gICAgICAgIHJTd2lwZXIgJiYgYWRqdXN0T2Zmc2V0KHJTd2lwZXIsIHJTd2lwZXJPZmZzZXRBdE1heFdpZHRoLCAncmlnaHQnKSgpO1xuICAgICAgICBwcmV2QnRuICYmIGFkanVzdE9mZnNldChwcmV2QnRuLCBwcmV2QnRuT2Zmc2V0LCAnbGVmdCcpKCk7XG4gICAgICAgIG5leHRCdG4gJiYgYWRqdXN0T2Zmc2V0KG5leHRCdG4sIG5leHRCdG5PZmZzZXQsICdyaWdodCcpKCk7XG4gICAgfVxuICAgIGZ1bmN0aW9uIGFkanVzdE9mZnNldChlbGVtLCBvZmZzZXQsIHNpZGUpIHtcbiAgICAgICAgcmV0dXJuIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIHZhciBkaWZmV2l0aCA9IG1heFdpZHRoIC0gZG9jdW1lbnQuZG9jdW1lbnRFbGVtZW50LmNsaWVudFdpZHRoO1xuICAgICAgICAgICAgaWYgKCFlbGVtKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgaWYgKGRpZmZXaXRoID4gMCkge1xuICAgICAgICAgICAgICAgIGVsZW0uc3R5bGVbc2lkZV0gPSAob2Zmc2V0IC0gKGRpZmZXaXRoIC8gMikpLnRvU3RyaW5nKCkgKyAncHgnO1xuICAgICAgICAgICAgfVxuICAgICAgICAgICAgZWxzZSB7XG4gICAgICAgICAgICAgICAgZWxlbS5zdHlsZVtzaWRlXSA9IG9mZnNldC50b1N0cmluZygpICsgJ3B4JztcbiAgICAgICAgICAgIH1cbiAgICAgICAgfTtcbiAgICB9XG59KSgpO1xuIiwiXCJ1c2Ugc3RyaWN0XCI7XG4oZnVuY3Rpb24gKCkge1xuICAgIHZhciBjb250ZW50cyA9IFtcbiAgICAgICAge1xuICAgICAgICAgICAgaW1hZ2U6ICdhc3NldHMvaW1hZ2VzL2V4YW1wbGVfaW1hZ2UvY29udGVudDAyLnBuZycsXG4gICAgICAgICAgICBkYXRlOiAnMjUg4LiVLuC4hC4gMjU2MicsXG4gICAgICAgICAgICByZWFkOiA0NTYsXG4gICAgICAgICAgICBzaGFyZTogMzIxLFxuICAgICAgICAgICAgdGl0bGU6ICfguJnguLTguKrguLTguJXguKfguLTguKjguKfguLDguITguKfguYnguLLguYHguIrguKHguJvguYzguYLguKXguIEgV29ybGQgUm9ib2N1cCAyMDE5JyxcbiAgICAgICAgICAgIGRlc2M6ICfguJnguLTguKrguLTguJXguKfguITguJPguLDguLTguKjguKfguIHguKPguKPguKHguKjguLLguKrguJXguKPguYwg4LiX4Li14LihIFNLVUJBIOC4hOC4p+C5ieC5iOC4suC5geC4guC4oeC4m+C5jOC5guC4peC4gSDguIjguLLguIHguIHguLLguKPguYHguILguYjguIfguILguLHguJkgUm9ib2N1cCAyMDE5IOC5g+C4meC4geC4suC4o+C5geC4guC5iOC4h+C4guC4seC4meC4m+C4o+C4nuC5gOC4oOC4l+C5g+C4iuC5ieC4h+C4suC4meC5g+C4meC4muC5ieC4suC4meC4reC4seC4leC5guC4meC4oeC4seC4leC4tCdcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgaW1hZ2U6ICdhc3NldHMvaW1hZ2VzL2V4YW1wbGVfaW1hZ2UvY29udGVudDAxLnBuZycsXG4gICAgICAgICAgICBkYXRlOiAnMTUg4LihLuC4hC4gMjU2MycsXG4gICAgICAgICAgICByZWFkOiA1NjgsXG4gICAgICAgICAgICBzaGFyZTogMzU1LFxuICAgICAgICAgICAgdGl0bGU6ICdSdW4gZm9yIEFuZGFtYW4gMjAxOSAgSW50ZXJuYXRpb25hbCcsXG4gICAgICAgICAgICBkZXNjOiAn4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmM4LiB4Liy4Lij4LiB4Li14Lis4Liy4LiC4Lit4LmA4LiK4Li04LiN4Lic4Li54LmJ4Liq4LiZ4LmD4LiI4LmA4LiC4LmJ4Liy4Lij4LmI4Lin4Lih4LiB4Li04LiI4LiB4Lij4Lij4LihIFJ1biBmb3IgQW5kYW1hbiAyMDE5IEludGVybmF0aW9uYWwgVWx0cmEtbWFyYXRob24g4LmD4LiZ4Lin4Lix4LiZ4LiX4Li14LmIIDIyIOC4mOC4seC4meC4p+C4suC4hOC4oSAyNTYyIOC4kyDguIrguLLguKLguKvguLLguJTguJfguYnguLLguKLguYDguKHguLfguK3guIcg4LiILiDguJ7guLHguIfguIfguLInXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGltYWdlOiAnYXNzZXRzL2ltYWdlcy9leGFtcGxlX2ltYWdlL2NvbnRlbnQwMi5wbmcnLFxuICAgICAgICAgICAgZGF0ZTogJzI1IOC4lS7guIQuIDI1NjInLFxuICAgICAgICAgICAgcmVhZDogNDU2LFxuICAgICAgICAgICAgc2hhcmU6IDMyMSxcbiAgICAgICAgICAgIHRpdGxlOiAn4LiZ4Li04Liq4Li04LiV4Lin4Li04Lio4Lin4Liw4LiE4Lin4LmJ4Liy4LmB4LiK4Lih4Lib4LmM4LmC4Lil4LiBIFdvcmxkIFJvYm9jdXAgMjAxOScsXG4gICAgICAgICAgICBkZXNjOiAn4LiZ4Li04Liq4Li04LiV4Lin4LiE4LiT4Liw4Li04Lio4Lin4LiB4Lij4Lij4Lih4Lio4Liy4Liq4LiV4Lij4LmMIOC4l+C4teC4oSBTS1VCQSDguITguKfguYnguYjguLLguYHguILguKHguJvguYzguYLguKXguIEg4LiI4Liy4LiB4LiB4Liy4Lij4LmB4LiC4LmI4LiH4LiC4Lix4LiZIFJvYm9jdXAgMjAxOSDguYPguJnguIHguLLguKPguYHguILguYjguIfguILguLHguJnguJvguKPguJ7guYDguKDguJfguYPguIrguYnguIfguLLguJnguYPguJnguJrguYnguLLguJnguK3guLHguJXguYLguJnguKHguLHguJXguLQnXG4gICAgICAgIH0sXG4gICAgICAgIHtcbiAgICAgICAgICAgIGltYWdlOiAnYXNzZXRzL2ltYWdlcy9leGFtcGxlX2ltYWdlL2NvbnRlbnQwMS5wbmcnLFxuICAgICAgICAgICAgZGF0ZTogJzE1IOC4oS7guIQuIDI1NjMnLFxuICAgICAgICAgICAgcmVhZDogNTY4LFxuICAgICAgICAgICAgc2hhcmU6IDM1NSxcbiAgICAgICAgICAgIHRpdGxlOiAnUnVuIGZvciBBbmRhbWFuIDIwMTkgIEludGVybmF0aW9uYWwnLFxuICAgICAgICAgICAgZGVzYzogJ+C4hOC4k+C4sOC4p+C4tOC4l+C4ouC4suC4qOC4suC4quC4leC4o+C5jOC4geC4suC4o+C4geC4teC4rOC4suC4guC4reC5gOC4iuC4tOC4jeC4nOC4ueC5ieC4quC4meC5g+C4iOC5gOC4guC5ieC4suC4o+C5iOC4p+C4oeC4geC4tOC4iOC4geC4o+C4o+C4oSBSdW4gZm9yIEFuZGFtYW4gMjAxOSBJbnRlcm5hdGlvbmFsIFVsdHJhLW1hcmF0aG9uIOC5g+C4meC4p+C4seC4meC4l+C4teC5iCAyMiDguJjguLHguJnguKfguLLguITguKEgMjU2MiDguJMg4LiK4Liy4Lii4Lir4Liy4LiU4LiX4LmJ4Liy4Lii4LmA4Lih4Li34Lit4LiHIOC4iC4g4Lie4Lix4LiH4LiH4LiyJ1xuICAgICAgICB9LFxuICAgICAgICB7XG4gICAgICAgICAgICBpbWFnZTogJ2Fzc2V0cy9pbWFnZXMvZXhhbXBsZV9pbWFnZS9jb250ZW50MDIucG5nJyxcbiAgICAgICAgICAgIGRhdGU6ICcyNSDguJUu4LiELiAyNTYyJyxcbiAgICAgICAgICAgIHJlYWQ6IDQ1NixcbiAgICAgICAgICAgIHNoYXJlOiAzMjEsXG4gICAgICAgICAgICB0aXRsZTogJ+C4meC4tOC4quC4tOC4leC4p+C4tOC4qOC4p+C4sOC4hOC4p+C5ieC4suC5geC4iuC4oeC4m+C5jOC5guC4peC4gSBXb3JsZCBSb2JvY3VwIDIwMTknLFxuICAgICAgICAgICAgZGVzYzogJ+C4meC4tOC4quC4tOC4leC4p+C4hOC4k+C4sOC4tOC4qOC4p+C4geC4o+C4o+C4oeC4qOC4suC4quC4leC4o+C5jCDguJfguLXguKEgU0tVQkEg4LiE4Lin4LmJ4LmI4Liy4LmB4LiC4Lih4Lib4LmM4LmC4Lil4LiBIOC4iOC4suC4geC4geC4suC4o+C5geC4guC5iOC4h+C4guC4seC4mSBSb2JvY3VwIDIwMTkg4LmD4LiZ4LiB4Liy4Lij4LmB4LiC4LmI4LiH4LiC4Lix4LiZ4Lib4Lij4Lie4LmA4Lig4LiX4LmD4LiK4LmJ4LiH4Liy4LiZ4LmD4LiZ4Lia4LmJ4Liy4LiZ4Lit4Lix4LiV4LmC4LiZ4Lih4Lix4LiV4Li0J1xuICAgICAgICB9LFxuICAgICAgICB7XG4gICAgICAgICAgICBpbWFnZTogJ2Fzc2V0cy9pbWFnZXMvZXhhbXBsZV9pbWFnZS9jb250ZW50MDEucG5nJyxcbiAgICAgICAgICAgIGRhdGU6ICcxNSDguKEu4LiELiAyNTYzJyxcbiAgICAgICAgICAgIHJlYWQ6IDU2OCxcbiAgICAgICAgICAgIHNoYXJlOiAzNTUsXG4gICAgICAgICAgICB0aXRsZTogJ1J1biBmb3IgQW5kYW1hbiAyMDE5ICBJbnRlcm5hdGlvbmFsJyxcbiAgICAgICAgICAgIGRlc2M6ICfguITguJPguLDguKfguLTguJfguKLguLLguKjguLLguKrguJXguKPguYzguIHguLLguKPguIHguLXguKzguLLguILguK3guYDguIrguLTguI3guJzguLnguYnguKrguJnguYPguIjguYDguILguYnguLLguKPguYjguKfguKHguIHguLTguIjguIHguKPguKPguKEgUnVuIGZvciBBbmRhbWFuIDIwMTkgSW50ZXJuYXRpb25hbCBVbHRyYS1tYXJhdGhvbiDguYPguJnguKfguLHguJnguJfguLXguYggMjIg4LiY4Lix4LiZ4Lin4Liy4LiE4LihIDI1NjIg4LiTIOC4iuC4suC4ouC4q+C4suC4lOC4l+C5ieC4suC4ouC5gOC4oeC4t+C4reC4hyDguIguIOC4nuC4seC4h+C4h+C4sidcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgaW1hZ2U6ICdhc3NldHMvaW1hZ2VzL2V4YW1wbGVfaW1hZ2UvY29udGVudDAyLnBuZycsXG4gICAgICAgICAgICBkYXRlOiAnMjUg4LiVLuC4hC4gMjU2MicsXG4gICAgICAgICAgICByZWFkOiA0NTYsXG4gICAgICAgICAgICBzaGFyZTogMzIxLFxuICAgICAgICAgICAgdGl0bGU6ICfguJnguLTguKrguLTguJXguKfguLTguKjguKfguLDguITguKfguYnguLLguYHguIrguKHguJvguYzguYLguKXguIEgV29ybGQgUm9ib2N1cCAyMDE5JyxcbiAgICAgICAgICAgIGRlc2M6ICfguJnguLTguKrguLTguJXguKfguITguJPguLDguLTguKjguKfguIHguKPguKPguKHguKjguLLguKrguJXguKPguYwg4LiX4Li14LihIFNLVUJBIOC4hOC4p+C5ieC5iOC4suC5geC4guC4oeC4m+C5jOC5guC4peC4gSDguIjguLLguIHguIHguLLguKPguYHguILguYjguIfguILguLHguJkgUm9ib2N1cCAyMDE5IOC5g+C4meC4geC4suC4o+C5geC4guC5iOC4h+C4guC4seC4meC4m+C4o+C4nuC5gOC4oOC4l+C5g+C4iuC5ieC4h+C4suC4meC5g+C4meC4muC5ieC4suC4meC4reC4seC4leC5guC4meC4oeC4seC4leC4tCdcbiAgICAgICAgfSxcbiAgICAgICAge1xuICAgICAgICAgICAgaW1hZ2U6ICdhc3NldHMvaW1hZ2VzL2V4YW1wbGVfaW1hZ2UvY29udGVudDAxLnBuZycsXG4gICAgICAgICAgICBkYXRlOiAnMTUg4LihLuC4hC4gMjU2MycsXG4gICAgICAgICAgICByZWFkOiA1NjgsXG4gICAgICAgICAgICBzaGFyZTogMzU1LFxuICAgICAgICAgICAgdGl0bGU6ICdSdW4gZm9yIEFuZGFtYW4gMjAxOSAgSW50ZXJuYXRpb25hbCcsXG4gICAgICAgICAgICBkZXNjOiAn4LiE4LiT4Liw4Lin4Li04LiX4Lii4Liy4Lio4Liy4Liq4LiV4Lij4LmM4LiB4Liy4Lij4LiB4Li14Lis4Liy4LiC4Lit4LmA4LiK4Li04LiN4Lic4Li54LmJ4Liq4LiZ4LmD4LiI4LmA4LiC4LmJ4Liy4Lij4LmI4Lin4Lih4LiB4Li04LiI4LiB4Lij4Lij4LihIFJ1biBmb3IgQW5kYW1hbiAyMDE5IEludGVybmF0aW9uYWwgVWx0cmEtbWFyYXRob24g4LmD4LiZ4Lin4Lix4LiZ4LiX4Li14LmIIDIyIOC4mOC4seC4meC4p+C4suC4hOC4oSAyNTYyIOC4kyDguIrguLLguKLguKvguLLguJTguJfguYnguLLguKLguYDguKHguLfguK3guIcg4LiILiDguJ7guLHguIfguIfguLInXG4gICAgICAgIH0sXG4gICAgXTtcbiAgICB2YXIgc2xpZGVXcmFwcGVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnN3aXBlci1uZXdzIC5zd2lwZXItd3JhcHBlcicpO1xuICAgIGlmICghc2xpZGVXcmFwcGVyKSB7XG4gICAgICAgIGNvbnNvbGUubG9nKCdzd2lwZXItbmV3cyBub3QgZm91bmMnKTtcbiAgICAgICAgcmV0dXJuO1xuICAgIH1cbiAgICBjb250ZW50cy5mb3JFYWNoKGZ1bmN0aW9uIChjb250ZW50KSB7XG4gICAgICAgIHZhciBuZXdTbGlkZSA9IFwiXFxuICAgICAgICA8ZGl2IGNsYXNzPVxcXCJzd2lwZXItc2xpZGUgbmV3cy1zbGlkZVxcXCI+XFxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XFxcImltZ1xcXCI+XFxuICAgICAgICAgICAgICAgICAgICA8aW1nIHNyYz1cXFwiXCIgKyBjb250ZW50LmltYWdlICsgXCJcXFwiIGFsdD1cXFwiXFxcIi8+XFxuICAgICAgICAgICAgICAgIDwvZGl2PlxcbiAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVxcXCJpbmZvIGQtZmxleCBqdXN0aWZ5LWNvbnRlbnQtYmV0d2VlbiBwdC0zIHBsLTMgcHItMyBwYi0xXFxcIj5cXG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XFxcImRhdGVcXFwiPlwiICsgY29udGVudC5kYXRlICsgXCI8L2Rpdj5cXG4gICAgICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XFxcInN0YXQgZC1mbGV4XFxcIj5cXG4gICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cXFwibXItMlxcXCI+XFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxzcGFuIGNsYXNzPVxcXCJtci0yXFxcIj5cXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDxpIGNsYXNzPVxcXCJmYXMgZmEtYm9vay1vcGVuXFxcIj48L2k+XFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIDwvc3Bhbj5cXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4+XCIgKyBjb250ZW50LnJlYWQgKyBcIjwvc3Bhbj5cXG4gICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+XFxuICAgICAgICAgICAgICAgICAgICAgICAgPHNwYW4gY2xhc3M9XFxcIm1sLTJcXFwiPlxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3BhbiBjbGFzcz1cXFwibXItMlxcXCI+XFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPGkgY2xhc3M9XFxcImZhcyBmYS1zaGFyZS1hbHRcXFwiPjwvaT5cXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgPC9zcGFuPlxcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8c3Bhbj5cIiArIGNvbnRlbnQuc2hhcmUgKyBcIjwvc3Bhbj5cXG4gICAgICAgICAgICAgICAgICAgICAgICA8L3NwYW4+XFxuICAgICAgICAgICAgICAgICAgICA8L2Rpdj5cXG4gICAgICAgICAgICAgICAgPC9kaXY+XFxuICAgICAgICAgICAgICAgIDxkaXYgY2xhc3M9XFxcImNvbnRlbnQgcHQtMiBwbC0zIHByLTMgcGItM1xcXCI+XFxuICAgICAgICAgICAgICAgICAgICA8ZGl2IGNsYXNzPVxcXCJuZXdzLXRpdGxlXFxcIj5cIiArIGNvbnRlbnQudGl0bGUgKyBcIjwvZGl2PlxcbiAgICAgICAgICAgICAgICAgICAgPGRpdiBjbGFzcz1cXFwicHQtMlxcXCI+XFxuICAgICAgICAgICAgICAgICAgICAgICA8cD5cXG4gICAgICAgICAgICAgICAgICAgICAgIFwiICsgY29udGVudC5kZXNjICsgXCJcXG4gICAgICAgICAgICAgICAgICAgICAgIDwvcD5cXG4gICAgICAgICAgICAgICAgICAgIDwvZGl2PlxcbiAgICAgICAgICAgICAgICA8L2Rpdj5cXG4gICAgICAgICAgICA8L2Rpdj5cXG4gICAgICAgIFwiO1xuICAgICAgICBzbGlkZVdyYXBwZXIuaW5uZXJIVE1MICs9IG5ld1NsaWRlO1xuICAgIH0pO1xuICAgIG5ld3NTd2lwZXIudXBkYXRlKCk7XG59KSgpO1xuIl19
