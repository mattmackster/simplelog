<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exerciselog $exerciselog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $exerciselog->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $exerciselog->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Exerciselogs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exerciselogs form large-9 medium-8 columns content">
    <?= $this->Form->create($exerciselog) ?>
    <fieldset>
        <legend><?= __('Edit Exerciselog') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('logdate', ['empty' => true]);
            echo $this->Form->control('duration');
            echo $this->Form->control('distance');
            echo $this->Form->control('comments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
