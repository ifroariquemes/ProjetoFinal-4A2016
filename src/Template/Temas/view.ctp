<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tema'), ['action' => 'edit', $tema->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tema'), ['action' => 'delete', $tema->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tema->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Temas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tema'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
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
            <th scope="row"><?= __('User') ?></th>
            <td><?= $tema->has('user') ? $this->Html->link($tema->user->id, ['controller' => 'Users', 'action' => 'view', $tema->user->id]) : '' ?></td>
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
    <div class="related">
        <h4><?= __('Related Pontos') ?></h4>
        <?php if (!empty($tema->pontos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Pontuacao') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Quest Id') ?></th>
                <th scope="col"><?= __('Tema Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tema->pontos as $pontos): ?>
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
    <div class="related">
        <h4><?= __('Related Quests') ?></h4>
        <?php if (!empty($tema->quests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tema Id') ?></th>
                <th scope="col"><?= __('Pont') ?></th>
                <th scope="col"><?= __('Enunci') ?></th>
                <th scope="col"><?= __('Resposta1') ?></th>
                <th scope="col"><?= __('Resposta2') ?></th>
                <th scope="col"><?= __('RespostaCorreta') ?></th>
                <th scope="col"><?= __('Resposta4') ?></th>
                <th scope="col"><?= __('Resposta5') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tema->quests as $quests): ?>
            <tr>
                <td><?= h($quests->id) ?></td>
                <td><?= h($quests->tema_id) ?></td>
                <td><?= h($quests->pont) ?></td>
                <td><?= h($quests->enunci) ?></td>
                <td><?= h($quests->resposta1) ?></td>
                <td><?= h($quests->resposta2) ?></td>
                <td><?= h($quests->respostaCorreta) ?></td>
                <td><?= h($quests->resposta4) ?></td>
                <td><?= h($quests->resposta5) ?></td>
                <td><?= h($quests->created) ?></td>
                <td><?= h($quests->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Quests', 'action' => 'view', $quests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Quests', 'action' => 'edit', $quests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quests', 'action' => 'delete', $quests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
