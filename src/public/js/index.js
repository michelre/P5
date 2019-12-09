window.addEventListener('load', function () {

  //POPUP
  //const popup = new Popup();
  $.getJSON('/api/get-destinations', (markers) => {
    const carte = new Carte(markers);
  })

  /* A la validation du formulaire d'inscription
  Pour plus tard
   */
    /*$.post('/api/subscribe-customer', formData).then((resp) => {
      return $.getJSON('/api/get-destinations')
    }).then((markers) => {
    //CARTE
    const carte = new Carte(markers);
  })*/

});





