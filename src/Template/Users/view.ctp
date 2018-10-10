<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Exerciselogs'), ['controller' => 'Exerciselogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Exerciselog'), ['controller' => 'Exerciselogs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($user->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Exerciselogs') ?></h4>
        <?php if (!empty($user->exerciselogs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Logdate') ?></th>
                <th scope="col"><?= __('Duration') ?></th>
                <th scope="col"><?= __('Distance') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Comments') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->exerciselogs as $exerciselogs): ?>
            <tr>
                <td><?= h($exerciselogs->id) ?></td>
                <td><?= h($exerciselogs->user_id) ?></td>
                <td><?= h($exerciselogs->logdate) ?></td>
                <td><?= h($exerciselogs->duration) ?></td>
                <td><?= h($exerciselogs->distance) ?></td>
                <td><?= h($exerciselogs->created) ?></td>
                <td><?= h($exerciselogs->modified) ?></td>
                <td><?= h($exerciselogs->comments) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Exerciselogs', 'action' => 'view', $exerciselogs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Exerciselogs', 'action' => 'edit', $exerciselogs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Exerciselogs', 'action' => 'delete', $exerciselogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $exerciselogs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
