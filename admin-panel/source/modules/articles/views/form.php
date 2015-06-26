<div class="row">
	<div class="col-lg-12">
	    <h4><i class="icon-pencil"></i> Article Form</h4>
		<section class="panel">			
			<div class="panel-body">
				<form  method="POST" action="<?php echo site_url('articles/post'); ?>">
					<div class="row">
						<div class="col-lg-8">
							<div class="form-group">
								<label>Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="title">
							</div>
							<div class="form-group">
							    <label>Slug</label>
							    <input type="text" class="form-control" name="slug02">								
							</div>
							<div class="form-group">
							    <label>Content <span class="text-danger">*</span></label>                                
                                <textarea name="content"></textarea>
                            </div>
						</div>
						<div class="col-lg-4">
						    <div class="form-group">
                                <label>Category</label>
                                <div class="input-group">
                                    <?php echo form_dropdown('category02', $category_opt, set_value('parent'), 'class="form-control"'); ?>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default"  id="_add" type="button"><i class="icon-plus-sign"></i></button>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is-headline" value="1"> Set as headline
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input class="form-control" name="tags">
                                <span class="help-block">Separate tags with enter</span>
                            </div>                            
						</div>						
					</div>
					<div class="row">
					    <div class="col-lg-12">
					        <div class="pull-right">
                                <button type="submit" class="btn btn-info">
                                    <i class="icon-ok-sign"></i> Publish
                                </button>
                                <!--<button type="submit" class="btn btn-info">
                                    <i class="icon-ok-sign"></i> Save to draft
                                </button>-->    
					        </div>                            
                        </div>
					</div>
				</form>
			</div>
		</section>
	</div>
</div>