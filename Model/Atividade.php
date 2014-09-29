<?php
/**
 * Este arquivo contem o model Atividade
 *
 * @package Model
 */
App::uses('RegistroAtividadeAppModel', 'RegistroAtividade.Model');
/**
 * Model para registro de atividade
 *
 * @package Model
 */
class Atividade extends RegistroAtividadeAppModel
{
    public $useTable = 'atividades';

    /**
     * Habilita o virtual field total
     *
     * @access public
     * @return null
     */
    public function habilitarVirtualFieldTotal()
    {
        $this->virtualFields['total'] = 'COUNT(' . $this->alias . '.id)';
    }
}