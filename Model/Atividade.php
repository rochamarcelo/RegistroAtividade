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
    public $useTable = 'registros_atividades';
}