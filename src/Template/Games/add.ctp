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
</nav>
<div class="games form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Add Game') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('game_category_id', [
                'options' => $categories
            ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
