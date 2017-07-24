<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h1><?= __('Tarifs') ?></h1>

<?= $this->element('filesaction') ?>

<div class="tarifs form index x_content content">


<div class="x_panel">
  <div class="x_title">
    <h2><?= __('Add tarif') ?> </h2>
    <div class="clearfix"></div>
  </div>
  <div class="x_content">
    <br />

    <?= $this->Form->create($tarif, ['id'    => 'form',
                                     'class' => 'form-horizontal form-label-left']) ?>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Titre <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <?= $this->Form->control('name', ['id' => 'name', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 'data-validate-length-range' => '5' ]) ?>
        </div>
      </div>
      <div class="ln_solid"></div>
      <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
          <?= $this->Form->button( 'Enregistrer', ['type' => 'submit', 'class' => 'btn btn-success']) ?>
        </div>
      </div>

    <?= $this->Form->end() ?>
  </div>
</div>
