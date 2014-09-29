<div class="atividades">
    <h2><?php echo __('Totais por página'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <thead>
    <tr>
            <th><?php echo $this->Paginator->sort('url'); ?></th>
            <th><?php echo $this->Paginator->sort('controller'); ?></th>
            <th><?php echo $this->Paginator->sort('action'); ?></th>
            <th><?php echo $this->Paginator->sort('total', 'Total'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($atividades as $atividade) { ?>
    <tr>
        <td><?php echo h($atividade['Atividade']['url']); ?>&nbsp;</td>
        <td><?php echo h($atividade['Atividade']['controller']); ?>&nbsp;</td>
        <td><?php echo h($atividade['Atividade']['action']); ?>&nbsp;</td>
        <td><?php echo h($atividade['Atividade']['total']); ?>&nbsp;</td>
    </tr>
<?php } ?>
    </tbody>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
