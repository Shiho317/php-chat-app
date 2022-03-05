const searchBar = document.querySelector('.users .search input');
const searchBtn = document.querySelector('.users .search button');

const seachBarToggle = () => {
  searchBar.classList.toggle('active');
  searchBar.focus();
  searchBtn.classList.toggle('active');
}

searchBtn.addEventListener('click', seachBarToggle);