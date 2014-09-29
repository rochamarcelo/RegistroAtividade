<?php
class CreateFieldUsuarioNome extends CakeMigration
{

	/**
	 * Migration description
	 *
	 * @var string
	 */
	public $description = '';

	/**
	 * Actions to be performed
	 *
	 * @var array $migration
	 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'atividades' => array(
					'usuario_nome' => array('type' => 'string', 'null' => true, 'default' => null),
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'atividades' => array('usuario_nome')
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 */
	public function after($direction) {
		return true;
	}
}
