<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $files
  */
?>
<h3><?= __('Files') ?></h3>

<?= $this->element('filesaction') ?>

<div class="files index x_content content">
    <table  class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name', 'Nom du fichier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tarif_id', 'Tarif') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', 'Modifié le') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
                <td><?= h($file->name) ?></td>
                <td><?= $file->has('tarif') ? $this->Html->link($file->tarif->name, ['controller' => 'Tarifs', 'action' => 'view', $file->tarif->id]) : '' ?></td>
                <td><?= h($file->modified) ?></td>
                <td class="actions">
                  <?= $this->Html->link(
                       '<i class="fa fa-edit fa-2x"></i>',
                        [ 'action'=>'edit', $file->id ],
                        [ 'escape'              => false,  //use HTML en libellé
                          'class'               => 'icon',
                          'title'               => 'Modifier le fichier' ] ) ?>
                    <?= $this->Html->link(
                         '<i class="fa fa-trash-o fa-2x"></i>',
                          [ 'action'=>'delete', $file->id ],
                          [ 'escape'              => false,  //use HTML en libellé
                            'class'               => 'icon',
                            'confirm'             => __('Are you sure you want to delete {0}?', $file->name),
                            'title'               => 'Supprimer le fichier' ] ) ?>
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
