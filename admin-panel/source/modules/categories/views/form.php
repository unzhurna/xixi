<script src="<?php echo config_item('asset'); ?>js/jquery.slugify.js"></script>
<script>
    // Slug Input
    $('[name="slug01"]').slugify('[name="category01"]');
    
    // Submit Form
    $('#myModalform').submit(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo site_url('categories/submit_form'); ?>',            
            datatype: 'json',
            data: $(this).serialize(),
            success: function(data) {
                jsonData = $.parseJSON(data);
                if(jsonData.status == 0) {
                    gritter_alert(jsonData.alert);
                } else {
                    $('#myModal').modal('toggle');
                    gritter_alert(jsonData.alert); 
                    $('[name="category02"]').append('<option selected value='+jsonData.id+'>'+$('[name="category01"]').val()+'</option>');  
                    oTable.fnDraw();                    
                }
            }           
        });
        return false;
    });
</script>
<div class="modal-dialog modal-sm">
	<form id="myModalform">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title"><i class="icon-pencil"></i> Category Form</h4>
			</div>
			<div class="modal-body">
                <div class="form-group">
                    <label>Category <span class="text-danger">*</span></label>
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
                    <input type="hidden" class="form-control" name="slug01" value="<?php echo $slug; ?>">
                    <input type="text" class="form-control" name="category01" value="<?php echo set_value('category', $category); ?>">                    
                </div>
                <div class="form-group">
                    <label>Parent</label>
                    <?php echo form_dropdown('parent', $parent_opt, set_value('parent', $parent), 'class="form-control"'); ?>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
                </div>
			</div>
			<div class="modal-footer">
			    <?php if(!$id) : ?>
                <button data-dismiss="modal" class="btn btn-default" type="button"><i class="icon-remove-circle"></i> Cancel</button>
		        <?php else : ?>				
				<button class="btn btn-danger"  type="button" onclick="myConfirm('<?php echo site_url("categories/delete_category/".$id); ?>')"><i class="icon-trash"></i> Delete</button>
				<?php endif ?>
				<button class="btn btn-primary" type="submit"><i class="icon-ok-circle"></i> Submit</button>
			</div>
		</div>
	</form>
</div>