<script>
    function marcaacceder(){
    var acce=document.getElementById("acc1").value;  
    if(acce==1){
    $(".acceder").val(0);
    $(".acceder").prop('checked', false);
    $("#acc1").val(0);
}
else{
    $(".acceder").val(1);
    $(".acceder").prop('checked', true);
    $("#acc1").val(1);
}
}
    function marcaguardar(){
    var gua=document.getElementById("marcaguardar1").value;  
    if(gua==1){
        $(".guardar").val(0);
    $(".guardar").prop('checked', false); 
    $("#marcaguardar1").val(0);
}
else{
    $(".guardar").val(1);
    $(".guardar").prop('checked', true); 
    $("#marcaguardar1").val(1);
}

    }
    function marcaeditar(){
    var edi=document.getElementById("marcaeditar1").value;  
    if(edi==1){
        $(".editar").val(0);
    $(".editar").prop('checked', false);
    $("#marcaeditar1").val(0);
}
else{
    $(".editar").val(1);
    $(".editar").prop('checked', true);
    $("#marcaeditar1").val(1);
}
   
        }
    function marcaeliminar(){
    var eli=document.getElementById("marcaeliminar1").value;  
    if(eli==1){
        $(".eliminar").val(0);
        $(".eliminar").prop('checked', false); 
        $("#marcaeliminar1").val(0);
    }
    else{
        $(".eliminar").val(1);
        $(".eliminar").prop('checked', true); 
        $("#marcaeliminar1").val(1);
    }

            }
function switchero(t){
    var id = $(t).attr("id");
    var valor=t.value;
    if(valor==1){
        alert(id+t.value);
        $("#"+id).val(0);
    }
    else{
alert(id+t.value);
$("#"+id).val(1);
    }
  
}

</script>
<div class="row">
                                                    <div class="col-md-12">
                         
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class=" col-md-4 col-xs-12">
                                                                            Pantalla
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input id="acc1" onclick="marcaacceder();" type="checkbox" checked value="1" />
                                                                                <span></span>
                                                                            </label>Acceder
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input id="marcaguardar1" onclick="marcaguardar();" type="checkbox" checked value="1" />
                                                                                <span></span>
                                                                            </label>Guardar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input id="marcaeditar1" onclick="marcaeditar();" type="checkbox" checked value="1" />
                                                                                <span></span>
                                                                            </label>Editar
                                                                        </th>                                                                        
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input id="marcaeliminar1" onclick="marcaeliminar();" type="checkbox" checked value="1" />
                                                                                <span></span>
                                                                            </label>Eliminar
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($menusx as $menux)
                                                                <tr>
                                                                <td>{{$menux->Descipcion}}</td>

                                                                <td>
                                                                            <label class="switch switch-small">
                                                                                <input id="" class="acceder" onclick="switchero(this);" type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input class="guardar" onclick="switchero(this);" type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input class="editar" onclick="switchero(this);" type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input class="eliminar" onclick="switchero(this);" type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>      
                                                                </tr>
                                                                @endforeach                                                                  
                                                                </tbody>
                                                            </table>
                                                    </div>
                                                </div>