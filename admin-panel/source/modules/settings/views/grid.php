<section class="panel">
	<header class="panel-heading">Editable Table</header>
	<div class="panel-body">
		<div class="adv-table editable-table ">
			<div class="clearfix">
				<div class="btn-group">
					<button id="editable-sample_new" class="btn green">
						Add New <i class="icon-plus"></i>
					</button>
				</div>
				<div class="btn-group pull-right">
					<button class="btn dropdown-toggle" data-toggle="dropdown">
						Tools <i class="icon-angle-down"></i>
					</button>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="#">Print</a>
						</li>
						<li>
							<a href="#">Save as PDF</a>
						</li>
						<li>
							<a href="#">Export to Excel</a>
						</li>
					</ul>
				</div>
			</div>
			<table class="table table-striped table-hover table-bordered" id="grid-data">
				<thead>
					<tr>
						<th><input type="checkbox" id="check-all"></th>
						<th>Full Name</th>
						<th>Points</th>
						<th>Notes</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><input type="checkbox" class="checkbox1"></td>
						<td>Alfred Jondi Rose</td>
						<td>1234</td>
						<td class="center">super user</td>
						<td><a class="edit" href="javascript:;">Edit</a></td>
						<td><a class="delete" href="javascript:;">Delete</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>