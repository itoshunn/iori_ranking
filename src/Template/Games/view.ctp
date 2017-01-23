<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
        <hr>
        <ul><?= $this->Html->link(__('勝敗記録一覧'), ['controller' => 'Records', 'action' => 'index']) ?>
            <li><?= $this->Html->link(__('新規追加'), ['controller' => 'Records', 'action' => 'add']) ?> </li>
        </ul>
        <ul><?= $this->Html->link(__('挑戦者一覧'), ['controller' => 'Users', 'action' => 'index']) ?>
            <li><?= $this->Html->link(__('新規登録'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        </ul>
        <ul><?= $this->Html->link(__('ゲーム一覧'), ['controller' => 'Games', 'action' => 'index']) ?>
            <li><?= $this->Html->link(__('新規追加'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        </ul>
        <ul><?= $this->Html->link(__('ゲームカテゴリ一覧'), ['controller' => 'GameCategories','action' => 'index']) ?> 
            <li><?= $this->Html->link(__('カテゴリ追加'), ['controller' => 'GameCategories','action' => 'add']) ?> </li>
        </ul>

    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($game->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Game Category Id') ?></th>
            <td><?= $this->Number->format($game->game_category_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($game->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($game->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Records') ?></h4>
        <?php if (!empty($game->records)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Game Id') ?></th>
                <th scope="col"><?= __('Game Count') ?></th>
                <th scope="col"><?= __('Win') ?></th>
                <th scope="col"><?= __('Lose') ?></th>
                <th scope="col"><?= __('Draw') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($game->records as $records): ?>
            <tr>
                <td><?= h($records->id) ?></td>
                <td><?= h($records->user_id) ?></td>
                <td><?= h($records->game_id) ?></td>
                <td><?= h($records->game_count) ?></td>
                <td><?= h($records->win) ?></td>
                <td><?= h($records->lose) ?></td>
                <td><?= h($records->draw) ?></td>
                <td><?= h($records->created) ?></td>
                <td><?= h($records->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Records', 'action' => 'view', $records->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Records', 'action' => 'edit', $records->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Records', 'action' => 'delete', $records->id], ['confirm' => __('Are you sure you want to delete # {0}?', $records->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
