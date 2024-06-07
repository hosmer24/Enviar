// No es necesario, pero puedes agregar este código para mostrar el registro en la página
const registro = document.getElementById("registro");

// Función para registrar el id y la fecha y hora
function registrarId(id) {
    const fechaHora = new Date().toLocaleString();
    const textoRegistro = `ID: ${id} - Fecha y Hora: ${fechaHora}`;
    registro.textContent = textoRegistro;
}

// Función para recibir el id desde la solicitud GET
function recibirId() {
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get("id");
    if (id) {
        registrarId(id);
    } else {
        registro.textContent = "No se ha recibido el id";
    }
}

// Llamar a la función para recibir el id cuando se carga la página
window.onload = recibirId;