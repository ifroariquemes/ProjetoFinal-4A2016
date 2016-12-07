<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Quest'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quests index large-9 medium-8 columns content">
    <h3><?= __('Quests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tema_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pont') ?></th>
                <th scope="col"><?= $this->Paginator->sort('enunci') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resposta1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resposta2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('respostaCorreta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resposta4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resposta5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quests as $quest): ?>
            <tr>
                <td><?= $this->Number->format($quest->id) ?></td>
                <td><?= $quest->has('tema') ? $this->Html->link($quest->tema->id, ['controller' => 'Temas', 'action' => 'view', $quest->tema->id]) : '' ?></td>
                <td><?= $this->Number->format($quest->pont) ?></td>
                <td><?= h($quest->enunci) ?></td>
                <td><?= h($quest->resposta1) ?></td>
                <td><?= h($quest->resposta2) ?></td>
                <td><?= h($quest->respostaCorreta) ?></td>
                <td><?= h($quest->resposta4) ?></td>
                <td><?= h($quest->resposta5) ?></td>
                <td><?= h($quest->created) ?></td>
                <td><?= h($quest->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quest->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quest->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quest->id)]) ?>
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
