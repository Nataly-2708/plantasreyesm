const spanCarrito = document.getElementById('carritoIcon');

//var badge = document.createElement('span');
// import * as dateBase from "./base_Datos.js";

let carrito = [];

// FUNCION PARA CONTADOR DEL CARRITO
export function contadorCarrito(){
    carrito = JSON.parse(localStorage.getItem('carrito'));
    console.log(carrito)
    spanCarrito.innerHTML = "";
    let imgCarrito = document.createElement('IMG');
    imgCarrito.setAttribute('src', '../assets/icons/iconoCarrito.png');
    imgCarrito.setAttribute('id', 'iconoCarrito');
    let badge = document.createElement('span');
    badge.classList.add('position-absolute', 'translate-middle', 'badge', 'rounded-pill', 'bg-danger');
    badge.setAttribute('id', 'carritoContador');
    badge.textContent = calcularProductos();
    spanCarrito.append(imgCarrito, badge);
}

function calcularProductos() {
    let total = 0;
    carrito.forEach( (producto) => {
        total += producto.cantidad;
    });
    console.log(`total ${total}`)
    return total;
}

contadorCarrito();