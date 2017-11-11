<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reader[]|\Cake\Collection\CollectionInterface $readers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reader'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="readers index large-9 medium-8 columns content">
    <h3><?= __('Readers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ReaderID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Location_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($readers as $reader): ?>
            <tr>
                <td><?= $this->Number->format($reader->id) ?></td>
                <td><?= h($reader->ReaderID) ?></td>
                <td><?= $reader->has('location') ? $this->Html->link($reader->location->id, ['controller' => 'Locations', 'action' => 'view', $reader->location->id]) : '' ?></td>
                <td><?= h($reader->created) ?></td>
                <td><?= h($reader->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reader->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reader->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reader->id)]) ?>
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
