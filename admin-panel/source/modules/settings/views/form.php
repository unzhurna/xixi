<script src="<?php echo config_item('asset'); ?>js/bootstrap-fileupload.js"></script>
<div class="row">
	<form role="form">
		<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading">
					Basic Forms
				</header>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							</div>
                        </div>
						<div class="col-lg-6">
							<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
									<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
								</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
									<span class="btn btn-white btn-file">
									    <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
									    <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
										<input type="file" class="default" />
									</span>
									<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
						    
                        </div>
					</div>
			     </div>
			</section>
		</div>
	</form>
</div>