function mostrar(){
  /*    document.getElementById('texto-oculto').style.display='block';*/
  const textElement = document.getElementById('texto-oculto');

  if (textElement.classList.contains('hidden')) {
    textElement.classList.remove('hidden');
    textElement.classList.add('visible');
  } else {
    textElement.classList.remove('visible');
    textElement.classList.add('hidden');
  }
}