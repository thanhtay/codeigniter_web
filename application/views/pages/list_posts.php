<table>
	<thead>
		<td>id</td>
		<td>Title</td>
		<td>created at</td>
		<td>updated at</td>
	</thead>
	<tbody>
		<?php 
    foreach ($posts as $key => $post) {?>
		<tr>
			<td><?= $post->id;?></td>
			<td><?= anchor('post/'.$post->id, $post->title);?></td>
			<td><?= Until::gennerateDate($post->created_at);?></td>
			<td><?=  Until::gennerateDate($post->updated_at);?></td>
		</tr>
		<?php }
    ?>
	</tbody>
</table>
