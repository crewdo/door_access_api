<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reader $reader
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reader'), ['action' => 'edit', $reader->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reader'), ['action' => 'delete', $reader->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reader->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Readers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reader'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="readers view large-9 medium-8 columns content">
    <h3><?= h($reader->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ReaderID') ?></th>
            <td><?= h($reader->ReaderID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $reader->has('location') ? $this->Html->link($reader->location->id, ['controller' => 'Locations', 'action' => 'view', $reader->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($reader->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($reader->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($reader->modified) ?></td>
        </tr>
    </table>
</div>
