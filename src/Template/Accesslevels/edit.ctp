<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accesslevel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accesslevel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Accesslevels'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accesslevels form large-9 medium-8 columns content">
    <?= $this->Form->create($accesslevel) ?>
    <fieldset>
        <legend><?= __('Edit Accesslevel') ?></legend>
        <?php
            echo $this->Form->control('Level');
            echo $this->Form->control('Description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
