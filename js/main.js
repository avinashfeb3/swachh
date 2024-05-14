// Header Scroll
let nav = document.querySelector(".header");
window.onscroll = function () {
  if (document.documentElement.scrollTop > 50) {
    nav.classList.add("header-scrolled");
  } else {
    nav.classList.remove("header-scrolled");
  }
};


  // Function to increment counters
  function incrementCounter(elementId) {
    const countSpan = document.getElementById(elementId);
    const count = parseInt(countSpan.textContent);
    countSpan.textContent = count + 1;
  }

  // Increment counters every second
  setInterval(() => {
    incrementCounter('count');
    incrementCounter('count2');
    incrementCounter('count3');
    incrementCounter('count4');
  }, 200);
