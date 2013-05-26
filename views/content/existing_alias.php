<div class="admin-box">
	<h3>Existing aliases</h3>
	
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Target module</th>
				<th>Target table row id</th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($alias_records) && is_array($alias_records) && count($alias_records)) : ?>
			<?php foreach ($alias_records as $alias_record) : ?>
				<tr>
					<td><?php echo $alias_record->id; ?></td>
					<td><?php echo $alias_record->target_module; ?></td>
					<td><?php echo $alias_record->target_table_row_id; ?></td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="3">No records found that match your selection.</td>
			</tr>
		<?php endif; ?>
		</tbody>
	</table>
</div>