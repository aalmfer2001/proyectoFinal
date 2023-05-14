function iniciar() {

  setInterval(cambiarImagen, 5000);

function cambiarImagen() {
  const galeria = document.querySelector('.galeria');
  const primeraImagen = galeria.querySelector('img:first-child');
  const siguienteImagen = primeraImagen.nextElementSibling;

  primeraImagen.style.opacity = '0';
  siguienteImagen.style.opacity = '1';

  galeria.appendChild(primeraImagen);

}

}

window.addEventListener("load", iniciar, false);
