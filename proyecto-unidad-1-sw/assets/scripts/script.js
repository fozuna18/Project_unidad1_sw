//inicio

var init = "Ningún servicio seleccionado"
var counter = 0
document.getElementById("contador").innerHTML = init
var total = 0
var totalNombres = []

//agregar al carrito
function agregarCarrito(id) {

  var precios = [10000, 1000, 1500, 3000, 2000];
  var nombres =["Renta del salón de evento\n",
  "Manteleria\n",
  "Aire acondicionado\n",
  "Inmobiliario para 30 persona\n",
  "Equipo de audio\n"];
  const btnCompra = document.getElementById(id);
  if (btnCompra.id == "btn-añadir" && btnCompra.style.backgroundColor != 'red') {
    document.getElementById("btn-añadir2").removeAttribute('disabled')
    document.getElementById("btn-añadir3").removeAttribute('disabled','false')
    document.getElementById("btn-añadir4").removeAttribute('disabled','false')
    document.getElementById("btn-añadir5").removeAttribute('disabled','false')
  }


  if (btnCompra.style.backgroundColor != 'red') {
    switch (btnCompra.id) {
      case "btn-añadir":
        total += precios[0];
        totalNombres.push(nombres[0]) 
        break;
      case "btn-añadir2":
        total += precios[1]
        totalNombres.push(nombres[1])
        break;
      case "btn-añadir3":
        total += precios[2]
        totalNombres.push(nombres[2])
        break;
      case "btn-añadir4":
        total += precios[3]
        totalNombres.push(nombres[3])
        break;
      case "btn-añadir5":
        total += precios[4]
        totalNombres.push(nombres[4])
        break;
        
      default:
        break;
    }
    btnCompra.innerHTML = "Quitar del carrito";
    btnCompra.style.backgroundColor = 'red'; 
    counter++;
  }
  else{
    btnCompra.innerHTML = "Añadir al carrito";
    btnCompra.style.backgroundColor = '#007EE5'; 
    counter--;
    switch (btnCompra.id) {
      case "btn-añadir":
        total -= precios[0];
        break;
      case "btn-añadir2":
        total -= precios[1]
        break;
      case "btn-añadir3":
        total -= precios[2]
        break;
      case "btn-añadir4":
        total -= precios[3]
        break;
      case "btn-añadir5":
        total -= precios[4]
        break;
        
      default:
        break;
    }
  }

  document.getElementById("contador").innerHTML = counter;
  document.getElementById("total").value = total;
  document.getElementById("nombres").value = totalNombres;
  
}