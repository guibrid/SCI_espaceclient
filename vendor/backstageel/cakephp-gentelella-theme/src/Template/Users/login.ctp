<?php
$file = '';
if($this->plugin){
    $file = ROOT . DS . 'plugins'.DS.$this->plugin.DS.'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}
if(!file_exists($file)){
    $file = ROOT . DS . 'src' . DS . 'Template' . DS . 'Users' . DS . 'login.ctp';
}

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>

<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <?= $this->Form->create() ?>
                    <h2><?php echo $this->Html->image('Gentelella.logo.png'); ?></h2>
                    <br />
                    <div>
                        <?= $this->Form->input('username',['class'=>'form-control','placeholder'=>'Identifiant','label'=>false,'required'=>true]) ?>
                    </div>
                    <div>
                        <?= $this->Form->input('password',['class'=>'form-control','placeholder'=>'Mot de passe','label'=>false,'required'=>true]) ?>
                    </div>
                    <div>
                        <?= $this->Form->button(__('Connexion'),['class'=>'btn btn-primary btn-block btn-flat']); ?>
                    </div>
                    <div class="clearfix"></div>

                    <div class="separator">
                        <div class="clearfix"></div>
                        <br />

                    </div>
                <?= $this->Form->end() ?>
            </section>
        </div>
    </div>
</div>
<?php } ?>
