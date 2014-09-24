<?php
/**
 * Este arquivo contem o model RegistroAtividade
 *
 * @package Model
 */
App::uses('RegistroAtividadeAppModel', 'RegistroAtividade.Model');
/**
 * Model para registro de atividade
 *
 * @package Model
 */
class RegistroAtividade extends RegistroAtividadeAppModel
{
    public $useTable = 'registros_atividades';
}