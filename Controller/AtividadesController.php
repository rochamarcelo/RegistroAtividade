<?php
/**
 * Este arquivo contem o controller Atividades
 *
 * @package Controller
 */
App::uses('AppController', 'Controller');
/**
 * Controller para apresentar as atividades
 *
 * @package Controller
 */
class AtividadesController extends RegistroAtividadeAppController
{
    public $components = array(
        'RegistroAtividade.RegistroAtividade',
        'Paginator'
    );

    public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Atividade.created' => 'DESC',
        )
    );

    public $uses = array('Atividade');

    /**
     * Action para listar os totais por página
     *
     * @access public
     * @return null
     */
    public function totaisPorPagina()
    {
        $this->Components->unload('Paginator');
        $this->Atividade->habilitarVirtualFieldTotal();
        $this->paginate['group'] = 'Atividade.url';
        $this->paginate['order'] = array(
            'Atividade.url' => 'ASC'
        );
        $this->set('atividades', $this->paginate());
    }

    /**
     * Action para listar todas as atividades
     *
     * @access public
     * @return null
     */
    public function index()
    {
        $this->Components->unload('Paginator');
        $this->set('atividades', $this->paginate());
    }
}
