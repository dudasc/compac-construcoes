<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/sobre', array('controller' => 'pages', 'action' => 'sobre'));
	Router::connect('/energia-solar', array('controller' => 'pages', 'action' => 'energia_solar'));
	Router::connect('/admin', array('controller' => 'pages', 'action' => 'index', 'admin' => true));

	Router::connect('/admin/administracao', array('controller' => 'pages', 'action' => 'administracao', 'admin' => true));

	Router::connect('/admin/servicos/add/:id/',
		array(
			'controller' => 'servicos',
			'action' => 'add',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);
	Router::connect('/admin/servicos/delete/:id/',
		array(
			'controller' => 'servicos',
			'action' => 'delete',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);

	Router::connect('/admin/projetos/delete/:id/',
		array(
			'controller' => 'projetos',
			'action' => 'delete',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);
	Router::connect('/admin/projetos/add/:id/',
		array(
			'controller' => 'projetos',
			'action' => 'add',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);
	Router::connect('/admin/enderecos/delete/:id/',
		array(
			'controller' => 'Enderecos',
			'action' => 'delete',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);
	Router::connect('/admin/enderecos/add/:id/',
		array(
			'controller' => 'Enderecos',
			'action' => 'add',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);
	Router::connect('/admin/projetos/fotos/:id/',
		array(
			'controller' => 'projetos',
			'action' => 'fotos',
			'admin' => true,
		), // Local à ser redirecionado
		array(
			'pass' => array('id'), // Passamos o elemento de rota ":id" para a action (ver) como parâmetro
			'id' => '[0-9]+', // Especificamos que o elemento de rota ":id" só casará com números (através de expressão regular)

		)
	);

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
