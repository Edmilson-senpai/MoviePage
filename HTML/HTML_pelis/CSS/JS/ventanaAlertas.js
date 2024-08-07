function confirmacion(){

    swal({
        title: "Esta operación le enviara a otra pagina",
        text: "¿Esta seguro que desea continuar?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("REDIRECCIONANDO", {
            icon: "success",
          });

          
          return window.location="HTML/HTML_pelis/CSS/HTML_generos/CSS_generos/HTML_iniciRegis/Registro.html";

          
        } else {
          swal("OPERACION CANCELADA",{
            icon: "error",
          });
            
        }
    });

     
}