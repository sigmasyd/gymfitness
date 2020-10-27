jQuery(document).ready(($) => {
  $('.site-header .menu-principal .menu').slicknav({
    label: '',
    appendTo: '.site-header',
  });

  //Agregar Slider
  if($('.listado-testimoniales').length>0){
    $('.listado-testimoniales').bxSlider({
      auto: true,
      mode: 'fade',
      controls: false
    });
  }

  // Mapa de Leaflet
  if( document.querySelector('#lat') != null && document.querySelector('#lng') != null ){
    const lat = document.querySelector('#lat').value,
          lng = document.querySelector('#lng').value,
          direccion = document.querySelector('#direccion').value;
  
    if(lat && lng && direccion){
      var map = L.map('mapa').setView([lat,lng], 15);
    
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
    
      L.marker([51.5, -0.09]).addTo(map)
        .bindPopup(direccion)
        .openPopup();
    }
  }

});
// agrega posicion fija en el header al hacer scroll
window.onscroll = () => {
  const scroll = window.scrollY;
  console.log('scrolling ... ' , scroll);
  const headerNav = document.querySelector('.barra-navegacion');
  // si la cantidad de scroll es mayor a, agregar clase
  if(scroll>300){
    console.log('si');
    headerNav.classList.add('fixed-top');
  }else{
    console.log('no');
    headerNav.classList.remove('fixed-top');
  }
}