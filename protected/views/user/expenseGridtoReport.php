<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      username		</th>
 		<th width="80px">
		      password		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      activation_key		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      create_time		</th>
 		<th width="80px">
		      last_visit		</th>
 		<th width="80px">
		      avatar		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->username; ?>
		</td>
       		<td>
			<?php echo $row->password; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->activation_key; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->create_time; ?>
		</td>
       		<td>
			<?php echo $row->last_visit; ?>
		</td>
       		<td>
			<?php echo $row->avatar; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
