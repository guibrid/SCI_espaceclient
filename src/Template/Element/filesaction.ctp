<ul class="nav nav-pills" role="tablist">
  <li role="presentation"><a><?= __('ACTION') ?></a></li>
  <li role="presentation" class="dropdown">
    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Files<span class="caret"></span></a>
    <ul id="menu1" class="dropdown-menu animated fadeInDown" role="menu">
      <li role="presentation"><?= $this->Html->link( __('New'), '/files/add/',
                                                    [ 'role'     => 'menuitem', 'tabindex' => '-1' ] ) ?>
      </li>
      <li role="presentation"><?= $this->Html->link( __('List'), '/files/index/',
                                                    [ 'role'     => 'menuitem',
                                                      'tabindex' => '-1' ] ) ?>
      </li>
    </ul>
  </li>
  <li role="presentation" class="dropdown">
    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Tarifs<span class="caret"></span></a>
    <ul id="menu1" class="dropdown-menu animated fadeInDown" role="menu">
      <li role="presentation"><?= $this->Html->link( __('New'),
                                                    [ 'controller' => 'Tarifs', 'action' => 'add' ],
                                                    [ 'role'     => 'menuitem', 'tabindex' => '-1' ] ) ?>
      </li>
      <li role="presentation"><?= $this->Html->link( __('List'),
                                                    [ 'controller' => 'Tarifs', 'action' => 'index' ],
                                                    [ 'role'     => 'menuitem',
                                                      'tabindex' => '-1' ] ) ?>
      </li>
    </ul>
  </li>
  <li role="presentation" class="dropdown">
    <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Users<span class="caret"></span></a>
    <ul id="menu1" class="dropdown-menu animated fadeInDown" role="menu">
      <li role="presentation"><?= $this->Html->link( __('New'),
                                                    [ 'controller' => 'Users', 'action' => 'add' ],
                                                    [ 'role'     => 'menuitem', 'tabindex' => '-1' ] ) ?>
      </li>
      <li role="presentation"><?= $this->Html->link( __('List'),
                                                    [ 'controller' => 'Users', 'action' => 'index' ],
                                                    [ 'role'     => 'menuitem',
                                                      'tabindex' => '-1' ] ) ?>
      </li>
    </ul>
  </li>
</ul>
