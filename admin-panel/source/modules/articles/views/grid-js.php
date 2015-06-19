<script src="<?php echo config_item('asset'); ?>js/jquery.dataTables.js"></script>
<script src="<?php echo config_item('asset'); ?>js/DT_bootstrap.js"></script>
<script>
    $(document).ready(function(){
       oTable = $('#grid-data').dataTable({
            'sDom': '<"row"<"col-lg-2 tools"><"col-lg-4"l><"col-lg-6"f>r>t<"row"<"col-lg-6"i><"col-lg-6"p>>',
            'bProcessing': false,
            'bServerSide': false,
            'sAjaxSource': '<?php  if(isset($source)) echo $source; ?>',
            'iDisplayLength': 25,
            'aoColumnDefs': [{
                'bSortable': false,
                'sClass': 'tb-checkbox',
                'aTargets': [0]
            }],
            'fnServerData': function (sSource, aoData, fnCallback) {
                $.ajax ({
                    type : 'POST',
                    url : sSource,
                    data : aoData,
                    dataType : 'json',
                    success : fnCallback
                });
            },
            'fnDrawCallback': function (oSettings) {
                // tool tips
                $('[title]').tooltip();
            },
        });
        
       // Custom Button
        $('div.tools').html(
            '<div id="grid_data_length" class="dataTables_length">'+
                '<label>'+
                    '<div class="btn-group">'+
                        '<button class="btn btn-default" title="Add" id="_delete">'+
                            '<i class="icon-plus-sign"></i>'+
                        '</button>'+
                        '<button class="btn btn-default" title="Edit" id="_print">'+
                            '<i class="icon-file"></i>'+
                        '</button>'+
                        '<button class="btn btn-default" title="Export" id="_test">'+
                            '<i class="icon-plus-sign"></i>'+
                        '</button>'+
                    '</div>'+                    
                '</label>'+
            '</div>'
        );
        
        // Custom Placehoder
        $('.dataTables_filter input').attr('placeholder','Search');
        
        //Check all data in table
        $("#check-all").click(function() {
            if($(this).is(':checked')) {
                $(".checkbox1").prop("checked", true);
            } else {
                $(".checkbox1").prop("checked", false);
            }       
        });
        
    });
</script>