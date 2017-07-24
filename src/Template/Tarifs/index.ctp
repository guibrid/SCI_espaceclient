<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tarif[]|\Cake\Collection\CollectionInterface $tarifs
  */
?>
<h3><?= __('Tarifs') ?></h3>

<?= $this->element('filesaction') ?>

<div class="tarifs index x_content content">

  <table class="table table-striped">
    <thead>
    <tr>
      <th><?= $this->Paginator->sort('id', '#') ?></th>
      <th><?= $this->Paginator->sort('name', 'Nom') ?></th>
      <th><?= $this->Paginator->sort('name', 'Création') ?></th>
      <th><?= $this->Paginator->sort('name', 'Modification') ?></th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tarifs as $tarif): ?>
    <tr>
      <td scope="row"><?= $this->Number->format($tarif->id) ?></th>
      <td><?= h($tarif->name) ?></td>
      <td><?= h($tarif->created) ?></td>
      <td><?= h($tarif->modified) ?></td>
      <td class="actions">
        <?= $this->Html->link(
             '<i class="fa fa-edit fa-2x"></i>',
              [ 'action'=>'edit', $tarif->id ],
              [ 'escape'              => false,  //use HTML en libellé
                'class'               => 'icon',
                'title'               => 'Modifier le tarif' ] ) ?>
          <?= $this->Html->link(
               '<i class="fa fa-trash-o fa-2x"></i>',
                [ 'action'=>'delete', $tarif->id ],
                [ 'escape'              => false,  //use HTML en libellé
                  'class'               => 'icon',
                  'confirm'             => __('Are you sure you want to delete # {0}?', $tarif->id),
                  'title'               => 'Supprimer le tarif' ] ) ?>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <div class="paginator">
      <ul class="pagination">
          <?= $this->Paginator->first('<< ' . __('first')) ?>
          <?= $this->Paginator->prev('< ' . __('previous')) ?>
          <?= $this->Paginator->numbers() ?>
          <?= $this->Paginator->next(__('next') . ' >') ?>
          <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
  </div>
</div>
