/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
changeTab = function changeTab(tabName, id) {
  var card = document.getElementById(id);
  var tabToShow = card.querySelector(".".concat(tabName));
  var allTabsContent = card.querySelectorAll(".card__content");
  var allTabs = card.querySelectorAll(".tab");
  allTabsContent.forEach(function (tab) {
    return hideElement(tab);
  });
  allTabs.forEach(function (tab) {
    return setElementInactive(tab);
  });
  showElement(tabToShow);
  setElementActive(card.querySelector(".tab__".concat(tabName)));
}; // utils


showElement = function showElement(element) {
  if (element.classList.contains("hidden")) {
    element.classList.remove("hidden");
    element.style.removeProperty("display");
  }
};

hideElement = function hideElement(element) {
  if (!element.classList.contains("hidden")) element.classList.add("hidden");
};

setElementActive = function setElementActive(element) {
  if (!element.classList.contains("active")) element.classList.add("active");
};

setElementInactive = function setElementInactive(element) {
  if (element.classList.contains("active")) element.classList.remove("active");
};

openModal = function openModal(selector) {
  var modal = document.querySelector(selector);
  showElement(modal);
  document.body.classList.add("modal-open");
};

closeModal = function closeModal(selector) {
  var modal = document.querySelector(selector);
  hideElement(modal);
  document.body.classList.remove("modal-open");
}; // calendar test


var calendar = new VanillaCalendar("#calendar", {
  settings: {
    selection: {
      day: "multiple-ranged"
    }
  },
  actions: {
    clickDay: function clickDay(e, dates) {
      if (dates[1]) {
        console.log(dates);
      }
    }
  }
});
calendar.init();
/******/ })()
;