//------------------------------------ Inicia funcionalidad tabs ------------------------------------

const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget)
        tabContents.forEach(tabContent => {
            tabContent.classList.remove('active')
        })
        tabs.forEach(tab => {
            tab.classList.remove('active')
        })
        tab.classList.add('active')
        target.classList.add('active')
    })
})
//------------------------------------ Acaba funcionalidad tabs ------------------------------------
function manita() {
    cursor: pointer;
}

function abrirInicioCarrusel() {
    // alert("modal");

}

function cerrarInicioCarrusel() {

}

function abrirModalLineadelTiempo() {
    // alert("modal");
    document.getElementById('modalAgregaunaReceta').style.display = 'block'
}

function cerrarModalLineadelTiempo() {
    // alert("modal");
    document.getElementById('modalLineadelTiempo').style.display = 'none'
}