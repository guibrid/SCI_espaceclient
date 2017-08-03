<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'footer.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>
    <!-- footer content -->
    <footer>
        <div class="pull-right">
            &copy; SC International.
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
<?php } ?>
