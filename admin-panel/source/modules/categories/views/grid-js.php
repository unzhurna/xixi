<script src="<?php echo config_item('asset'); ?>js/jquery.dataTables.js"></script>
<script src="<?php echo config_item('asset'); ?>js/DT_bootstrap.js"></script>
<script>
	//dataTables
    $(document).ready(function() {
        oTable = $('#grid_data').dataTable({
            'sDom': '<"row"<"col-lg-4 tools"><"col-lg-2"l><"col-lg-6"f>r>t<"row"<"col-lg-6"i><"col-lg-6"p>>',
            'bProcessing': true,
            'bServerSide': true,
            'sAjaxSource': '<?php  if(isset($source)) echo $source; ?>',
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax ({
                    type : 'POST',
                    url : sSource,
                    data : aoData,
                    dataType : 'json',
                    success : fnCallback
                });
            },
            'fnDrawCallback': function ( oSettings) {
                 // Edit Category 
                $('._edit').click(function(){
                    id = $(this).data('foo');
                    $.ajax({               
                        type: 'POST',
                        url: '<?php echo site_url('categories/call_form'); ?>/'+id,
                        success: function (data) {
                            $('#myModal').html(data).modal('show');
                        }
                    });
                    return false;
                });
                
                // tool tips    
                $('[title]').tooltip();
            },
        });     
        
       // Custom Button
        $('div.tools').html(
            '<div id="grid_data_length" class="dataTables_length">'+
                '<label>'+
                    '<button class="btn btn-primary" type="button" id="_add">'+
                        '<i class="icon-plus-sign"></i> Add New'+
                    '</button>'+                   
                '</label>'+
            '</div>'
        );
        
        // Custom Placehoder
        $('.dataTables_filter input').attr('placeholder','Search');
        
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
	});	
	
</script>