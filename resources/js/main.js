import $ from "jquery";
$(document).foundation();

changeTab = (tabName, id) => {
    let card = document.getElementById(id);
    let tabToShow = card.querySelector(`.${tabName}`);

    let allTabsContent = card.querySelectorAll(".card__content");
    let allTabs = card.querySelectorAll(".tab");

    allTabsContent.forEach((tab) => hideElement(tab));

    allTabs.forEach((tab) => setElementInactive(tab));

    showElement(tabToShow);
    setElementActive(card.querySelector(`.tab__${tabName}`));
};

// utils

showElement = (element) => {
    if (element.classList.contains("hidden")) {
        element.classList.remove("hidden");
        element.style.removeProperty("display");
    }
};

hideElement = (element) => {
    if (!element.classList.contains("hidden")) element.classList.add("hidden");
};

setElementActive = (element) => {
    if (!element.classList.contains("active")) element.classList.add("active");
};

setElementInactive = (element) => {
    if (element.classList.contains("active"))
        element.classList.remove("active");
};

openModal = (selector) => {
    let modal = document.querySelector(selector);
    showElement(modal);
    document.body.classList.add("modal-open");
};

closeModal = (selector) => {
    let modal = document.querySelector(selector);
    hideElement(modal);
    document.body.classList.remove("modal-open");
};

// calendar test

const calendar = new VanillaCalendar("#calendar", {
    settings: {
        selection: {
            day: "multiple-ranged",
        },
    },
    actions: {
        clickDay(e, dates) {
            if (dates[1]) {
                console.log(dates);
            }
        },
    },
});
calendar.init();
