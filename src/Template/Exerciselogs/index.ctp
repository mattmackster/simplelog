<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Exerciselog[]|\Cake\Collection\CollectionInterface $exerciselogs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Exerciselog'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="exerciselogs index large-9 medium-8 columns content">
    <h3><?= __('Exerciselogs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($exerciselogs as $exerciselog): ?>
            <tr>
                <td><?= $this->Number->format($exerciselog->id) ?></td>
                <td><?= $exerciselog->has('user') ? $this->Html->link($exerciselog->user->id, ['controller' => 'Users', 'action' => 'view', $exerciselog->user->id]) : '' ?></td>
                <td><?= h($exerciselog->logdate) ?></td>
                <td><?= $this->Number->format($exerciselog->duration) ?></td>
                <td><?= $this->Number->format($exerciselog->distance) ?></td>
                <td><?= h($exerciselog->created) ?></td>
                <td><?= h($exerciselog->modified) ?></td>
                <td><?= h($exerciselog->comments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $exerciselog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $exerciselog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $exerciselog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciselog->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
