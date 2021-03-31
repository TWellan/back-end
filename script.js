const showConnexion = document.querySelector('.identification')
const backToMain = document.querySelector('.accueil')
const hide = document.getElementById('main')
const show = document.getElementById('second')
const formButtonConnexion = document.querySelector('.connexion')
const formButtonInscription = document.querySelector('.inscription')
const formConnexion = document.querySelector('.form1')
const formInscription = document.querySelector('.form2')

showConnexion.addEventListener('click', () =>
{
    showConnexion.style.backgroundColor = "#DBD6D2";
    showConnexion.style.color = "#383D42";
    backToMain.style.backgroundColor = "#383D42";
    backToMain.style.color = "#DBD6D2";
    hide.style.display = "none";
    show.style.display = "block";
})

backToMain.addEventListener('click', () =>
{
    backToMain.style.backgroundColor = "#DBD6D2";
    backToMain.style.color = "#383D42";
    showConnexion.style.backgroundColor = "#383D42";
    showConnexion.style.color = "#DBD6D2";
    hide.style.display = "flex";
    show.style.display = "none";
})

formButtonConnexion.addEventListener('click', () =>
{
    formButtonConnexion.style.backgroundColor = "#7897BB";
    formButtonConnexion.style.color = "#DBD6D2";
    formButtonInscription.style.backgroundColor = "#223244";
    formButtonInscription.style.color = "#7897BB";
    formConnexion.style.display = "block";
    formInscription.style.display = "none"
}
)

formButtonInscription.addEventListener('click', () =>
{
    formButtonConnexion.style.backgroundColor = "#223244";
    formButtonConnexion.style.color = "#7897BB";
    formButtonInscription.style.backgroundColor = "#7897BB";
    formButtonInscription.style.color = "#DBD6D2";
    formConnexion.style.display = "none";
    formInscription.style.display = "block";
}
)
