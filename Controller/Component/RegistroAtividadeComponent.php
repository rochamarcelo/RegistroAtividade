<?php
/**
 * Este arquivo contem o componente RegistroAtividade
 *
 * @package Controller.Component
 */
/**
 * Componente para registro de atividade (paginas acessadas)
 *
 * @package Controller.Component
 */
class RegistroAtividadeComponent extends Component
{
    /**
     * Callback executado depois de Controller::beforeFilter() e antes da ação do controller
     *
     * @param Controller $controller Controller que está usando o component
     *
     * @link http://book.cakephp.org/2.0/en/controllers/components.html#Component::startup
     * @return void
     */
    public function startup(Controller $controller)
    {

    }

    /**
     * Registra a atividade atual
     *
     * @param Controller $controller Controller que está usando o component
     *
     * @return boolean
     */
    public function registrar(Controller $controller)
    {

    }
}
