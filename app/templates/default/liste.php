<?php $this->layout('layout', ['title' => 'liste']) ?>



<?php $this->start('main_content') ?>



	<h2>Liste des url<?= $user['username'] ?></h2>
	<ul>
	<?php foreach ($posts as $post) { ?>
		<li>
			<a href="<?= $this->url('post', ['id' => $post['id']]) ?>">
				<?= $this->e($post['titre']) ?>
			</a>
		</li>
	<?php } ?>
	</ul>
<?php $this->stop('main_content') ?>



<?php $this->start('side_content') ?>
	<strong>Liste</strong>
<?php $this->stop('side_content') ?>