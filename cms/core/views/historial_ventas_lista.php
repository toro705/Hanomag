<?php
/* Vista para historial de ventas
*  Agrego botón para importar ventas del día
*/
$buscador = include('includes/lista/buscador.php');

$listado_cabecera = include('includes/lista/cabecera.php');

$listado_cuerpo = '';
foreach($items as $item){
    $campos		= include('includes/lista/campos.php');
    $acciones 	= include('includes/lista/acciones.php');
	$listado_cuerpo .=
    '<tr class="item" data-id="'.$item->id.'">'.
        ($ordenar ? '<td class="js-orden grip"></td>' : '').
        $campos.
        '<td class="bottons">'.$acciones.'</td>'.
    '</tr>';
}

$boton_csv = include('includes/lista/boton_csv.php');
$boton_xml = include('includes/lista/boton_xml.php');

?>

 <div id="wrapper">
    <div id="content">

        <div class="<?php echo ($buscador!='') ? 'border-bottom' : ''?>">
            <?php echo $buscador?>
        </div>

        <div class="mensaje-feedback" style="display: none;"><?php echo isset($message) ? $message : ''; ?></div>

    	<?= $name ? '<h1>Listado de '.$name.'</h2>' : '<br><br>' ?>
        <table class="list <?=$ordenar ? 'lista-ordenable' : ''?>" width="100%" style="margin-bottom:30px;">
            <thead>
               <?php echo $listado_cabecera; ?>
            </thead>
            <tbody>
				<?php echo ($listado_cuerpo!='') ? $listado_cuerpo : '<td colspan="'.count($campos_form).'">No hay datos para mostrar.</td>'; ?>
            </tbody>
        </table>

        <input type="hidden" name="sort_order" id="sort_order" value="<?php echo implode('-',$orden); ?>"/>
        <input type="hidden" name="orden_inicio" id="orden_inicio" value="<?php echo intval($orden_inicio); ?>"/>

        <?php if($ordenar){?>
        <p>Agarrá y arrastrá las filas para ordenarlas.</p>
        <?php }?>

        <div class="pager">
            <?php echo $paginator ?>
        </div>


		<div class="lista_acciones-gral">
            <?php echo ($add_button) ? '<input type="button" class="boton" value="'.$add_button_label.'" onclick="document.location.href = \''.base_url().$controller.'/add/'.$uriParameters.'\'">' : ''; ?>
			<?php echo $boton_csv; ?>
            <?php echo $boton_xml; ?>
            <?php
                $html_importar_csv =
                '<form action="'.base_url().$controller.'/importar_csv/" method="post" enctype="multipart/form-data">
                    <label class="boton" for="listado_ventas">
                        Importar CSV
                        '.form_upload(array(
                            'name' => 'listado_ventas',
                            'id'   => 'listado_ventas',
                            'class'=> 'js-csv-import',
                            'style'=> 'display: none;',
                        )).'
                    </lable>
                    <script>$(document).ready(function(){
                        $(".js-csv-import").change(function(){
                            $(this).parents("form").first().submit();
                        });
                    });</script>
                </form>';
                       /* En un futuro podemos cargar el archivo con AJAX
                        $html2 = '<script>'.
                                        '$("<div id=\"js-csv-import-container-listado_ventas\"></div>").insertBefore(".js-csv-import-listado_ventas");'.
                                        '$("#listado_ventas").remove();'.

                                //Documentación: http://valums-file-uploader.github.io/file-uploader/
                                'jQuery(function(){
                                    var uploader_listado_ventas = new qq.FileUploader({
                                        element: document.getElementById("js-csv-import-container-listado_ventas"),
                                        action: "'.base_url().$controller.'/",
                                        messages: {
                                            typeError: "{file} tiene una extensión inválida. Dole están permitidas las siguientes: {extensions}.",
                                            sizeError: "{file} es muy grande, el tamaño máximo permitido es {sizeLimit}.",
                                            minSizeError: "{file} es muy chico, el tamaño mínimo es {minSizeLimit}.",
                                            emptyError: "{file} está vacío, por favor seleccioná el archivo de nuevo.",
                                            onLeave: "Los archivos se están subiendo, si te vas ahora la transferencia va a ser cancelada."
                                        },

                                        onError: function(id, fileName, xhr){
                                            alert(xhr.responseText);
                                        },
                                        onComplete: function(id, fileName, responseJSON){
                                            if(responseJSON.success === true){
                                                var archivo_id;
                                                if(responseJSON.archivo_id==undefined){
                                                    archivo_id = 0;
                                                }else{
                                                    archivo_id = responseJSON.archivo_id;
                                                }
                                                console.log();
                                            }
                                        },
                                        debug: true,

                                        dragText: "Arrastrá y soltá los archivos acá para subirlos",
                                        uploadButtonText: "Subir archivo",
                                        cancelButtonText: "Cancelar",
                                        failUploadText: "Subida fallida",
                                    });
                                });'.
                            '</script>';*/
            ?>
			<?php echo $html_importar_csv ?>
        </div>
    </div>
</div>

<?php if($ordenar){?>
<!-- Ordenar listado con  drag and drop -->
<script src="<?=base_url()?>core/js/vistas/ordenar.js"></script>
<?php } ?>