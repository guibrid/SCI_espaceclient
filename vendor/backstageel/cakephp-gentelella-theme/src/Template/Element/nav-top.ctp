<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <nav class="" role="navigation">
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <?php echo $this->Html->image('Gentelella./images/img.jpg')?>
                            <?=  $this->request->session()->read('Auth.User.company') ?>
                            <?php //echo $this->request->session()->read('Auth.User.role'); ?>
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                            <li><a href="<?= $this->Url->build(['controller'=>'users','action'=>'logout'])?>"><i class="fa fa-sign-out pull-right"></i> <?= __('Se déconnecter')?></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
    <!-- /top navigation -->
<?php } ?>
