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

