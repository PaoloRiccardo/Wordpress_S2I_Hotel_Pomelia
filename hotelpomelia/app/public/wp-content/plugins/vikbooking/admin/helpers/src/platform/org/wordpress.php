<?php
/** 
 * @package     VikBooking
 * @subpackage  core
 * @author      E4J s.r.l.
 * @copyright   Copyright (C) 2021 E4J s.r.l. All Rights Reserved.
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link        https://vikwp.com
 */

// No direct access
defined('ABSPATH') or die('No script kiddies please!');

/**
 * Implements the WordPress platform interface.
 * 
 * @since 1.5
 */
class VBOPlatformOrgWordpress extends VBOPlatformAware
{
	/**
	 * Creates a new URI helper instance.
	 *
	 * @return  VBOPlatformUriInterface
	 */
	protected function createUri()
	{
		return new VBOPlatformOrgWordpressUri;
	}

	 /**
	 * Creates a new mailer instance.
	 *
	 * @return  VBOPlatformMailerInterface
	 */
	protected function createMailer()
	{
		return new VBOPlatformOrgWordpressMailer;
	}

	/**
	 * Creates a new event dispatcher instance.
	 * 
	 * @return  VBOPlatformDispatcherInterface
	 * 
	 * @since   1.5.10
	 */
	protected function createDispatcher()
	{
		return new VBOPlatformOrgWordpressDispatcher;
	}
}
