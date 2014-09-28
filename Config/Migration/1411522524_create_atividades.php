<?php
class CreateAtividades extends CakeMigration
{
    /**
     * Migration description
     *
     * @var string
     */
    public $description = 'Create table atividades';

    /**
     * Actions to be performed
     *
     * @var array $migration
     */
    public $migration = array(
        'up' => array(
            'create_table' => array(
                'atividades' => array(
                    'id' => array(
                        'type' => 'integer',
                        'null' => false,
                        'default' => null,
                        'key' => 'primary'
                    ),
                    'referer' => array(
                        'type' => 'string',
                        'null' => true,
                        'default' => null
                    ),
                    'ip' => array(
                        'type' => 'string',
                        'null' => true,
                        'default' => null,
                        'length' => 15
                    ),
                    'url' => array(
                        'type' => 'string',
                        'null' => false,
                        'default' => null,
                        'key' => 'index'
                    ),
                    'controller' => array(
                        'type' => 'string',
                        'null' => false,
                        'default' => null
                    ),
                    'action' => array(
                        'type' => 'string',
                        'null' => false,
                        'default' => null,
                    ),
                    'method' => array(
                        'type' => 'string',
                        'null' => true,
                        'default' => null,
                        'length' => 8
                    ),
                    'usuario_id' => array(
                        'type' => 'integer',
                        'null' => true,
                        'default' => null,
                        'key' => 'index'
                    ),
                    'created' => array(
                        'type' => 'datetime',
                        'null' => false,
                        'default' => null
                    ),
                    'indexes' => array(
                        'PRIMARY' => array('column' => 'id', 'unique' => true),
                        'BY_URL' => array('column' => 'url', 'unique' => false),
                        'BY_USUARIO_ID' => array('column' => 'usuario_id', 'unique' => false)

                    ),
                ),
            ),
        ),
        'down' => array(
            'drop_table' => array(
                'atividades'
            ),
        ),
    );

    /**
     * Before migration callback
     *
     * @param string $direction, up or down direction of migration process
     *
     * @return boolean Should process continue
     */
    public function before($direction)
    {
        return true;
    }

    /**
     * After migration callback
     *
     * @param string $direction, up or down direction of migration process
     *
     * @return boolean Should process continue
     */
    public function after($direction)
    {
        return true;
    }
}