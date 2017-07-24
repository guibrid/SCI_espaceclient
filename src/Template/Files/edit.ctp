<?php
/**
  * @var \App\View\AppView $this
  */
?>

<h1><?= __('Files') ?></h1>

<?= $this->element('filesaction') ?>

<div class="files form index x_content content">

  <div class="x_panel">
    <div class="x_title">
      <h2><?= __('Edit file') ?> </h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <br />
      <?= $this->Form->create($file, ['id'    => 'form',
                                      'class' => 'form-horizontal form-label-left',
                                      'type' => 'file'])  ?>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nom du fichier <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <?= $this->Form->control('name', ['id' => 'name', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12' ]) ?>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tarif <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <?= $this->Form->control('tarif_id', ['id' => 'tarif_id',
                                            'label' => '',
                                            'required' => 'required',
                                            'class' => 'form-control col-md-7 col-xs-12',
                                            'type' => 'select',
                                            'empty'  => '- Selectionnez un tarif -',
                                            'options' => $tarifs ]) ?>
        </div>
      </div>



    <?= $this->Form->button( 'Enregistrer', ['type' => 'submit', 'class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    </div>
</div>
</div>
