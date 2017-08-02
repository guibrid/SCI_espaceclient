<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\File[]|\Cake\Collection\CollectionInterface $files
  */
?>
<h3><?= __('Téléchargez vos fichiers') ?></h3>
<?php if( isset($is_admin) && $is_admin === 1 ) { ?>
<?= $this->element('filesaction') ?>
<?php } ?>
<div class="files index x_content content">
    <table  class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nom du fichier</th>
                <?php if( isset($is_admin) && $is_admin === 1 ) { ?>
                <th scope="col">Tarif</th>
                <?php } ?>
                <th scope="col">Mis à jour le</th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
            <tr>
                <td><?= h($file->name) ?></td>
                <?php if( isset($is_admin) && $is_admin === 1 ) { ?>
                <td><?= $file->tarif->name ?></td>
                <?php } ?>
                <td><?= $file->modified->format('d-m-Y') ?></td>
                <td class="actions">
                  <?= $this->Html->link(
                         '<i class="fa fa-download fa-2x"></i>',
                         '/webroot/files/catalogues/' . $file->filedossier . '/' . $file->filename,
                          [ 'escape'              => false,  //use HTML en libellé
                            'class'               => 'icon',
                            'title'               => 'Téléchargez le fichier',
                            'target'              => '_blank' ] ) ?>
                  <?php if( isset($is_admin) && $is_admin === 1 ) { ?>
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
                  <?php } ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php if( isset($is_admin) && $is_admin === 1 ) { ?>
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
    <?php } ?>
</div>
