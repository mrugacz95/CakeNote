<?php
/**
  * @var \App\View\AppView $this
  */
?>
<? echo $this->element('menu'); ?>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Register') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Sign in')) ?>
    <?= $this->Form->end() ?>
</div>
