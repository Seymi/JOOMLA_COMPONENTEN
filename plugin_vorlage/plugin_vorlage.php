<?php
// no direct access
defined( '_JEXEC' ) or die('Restricted access');

class plgContentPluginVorlage extends JPlugin
{
	/**
	 * Load the language file on instantiation. Note this is only available in Joomla 3.1 and higher.
	 * If you want to support 3.0 series you must override the constructor
	 *
	 * @var    boolean
	 * @since  3.1
	 */
	protected $autoloadLanguage = true;

	/**
	 * Plugin method with the same name as the event will be called automatically.
	 */
	 function smoke()
	 {
		/*
		 * Plugin code goes here.
		 * You can access database and application objects and parameters via $this->db,
		 * $this->app and $this->params respectively
		 */
		return true;
	}

	/**
	 * This is a request for information that should be placed immediately
	 * after the generated content.
	 *
	 * @param   string   $context  The context of the content being passed to the plugin
	 * @param   object   &$row     The article object
	 * @param   object   &$params  The article params
	 * @param   integer  $page     The 'page' number
	 *
	 * @return  void
	 *
	 * @since   1.0
	 */
	public function onContentAfterDisplay ($context, &$row, &$params, $page=0)
	{
		// Access to plugin parameters
		$sample = $this->params->get('sample', '42');
	}


}
?>
