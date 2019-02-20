//funcion para bloquear el boton de back del navegador
history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1)
    };
    $(document).ready(function() {      
      $( "#close" ).click(function() {
        $( "#alert" ).hide();
      });
    });