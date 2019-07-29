<?php
/**
 *     Support this Project... Keep it free! Become an Open Source Patron
 *                       https://www.patreon.com/devcu
 *
 * @brief       Boilerplate Settings Controller
 * @author      Gary Cornell for devCU Software Open Source Projects
 * @copyright   (c) <a href='https://www.devcu.com'>devCU Software Development</a>
 * @license     GNU General Public License v3.0
 * @package     Invision Community Suite 4.4+
 * @subpackage	Boilerplate
 * @version     1.0.0
 * @source      https://github.com/GaalexxC/IPS-Application-Boilerplate
 * @Issue Trak  https://www.devcu.com/devcu-tracker/
 * @Created     04 MAY 2019
 * @Updated     26 JUL 2019
 *
 *                    GNU General Public License v3.0
 *    This program is free software: you can redistribute it and/or modify       
 *    it under the terms of the GNU General Public License as published by       
 *    the Free Software Foundation, either version 3 of the License, or          
 *    (at your option) any later version.                                        
 *                                                                               
 *    This program is distributed in the hope that it will be useful,            
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of             
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *                                                                               
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see http://www.gnu.org/licenses/
 */

namespace IPS\boilerplate\modules\admin\dashboard;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * Settings
 */
class _settings extends \IPS\Dispatcher\Controller
{
	/**
	 * Manage Settings
	 *
	 * @return	void
	 */
	protected function manage()
	{
		\IPS\Dispatcher::i()->checkAcpPermission( 'settings_manage' );

		$form = $this->_manageSettings();

		if ( $values = $form->values( TRUE ) )
		{
			$this->saveSettingsForm( $form, $values );

			/* Clear guest page caches */
			\IPS\Data\Cache::i()->clearAll();

			\IPS\Session::i()->log( 'acplogs__boilerplate_settings' );
		}

		\IPS\Output::i()->title = \IPS\Member::loggedIn()->language()->addToStack('head_boilerplate_settings');
		\IPS\Output::i()->output = $form;
	}

	/**
	 * Settings
	 *
	 * @return	void
	 */
	protected function _manageSettings()
	{

		$form = new \IPS\Helpers\Form;
		$form->addTab('head_boilerplate_settings');
		$form->addHeader('head_boilerplate_settings');
		$form->addSeparator();
		$form->add( new \IPS\Helpers\Form\YesNo( 'boilerplate_enable', \IPS\Settings::i()->boilerplate_enable, FALSE, array( 'togglesOn' => array( 'boilerplate_groups_id' ) ), NULL, NULL, NULL, 'boilerplate_enable') );
		$form->add( new \IPS\Helpers\Form\Select( 'boilerplate_groups', \IPS\Settings::i()->boilerplate_groups == 'all' ? "all" : explode( ',' , \IPS\Settings::i()->boilerplate_groups ), FALSE, array( 'options' => \IPS\Member\Group::groups(TRUE, TRUE), 'parse' => 'normal', 'multiple' => TRUE, 'unlimited' => 'all', 'unlimitedLang' => 'all_groups' ), NULL, NULL, NULL, 'boilerplate_groups_id' ) );


		$form->addTab('head_boilerplate_settings_custom');
		$form->addHeader('head_boilerplate_settings_custom');
		$form->addSeparator();
		$form->add( new \IPS\Helpers\Form\Text( 'boilerplate_application_name', \IPS\Settings::i()->boilerplate_application_name, FALSE, array(), NULL, NULL, NULL, 'boilerplate_application_name' ) );

		/* Save values - Nexus values refactored */
		if ( $values = $form->values() )
		{

			$form->saveAsSettings( $values );

			\IPS\Output::i()->redirect( \IPS\Http\Url::internal( 'app=boilerplate&module=dashboard&controller=settings' ), 'saved' );
		}

		return $form;
	}

}