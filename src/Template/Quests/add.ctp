<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Quests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quests form large-9 medium-8 columns content">
    <?= $this->Form->create($quest) ?>
    <fieldset>
        <legend><?= __('Add Quest') ?></legend>
        <?php
            echo $this->Form->input('tema_id', ['options' => $temas, 'empty' => true]);
            echo $this->Form->input('pont');
            echo $this->Form->input('enunci');
            echo $this->Form->input('resposta1');
            echo $this->Form->input('resposta2');
            echo $this->Form->input('respostaCorreta');
            echo $this->Form->input('resposta4');
            echo $this->Form->input('resposta5');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
