<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Data'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buses'), ['controller' => 'Buses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bus'), ['controller' => 'Buses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="data form large-9 medium-8 columns content">
    <?= $this->Form->create($data) ?>
    <fieldset>
        <legend><?= __('Add Data') ?></legend>
        <?php
            echo $this->Form->input('bus_id', ['options' => $buses]);
            echo $this->Form->input('lat');
            echo $this->Form->input('lon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
