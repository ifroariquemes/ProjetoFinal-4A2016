<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Quests'), ['controller' => 'Quests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Quest'), ['controller' => 'Quests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="temas index large-9 medium-8 columns content">
    <h3><?= __('Temas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tema') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fatormult') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($temas as $tema): ?>
            <tr>
                <td><?= $this->Number->format($tema->id) ?></td>
                <td><?= h($tema->tema) ?></td>
                <td><?= $tema->has('user') ? $this->Html->link($tema->user->id, ['controller' => 'Users', 'action' => 'view', $tema->user->id]) : '' ?></td>
                <td><?= $this->Number->format($tema->fatormult) ?></td>
                <td><?= h($tema->created) ?></td>
                <td><?= h($tema->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tema->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tema->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
