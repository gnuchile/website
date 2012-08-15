<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      user_id		</th>
 		<th width="80px">
		      title		</th>
 		<th width="80px">
		      body		</th>
 		<th width="80px">
		      status		</th>
 		<th width="80px">
		      in_frontpage		</th>
 		<th width="80px">
		      created_at		</th>
 		<th width="80px">
		      visits		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->user_id; ?>
		</td>
       		<td>
			<?php echo $row->title; ?>
		</td>
       		<td>
			<?php echo $row->body; ?>
		</td>
       		<td>
			<?php echo $row->status; ?>
		</td>
       		<td>
			<?php echo $row->in_frontpage; ?>
		</td>
       		<td>
			<?php echo $row->created_at; ?>
		</td>
       		<td>
			<?php echo $row->visits; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
