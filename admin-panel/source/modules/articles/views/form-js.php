<script src="<?php echo config_item('asset'); ?>js/jquery.slugify.js"></script>
<script src="<?php echo config_item('asset'); ?>js/jquery.tagsinput.js"></script>
<script src="<?php echo config_item('asset'); ?>js/tinymce/tinymce.min.js"></script>
<script>
//Slug Input
$('[name="slug02"]').slugify('[name="title"]');

//Tags Input
$('[name="tags"]').tagsInput();

tinymce.init({
    selector: "textarea",
    theme: "modern",
    height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking spellchecker",
         "table contextmenu directionality emoticons paste textcolor responsivefilemanager filemanager colorpicker"
   ],
   menubar: false,
   toolbar: "styleselect link | alignleft aligncenter alignright alignjustify | responsivefilemanager image media | preview",
   external_filemanager_path:"<?php echo config_item('asset'); ?>filemanager/",
   filemanager_title:"Filemanager" ,
   external_plugins: { "filemanager" : "<?php echo config_item('asset'); ?>filemanager/plugin.min.js"}
});

function call_modal() {
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url('categories/call_form'); ?>', 
        success: function (data) {
            $('#myModal').html(data).modal('show');
        }
    });
    return false;
}

 // Add Category
$('#_add').click(function(){
    $.ajax({               
        type: 'POST',
        url: '<?php echo site_url('categories/call_form'); ?>', 
        success: function (data) {
            $('#myModal').html(data).modal('show');
        }
    });
    return false;
});  
</script>