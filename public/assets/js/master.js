// animation de pages en java script-natif
window.onload = function () {
  var tabs = document.querySelectorAll('.tab')
// $(function() {
//   var tabs = $('tab');

  for (var i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', onSelect)

    // Simulé un click sur le premier élement de la liste.
    if (i === 0) {
      tabs[i].click()
    }
  }
}

hideAll();

function onSelect (e) {
  e.preventDefault()
  // on cache tout
  this.classList.add('selected')

  // We grab the href attribute.
  var targetId = this.getAttribute('href')
  // Then, we use the href as it is with query selector:
  // Reminder: the # is a valid selector in CSS so no need
  // to remove it.
  var targetContent = document.querySelector(targetId)

  targetContent.style.display = 'block'
}

function hideAll () {
  var tabs = document.querySelectorAll('.tab')
  var sections = document.querySelectorAll('.tab-content')
  // caché les blocks.
  for (var i = 0; i < sections.length; i++) {
    sections[i].style.display = 'none'
  }
  // Remove le classe 'select'
  for (var i = 0; i < tabs.length; i++) {
    tabs[i].classList.remove('selected')
  }
}
// });
