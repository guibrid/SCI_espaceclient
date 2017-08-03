<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS. 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'aside' . DS . 'sidebar-menu.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

        <div class="menu_section">

            <ul class="nav side-menu">
                <!--<li>
                  <?php //echo $this->Html->link('<i class="fa fa-home"></i>Accueil', '/', ['escape' => false]); ?>
                </li>-->
                <li>
                  <?php echo $this->Html->link('<i class="fa fa-download"></i>Fichiers', '/files/index', ['escape' => false]); ?>
                </li>
            </ul>
        </div>

    </div>
    <!-- /sidebar menu -->
<?php } ?>
