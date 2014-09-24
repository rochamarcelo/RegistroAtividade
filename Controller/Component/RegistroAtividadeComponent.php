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
        $this->registrar($controller);
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
        $atividade = array(
            'navegador' => $controller->request->header('User-Agent'),
            'referer' => $controller->request->referer(),
            'ip' => $controller->request->clientIp(),
            'url' => $controller->request->here(),
            'controller' => $controller->name,
            'action' => $controller->request->params['action'],
            'method' => $controller->request->method(),
            'usuario_id' => null
        );

        if ( isset($controller->Auth) ) {
            $atividade['usuario_id'] = $controller->Auth->user('id');
        }

        ClassRegistry::init('RegistroAtividade.RegistroAtividade', 'Model')->save($atividade);
    }
}
