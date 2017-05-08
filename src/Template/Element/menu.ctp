<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <? if ($authUser): ?>
          <li><?= $this->Html->link(__('New Note'), ['controller' => 'Notes', 'action' => 'add']) ?></li>
          <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
          <hr />
          <li><?= $this->Html->link(__('List Notes'), ['controller' => 'Notes', 'action' => 'index']) ?></li>
          <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
          <hr />
          <li><?= $this->Html->link(__('Settings'), ['controller' => 'Users', 'action' => 'edit']) ?></li>
          <li><?= $this->Html->link(__('Logout ('.$authUser['username'].')'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
        <? else: ?>
          <li><?= $this->Html->link(__('Login'), ['controller' => 'Users', 'action' => 'login'])?></li>
            <li><?= $this->Html->link(__('Sign in'), ['controller' => 'Users', 'action' => 'add'])?></li>
        <? endif; ?>
    </ul>
</nav>
