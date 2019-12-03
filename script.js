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

function abrirModalCertificaciones() {
    document.getElementById('modalCertificaciones').style.display = 'block'
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
function abrirModalProducto() {
    document.getElementById('modalproducto').style.display = 'block'
}

function cerrarModalProducto() {
    document.getElementById('modalproducto').style.display = 'none'
}

function abrirModalEliminaUnaCategoria() {
    document.getElementById('modalEliminaUnaCategoria').style.display = 'block'
}

// Sucursales
function abrirModalSucursales() {
    document.getElementById('modalSucursales').style.display = 'block'
}

// Colaboradores
function abrirModalColaboradores() {
    document.getElementById('modalColaboradores').style.display = 'block'
}



//------------------------------------ Cerrar Modales ------------------------------------
// index
function cerrarModalCarrusel() {
    document.getElementById('modalCarrusel').style.display = 'none'
}

function cerrarModalCertificaciones() {
    document.getElementById('modalCertificaciones').style.display = 'none'
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

// Direccion
function abrirModalDireccion() {
    document.getElementById('modalDireccion').style.display = 'block'
}

function cerrarModalDireccion() {
    document.getElementById('modalDireccion').style.display = 'none'
}
// Telefono
function abrirModalTelefono() {
    document.getElementById('modalTelefono').style.display = 'block'
}

function cerrarModalTelefono() {
    document.getElementById('modalTelefono').style.display = 'none'
}
// Certifiaciones
function abrirModalCertifiaciones() {
    document.getElementById('modalcertifiaciones').style.display = 'block'
}

function cerrarModalCertificacion() {
    document.getElementById('modalcertificaciones').style.display = 'none'
}

// Sucursales
function cerrarModalSucursales() {
    document.getElementById('modalSucursales').style.display = 'none'
}

// Colaboradores
function cerrarModalColaboradores() {
    document.getElementById('modalColaboradores').style.display = 'none'
}


function eliminarIntegrante(index) {
    var r = confirm("¿Desear eliminar este integrante?");
    if (r) {
        //corremos una página en PHP para eliminar el contacto
        window.location.assign("eliminarIntegrante_xt.php?id=" + index);
    }


    /*contactos.splice(index, 1);
    renderearTodosLosContactos();*/
}