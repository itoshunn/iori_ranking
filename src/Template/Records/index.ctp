<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
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
    </ul>
</nav>
<div class="records index large-9 medium-8 columns content">
    <h3><?= __('Records') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('game_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('win') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lose') ?></th>
                <th scope="col"><?= $this->Paginator->sort('draw') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
            <tr>
                <td><?= $this->Number->format($record->id) ?></td>
                <td><?= $record->has('user') ? $this->Html->link($record->user->name, ['controller' => 'Users', 'action' => 'view', $record->user->id]) : '' ?></td>
                <td><?= $record->has('game') ? $this->Html->link($record->game->title, ['controller' => 'Games', 'action' => 'view', $record->game->id]) : '' ?></td>
                <td><?= $this->Number->format($record->game_count) ?></td>
                <td><?= $this->Number->format($record->win) ?></td>
                <td><?= $this->Number->format($record->lose) ?></td>
                <td><?= $this->Number->format($record->draw) ?></td>
                <td><?= h($record->created) ?></td>
                <td><?= h($record->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $record->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $record->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $record->id], ['confirm' => __('Are you sure you want to delete # {0}?', $record->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
