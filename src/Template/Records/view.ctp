<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Record'), ['action' => 'edit', $record->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Record'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="records view large-9 medium-8 columns content">
    <h3><?= h($record->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $record->has('user') ? $this->Html->link($record->user->name, ['controller' => 'Users', 'action' => 'view', $record->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game') ?></th>
            <td><?= $record->has('game') ? $this->Html->link($record->game->title, ['controller' => 'Games', 'action' => 'view', $record->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($record->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Count') ?></th>
            <td><?= $this->Number->format($record->game_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Win') ?></th>
            <td><?= $this->Number->format($record->win) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lose') ?></th>
            <td><?= $this->Number->format($record->lose) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Draw') ?></th>
            <td><?= $this->Number->format($record->draw) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($record->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($record->modified) ?></td>
        </tr>
    </table>
</div>
