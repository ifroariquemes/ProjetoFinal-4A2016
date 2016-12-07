<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tema->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quests'), ['controller' => 'Quests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quest'), ['controller' => 'Quests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temas form large-9 medium-8 columns content">
    <?= $this->Form->create($tema) ?>
    <fieldset>
        <legend><?= __('Edit Tema') ?></legend>
        <?php
            echo $this->Form->input('tema');
            echo $this->Form->input('fatormult');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
