<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<h3><?= __('Users') ?></h3>

<?= $this->element('filesaction') ?>

<div class="tarifs index x_content content">

    <table  class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('company', 'Company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tarif_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role', 'Rôle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', 'Username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email', 'Email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= h($user->company) ?></td>
                <td><?= $user->has('tarif') ? $this->Html->link($user->tarif->name, ['controller' => 'Tarifs', 'action' => 'view', $user->tarif->id]) : '' ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->email) ?></td>
                <td class="actions">
                  <?= $this->Html->link(
                       '<i class="fa fa-edit fa-2x"></i>',
                        [ 'action'=>'edit', $user->id ],
                        [ 'escape'              => false,  //use HTML en libellé
                          'class'               => 'icon',
                          'title'               => 'Modifier le user' ] ) ?>
                    <?= $this->Html->link(
                         '<i class="fa fa-trash-o fa-2x"></i>',
                          [ 'action'=>'delete', $user->id ],
                          [ 'escape'              => false,  //use HTML en libellé
                            'class'               => 'icon',
                            'confirm'             => __('Are you sure you want to delete {0}?', $user->company),
                            'title'               => 'Supprimer le user' ] ) ?>
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
