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

//------------------------------------ Abrir Modales ------------------------------------
// index
function abrirModalCarrusel() {
    document.getElementById('modalCarrusel').style.display = 'block'
}

// Nuestra Casa
function abrirModalLineadelTiempo() {
    document.getElementById('modalLineadelTiempo').style.display = 'block'
}

function abrirModalequipo() {
    document.getElementById('modalequipo').style.display = 'block'
}

// Recetas
function abrirModalAgregaUnaReceta() {
    document.getElementById('modalAgregaUnaReceta').style.display = 'block'
}

function abrirModalAgregaUnaCategoria() {
    document.getElementById('modalAgregaUnaCategoria').style.display = 'block'
}

function abrirModalEditaUnaCategoria() {
    document.getElementById('modalEditaUnaCategoria').style.display = 'block'
}

function abrirModalEliminaUnaCategoria() {
    document.getElementById('modalEliminaUnaCategoria').style.display = 'block'
}

// Productos
function abrirModalEliminaUnaCategoria() {
    document.getElementById('modalEliminaUnaCategoria').style.display = 'block'
}


//------------------------------------ Cerrar Modales ------------------------------------
// index
function cerrarModalCarrusel() {
    document.getElementById('modalCarrusel').style.display = 'none'
}

// Nuestra Casa
function cerrarModalLineadelTiempo() {
    document.getElementById('modalLineadelTiempo').style.display = 'none'
}

function cerrarModalequipo() {
    document.getElementById('modalequipo').style.display = 'none'
}

// Recetas
function cerrarModalAgregaUnaReceta() {
    document.getElementById('modalAgregaUnaReceta').style.display = 'none'
}

function cerrarModalAgregaUnaCategoria() {
    document.getElementById('modalAgregaUnaCategoria').style.display = 'none'
}

function cerrarModalEditaUnaCategoria() {
    document.getElementById('modalEditaUnaCategoria').style.display = 'none'
}

function cerrarModalEliminaUnaCategoria() {
    document.getElementById('modalEliminaUnaCategoria').style.display = 'none'
}