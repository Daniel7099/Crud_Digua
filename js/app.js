$(document).ready(function () {
    $('#tablaPersona').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        searching:false,
        responsive: true,
        autowidth:false,
        "drawCallback": function( settings ) {
            $('ul.pagination').addClass("pagination-sm");
       },
        //"columnDefs": [
        //    { "width": "50%", "targets": 0 }
        //  ],


        language: {
            url: 'https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-CL.json',
        },
        

    });
});



function eliminaEspacio(){
    var getText = document.getElementById("text-area").textContent;
    document.getElementById("text-area").textContent = getText.trim();
  
    $('input').val(function(_, value) {
       return $.trim(value);
    });
}
function pregunta(){  
    swal({
      title: "Success!",
      text: "Redirecting in 2 seconds.",
      type: "success",
      timer: 2000,
      showConfirmButton: false
    }, function(){
          window.location.href = "tupaginaweb.com";
    });
         } 

function alerta(){
    Swal.fire(
    'Good job!',
    'You clicked the button!',
    'success'
    )
    }     

function todas(){
    eliminaEspacio();
    alerta();
}
        

function enviar_formulario(){
document.formulario1.submit()
}
		
$('#salir').click(function(){

    $('#cerrar').submit(); 

});

