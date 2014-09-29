<?php
/**
 * Este arquivo contem o controller RegistroAtividadeApp
 *
 * @package Controller
 */
App::uses('AppController', 'Controller');
/**
 * Controller principal do plugin
 *
 * @package Controller
 */
class RegistroAtividadeAppController extends AppController
{
    public $components = array(
        'RegistroAtividade.RegistroAtividade'
    );
}
