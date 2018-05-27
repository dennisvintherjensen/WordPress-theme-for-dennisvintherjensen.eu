/**
 * File search.js.
 *
 * Handles toggling the search input for small screens
 */
(function () {
  const mainSearch = document.querySelector('.main-search');
  const searchToggle = mainSearch.querySelector(".search-toggle");
  const searchInput = mainSearch.querySelector(".search-input");
  let searchIsOpen = false;
  function toggleSearch(event) {
    if (!searchIsOpen) {
      mainSearch.classList.add('toggled');
      searchInput.focus();
    }
    else {
      mainSearch.classList.remove('toggled');
    }
    searchIsOpen = !searchIsOpen;
  }
  searchToggle.addEventListener('click', toggleSearch);
})();

