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

//------------------------------------ Modales ------------------------------------
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




function cerrarModal() {
    // Index
    document.getElementsByClassName('modalReceta').style.display = 'none';
    document.getElementsByClassName('modalCategoria').style.display = 'none';
    document.getElementsByClassName('modalEditarCategoria').style.display = 'none';
    document.getElementsByClassName('modalAdquerirProducto').style.display = 'none';
    document.getElementsByClassName('modalCarrusel').style.display = 'none';
    document.getElementsByClassName('modalimgproductos').style.display = 'none';
    document.getElementsByClassName('modalequipo').style.display = 'none';




    // Recetas
    document.getElementById('modalAgregaUnaReceta').style.display = 'none'
    document.getElementById('modalAgregaUnaCategoria').style.display = 'none'
    document.getElementById('modalEditaUnaCategoria').style.display = 'none'
    document.getElementById('modalEliminaUnaCategoria').style.display = 'none'

    // Nuestra Casa
    document.getElementById('modalLineadelTiempo').style.display = 'none'
    document.getElementById('modalLineadelTiempo').style.display = 'none'
    document.getElementById('modalLineadelTiempo').style.display = 'none'
    document.getElementById('modalLineadelTiempo').style.display = 'none'
    document.getElementById('modalLineadelTiempo').style.display = 'none'
    document.getElementById('modalLineadelTiempo').style.display = 'none'
}