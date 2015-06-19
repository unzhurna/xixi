<script src="<?php echo config_item('asset'); ?>js/jquery.dataTables.js"></script>
<script src="<?php echo config_item('asset'); ?>js/DT_bootstrap.js"></script>
<script>
    $(document).ready(function(){
       oTable = $('#grid-data').dataTable({
            'sDom': '<"row"<"col-lg-3"l><"col-lg-3"i><"col-lg-6"f>r>t<"row"<"col-lg-6"><"col-lg-6"p>>',
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
        });
        
       // Custom Button
        $('div.add-btn').html(
            '<div id="grid_data_length" class="dataTables_length">'+
                '<label>'+
                    '<button class="btn btn-info" onclick="call_modal(0)">'+
                        '<i class="icon-plus-sign"></i> Tambah data'+
                    '</button>'+
                '</label>'+
            '</div>'
        );
        
        // Custom Placehoder
        $('.dataTables_filter input').attr('placeholder','Cari Data');
        
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