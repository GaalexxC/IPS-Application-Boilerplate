<?php
/**
 *     Support this Project... Keep it free! Become an Open Source Patron
 *                       https://www.patreon.com/devcu
 *
 * @brief       Boilerplate MAin Controller
 * @author      Gary Cornell for devCU Software Open Source Projects
 * @copyright   (c) <a href='https://www.devcu.com'>devCU Software Development</a>
 * @license     GNU General Public License v3.0
 * @package     Invision Community Suite 4.4+
 * @subpackage	Boilerplate
 * @version     1.0.0
 * @source      https://github.com/GaalexxC/IPS-Application-Boilerplate
 * @Issue Trak  https://www.devcu.com/devcu-tracker/
 * @Created     04 MAY 2019
 * @Updated     04 MAY 2019
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

namespace IPS\boilerplate\modules\front\boilerplate;

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !\defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	header( ( isset( $_SERVER['SERVER_PROTOCOL'] ) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0' ) . ' 403 Forbidden' );
	exit;
}

/**
 * MAIN
 */
class _main extends \IPS\Dispatcher\Controller
{
	/**
	 * Route
	 *
	 * @return	void
	 */
	protected function manage()
	{
		
			$this->_index();
	}

	/**
	 * Return the title for the publicly viewable HTML page
	 * 
	 * @return string	Title to use between <title> tags
	 */
	public function getHtmlTitle()
	{
		return \IPS\Settings::i()->boilerplate_application_name;
	}

	/**
	 * Show Index
	 *
	 * @return	void
	 */
	protected function _index()
	{
		/* Online User Location */
		\IPS\Session::i()->setLocation( \IPS\Http\Url::internal( 'app=boilerplate', 'front', 'boilerplate' ), array(), 'loc_boilerplate_browsing' );
		
		/* Display */
		\IPS\Output::i()->title  = $this->getHtmlTitle();
		\IPS\Output::i()->output	= \IPS\Theme::i()->getTemplate( 'boilerplate' )->index();
	}
}