<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tema'), ['action' => 'edit', $tema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tema'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quests'), ['controller' => 'Quests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quest'), ['controller' => 'Quests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="temas view large-9 medium-8 columns content">
    <h3><?= h($tema->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= h($tema->tema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tema->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fatormult') ?></th>
            <td><?= $this->Number->format($tema->fatormult) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tema->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tema->modified) ?></td>
        </tr>
    </table>
</div>
