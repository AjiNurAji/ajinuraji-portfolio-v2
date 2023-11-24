const navbar = document.getElementById('navbar')

// console.log(navbar)

const scroll = () => {
  const y = scrollY;
  if (y > 0) {
    navbar.classList.add('active')
  } else {
    navbar.classList.remove('active')
  }
}

window.addEventListener('scroll', scroll)