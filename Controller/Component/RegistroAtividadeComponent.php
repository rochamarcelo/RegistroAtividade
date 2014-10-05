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
    private $_habilitado = true;

    private $_model;

    private $_pluginsPermitidos = array();
    /**
     * Constructor
     *
     * @param ComponentCollection $collection A ComponentCollection this component can use to lazy load its components
     * @param array               $settings   Array of configuration settings.
     *
     * @return void
     */
    public function __construct(ComponentCollection $collection, $settings = array())
    {
        parent::__construct($collection, $settings);

        if ( isset($settings['habilitado']) ) {
            $this->_habilitado = (boolean)$settings['habilitado'];
        }

        if ( isset($settings['pluginsPermitidos']) ) {
            $this->_pluginsPermitidos = $settings['pluginsPermitidos'];
        }
    }

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
        $this->_model = ClassRegistry::init('RegistroAtividade.Atividade', 'Model');
        if ( !$this->_habilitado ) {
            return;
        }
        $plugin = $controller->request->params['plugin'];
        if ( $plugin && !in_array($plugin, $this->_pluginsPermitidos, true) ) {
            return;
        }

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
            'usuario_id' => null,
            'usuario_nome' => 'Visitante'
        );

        if ( isset($controller->Auth) ) {
            $atividade['usuario_id'] = $controller->Auth->user('id');
            $atividade['usuario_nome'] = $controller->Auth->user('nome');
        }
        $this->_model->save($atividade);
    }
}
