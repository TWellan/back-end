const formDroite1 = document.querySelector('.droite')
const formDroite2 = document.querySelector('.droite2')
const showURL = document.querySelector('.test')
const showAddURL = document.querySelector('.showShortURL')
const toSelect = document.querySelector('.toSelect')

showAddURL.addEventListener('click', () =>
{
    formDroite1.style.display = "none";
    formDroite2.style.display = "flex";
    showAddURL.style.transform = "translate(40px)";
    toSelect.style.transform = " translate(0px)";
})

toSelect.addEventListener('click', () =>
{
    formDroite1.style.display = "block";
    formDroite2.style.display = "none";
    toSelect.style.transform = " translate(40px)";
    showAddURL.style.transform = " translate(0px)";
})
