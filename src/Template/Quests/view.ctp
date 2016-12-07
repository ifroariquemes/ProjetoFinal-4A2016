<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Quest'), ['action' => 'edit', $quest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quest'), ['action' => 'delete', $quest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quest'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['controller' => 'Temas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['controller' => 'Temas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pontos'), ['controller' => 'Pontos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ponto'), ['controller' => 'Pontos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="quests view large-9 medium-8 columns content">
    <h3><?= h($quest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tema') ?></th>
            <td><?= $quest->has('tema') ? $this->Html->link($quest->tema->id, ['controller' => 'Temas', 'action' => 'view', $quest->tema->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enunci') ?></th>
            <td><?= h($quest->enunci) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta1') ?></th>
            <td><?= h($quest->resposta1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta2') ?></th>
            <td><?= h($quest->resposta2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RespostaCorreta') ?></th>
            <td><?= h($quest->respostaCorreta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta4') ?></th>
            <td><?= h($quest->resposta4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resposta5') ?></th>
            <td><?= h($quest->resposta5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($quest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pont') ?></th>
            <td><?= $this->Number->format($quest->pont) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($quest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($quest->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pontos') ?></h4>
        <?php if (!empty($quest->pontos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Pontuacao') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Quest Id') ?></th>
                <th scope="col"><?= __('Tema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($quest->pontos as $pontos): ?>
            <tr>
                <td><?= h($pontos->pontuacao) ?></td>
                <td><?= h($pontos->user_id) ?></td>
                <td><?= h($pontos->quest_id) ?></td>
                <td><?= h($pontos->tema_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pontos', 'action' => 'view', $pontos->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pontos', 'action' => 'edit', $pontos->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pontos', 'action' => 'delete', $pontos->], ['confirm' => __('Are you sure you want to delete # {0}?', $pontos->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
