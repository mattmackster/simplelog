<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exerciselog $exerciselog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Exerciselog'), ['action' => 'edit', $exerciselog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Exerciselog'), ['action' => 'delete', $exerciselog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciselog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Exerciselogs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exerciselog'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="exerciselogs view large-9 medium-8 columns content">
    <h3><?= h($exerciselog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $exerciselog->has('user') ? $this->Html->link($exerciselog->user->id, ['controller' => 'Users', 'action' => 'view', $exerciselog->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($exerciselog->comments) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($exerciselog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duration') ?></th>
            <td><?= $this->Number->format($exerciselog->duration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= $this->Number->format($exerciselog->distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logdate') ?></th>
            <td><?= h($exerciselog->logdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($exerciselog->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($exerciselog->modified) ?></td>
        </tr>
    </table>
</div>
