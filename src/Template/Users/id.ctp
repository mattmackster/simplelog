<h1>
	Getting all Users with this specific id
	<?= $this->Text->toList($ids); ?>

</h1>

<section>
		<article>
			<!-- <h4><?= $this->Html->link($founduser->url); ?></h4> -->
		<!--	<h4><?= $this->Text->autoParagraph($founduser); ?></h4> -->
			<h4><?= $this->Text->toList($founduser); ?></h4>
		</article>
	

</section>

