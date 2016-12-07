<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
