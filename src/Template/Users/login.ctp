<!-- File: src/Template/Users/login.ctp -->
  <? echo $this->element('menu'); ?>

  <?= $this->Flash->render() ?>
<div class="center">
  <div class="users users_form form">
  <?= $this->Form->create() ?>
      <fieldset>
          <legend><?= __('Please enter your username and password') ?></legend>
          <?= $this->Form->control('username') ?>
          <?= $this->Form->control('password') ?>
      </fieldset>
  <?= $this->Form->button(__('Login')); ?>
  <?= $this->Form->end() ?>
  </div>
</div>
