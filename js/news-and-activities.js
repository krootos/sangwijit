"use strict";var newsSwiper;!function(){var e=!1,t=!1,n=document.getElementById("na-tab");if(n){var r=n.querySelectorAll("a"),c=document.getElementById("ku-news-n-activities-accordion");if(c){var a=c.dataset.breakpoint,i=parseInt(a||"0");window.addEventListener("resize",function(){s()}),s()}}function s(){if(void 0===i)return d(),void(e=!0);i<window.innerWidth?e||(d(),e=!0):t||(function(){if(!c)return;var o="-accordion",l=c.dataset.newsLimit?parseInt(c.dataset.newsLimit):999,t=[];function a(e){e.querySelectorAll("img.swiper-lazy:not(.swiper-lazy-loaded)").forEach(function(e){var t=e.dataset.src;e.src=t||"",e.addEventListener("load",function(){e.classList.add("swiper-lazy-loaded")})})}function i(){rellax&&rellax.refresh&&rellax.refresh(),AOS&&AOS.refresh&&AOS.refresh()}r.forEach(function(e){t.push({id:e.id,name:e.innerText,href:e.href.replace(/^.*#/g,""),isTab:"tab"===e.getAttribute("role"),isActive:e.classList.contains("active")})}),t.forEach(function(e){var t="",n="",a="";if(e.isTab){for(var i=document.querySelectorAll("#"+e.href+" .news-slide"),r=0;r<i.length&&r<l;r++)t+=i[r].innerHTML;var s=document.querySelector("#"+e.href+" .all-news-text");s&&(a=s.innerHTML),n='\n      <div class="news-header" id="'+e.id+o+'">\n          <a type="button" data-toggle="collapse" data-target="#'+e.href+o+'" aria-expanded="'+!!e.isActive+'" aria-controls="'+e.href+o+'">\n            '+e.name+'\n          </a>\n      </div>\n\n      <div id="'+e.href+o+'" class="collapse '+(e.isActive?"show":"")+'" aria-labelledby="'+e.id+o+'" data-parent="#ku-news-n-activities-accordion">\n        <div class="card-body">\n          '+t+'\n        </div>\n        <div class="all-news-text">\n        '+a+"\n      </div>\n      </div>\n  "}else n='\n      <div class="news-header">\n          <a href="'+e.href+'">\n            '+e.name+"\n          </a>\n      </div>\n      ";var d=document.createElement("div");d.classList.add("card"),d.innerHTML=n,c.appendChild(d)}),c.querySelectorAll(".collapse").forEach(function(t){var e=t.getAttribute("aria-labelledby"),n=e?document.getElementById(e):void 0;$(t).on("shown.bs.collapse",function(){var e;kuHeaderState&&kuHeaderState.headerElem&&n&&window.scrollBy(0,n.getBoundingClientRect().top-(null===(e=kuHeaderState.headerElem)||void 0===e?void 0:e.getBoundingClientRect().bottom)-15),a(t),i()}),$(t).on("hidden.bs.collapse",function(){i()}),t.classList.contains("show")&&a(t)})}(),t=!0)}function d(){function t(a){"true"!==a.dataset.swiperInit&&setTimeout(function(){var e=a.dataset.swiperContainer,t=a.dataset.swiperNextBtn,n=a.dataset.swiperPrevBtn;e&&(newsSwiper=new Swiper("."+e,{slidesPerView:"auto",spaceBetween:30,freeMode:!0,navigation:{nextEl:t?"."+t:void 0,prevEl:n?"."+n:void 0},watchOverflow:!0,preloadImages:!1,lazy:{loadPrevNext:!0},watchSlidesVisibility:!0}),a.setAttribute("data-swiper-init","true"))},500)}r.forEach(function(e){e.addEventListener("click",function(){!function(){if(!r.length)return;r.forEach(function(e){e.parentElement&&e.parentElement.classList.remove("active")})}(),e.parentElement&&e.parentElement.classList.add("active"),t(e)})}),t(r[0])}}();