<?php
/**
  * @var \App\View\AppView $this
  */
?>
<h1><?= __('Users') ?></h1>

<?= $this->element('filesaction') ?>

<div class="tarifs form index x_content content">

    <div class="x_panel">
      <div class="x_title">
        <h2><?= __('Edit user') ?> </h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <?= $this->Form->create($user, ['id'    => 'form',
                                         'class' => 'form-horizontal form-label-left']) ?>
         <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Company <span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <?= $this->Form->control('company', ['id' => 'company', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12' ]) ?>
           </div>
         </div>

         <div class="form-group">
           <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rôle <span class="required">*</span>
           </label>
           <div class="col-md-6 col-sm-6 col-xs-12">
             <?= $this->Form->control('role', ['id' => 'role',
                                               'label' => '',
                                               'required' => 'required',
                                               'class' => 'form-control col-md-7 col-xs-12',
                                               'type' => 'select',
                                               'options' => [$user->role => $user->role, 'Client' => 'Client', 'Admin' => 'Admin'] ]) ?>
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

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?= $this->Form->control('username', ['id' => 'username', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12' ]) ?>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?= $this->Form->control('password', ['id' => 'password', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12', 'type' => 'password' ]) ?>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <?= $this->Form->control('email', ['id' => 'email', 'label' => '', 'required' => 'required', 'class' => 'form-control col-md-7 col-xs-12' ]) ?>
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










</div>
