<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Accesslevel $accesslevel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Accesslevel'), ['action' => 'edit', $accesslevel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Accesslevel'), ['action' => 'delete', $accesslevel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accesslevel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accesslevels'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Accesslevel'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accesslevels view large-9 medium-8 columns content">
    <h3><?= h($accesslevel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($accesslevel->Description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($accesslevel->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Level') ?></th>
            <td><?= $this->Number->format($accesslevel->Level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($accesslevel->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($accesslevel->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($accesslevel->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('EmployeeID') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Accesslevel Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($accesslevel->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->EmployeeID) ?></td>
                <td><?= h($employees->Name) ?></td>
                <td><?= h($employees->accesslevel_id) ?></td>
                <td><?= h($employees->created) ?></td>
                <td><?= h($employees->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
