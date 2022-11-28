

function prueba(){
    Swal.fire(
    'chao !',
    'You clicked the button!',
    'success'
    )
    }  


    $(document).ready(function () {
        $('#tablaPer').DataTable({

            rowReorder: {
                selector: 'td:nth-child(2)'
            },
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


    function eliminaEspacios(){
        var getText = document.getElementById("text-area").textContent;
        document.getElementById("text-area").textContent = getText.trim();
      
        $('input').val(function(_, value) {
           return $.trim(value);
        });
    }
    function eliminar(url)
    {
        if(window.confirm("Realmente desea eliminar este registro?"))
        {
            window.location=url;
        }
    
    }
    $(document).ready(function(){
        $(".registrar").click(function(e){
          if(e.target.id == 'btnRegistrar'){
            $("#modal-title").text("Usuario creado correctamente");
          }else{
            $("#modal-title").text("El correo ya existe");
          }
          $('#myModal').modal('show');
        });
    });

    function evaluar()
    {
        var $pass = document.getElementById('clave').value;
        alert($pass); 
    }

    $(document).ready(function(){

        $('#save').on('change', function(){
      
            var pass = document.getElementById('clave').value;
      
      
            $.ajax({
                    url: "eliminar.php",
                    type: "POST",
                    async: true,
                    data: {
                      pass : pass} ,
                          success: function(result) {
                             $('#resultado').html(result);
      
                          },
                          error: function(result) {
      
                        $('#resultado').html('Se ha producido un error.');
                          }
                    });
      
            })
        });

    function enviar(){
        document.formulario1.submit()
        }

        $('#salir').click(function(){

            $('#cerrar').submit(); 
        
        });

    $(document).on('click', '#abrir', function() {
    $('#miModal').modal();
    });
    

    
	$('#miModal').modal();


    $('#confirm-delete').data('data-id',id);



    var limit = 40;
$(function() {
    $("#txt_detalle").on("input", function () {
        //al cambiar el texto del txt_detalle
        var init = $(this).val().length;
        total_characters = (limit - init);

        $('#contador').html(total_characters + " caracteres restantes");
    });
});

var caja1 = document.getElementById("caja1");
var caja2 = document.getElementById("caja2");



$('#confirm-delete').on('show.bs.modal', function(e) {
    var bookId = $(e.relatedTarget).data('book-id');
    $(e.currentTarget).find('input[name="bookId"]').val(bookId);
});


$(document).ready(function(){
    $(document).on('click','.elim',function(){
        var id=$(this).val();
        var ide = $('#id'+id).text();


        $('#elim').modal('show');
        $('#eid').val('ide');
    });

});

$(document).on("click", "#btnmodal",function () {
		
    var ide =$(this).data('nom');


    $("#ide").val(ide);



 
})