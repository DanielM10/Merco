<style>
.resaltar{background-color:#FF0;}
</style> 
  <script type='text/javascript' >
    $.expr[':'].icontains = function(obj, index, meta, stack){
    return (obj.textContent || obj.innerText || jQuery(obj).text() || '').toLowerCase().indexOf(meta[3].toLowerCase()) >= 0;
    };
    $(document).ready(function(){   
        $('#buscador').keyup(function(){
                     buscar = $(this).val();
                     $('#lista li').removeClass('resaltar');
                            if(jQuery.trim(buscar) != ''){
                               $("#lista li:icontains('" + buscar + "')").addClass('resaltar');
                            }
            });
    });   
 </script> 
 <ul id="lista"> 