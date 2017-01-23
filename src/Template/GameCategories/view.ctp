<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game Category'), ['action' => 'edit', $gameCategory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game Category'), ['action' => 'delete', $gameCategory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gameCategory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Game Categories'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game Category'), ['action' => 'add']) ?> </li>
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
<div class="gameCategories view large-9 medium-8 columns content">
    <h3><?= h($gameCategory->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($gameCategory->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gameCategory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($gameCategory->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($gameCategory->modified) ?></td>
        </tr>
    </table>
</div>
