<?php
/**
  * @var \App\View\AppView $this
  */
?>

<? echo $this->element('menu'); ?>
<div class="notes form large-9 medium-8 columns content">
    <?= $this->Form->create($note) ?>
    <fieldset>
        <legend><?= __('Edit Note') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('content');
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
    <button id="delete">
      <?= $this->Form->postLink(
              __('Delete'),
              ['action' => 'delete', $note->id],
              ['confirm' => __('Are you sure you want to delete # {0}?', $note->id)]
          )
      ?>
    </button>
</div>
