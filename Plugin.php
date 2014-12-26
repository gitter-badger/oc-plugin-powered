<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Powered
 */

namespace AxC\Powered;

/**
 * Powered Plugin Information File
 */
class Plugin extends \System\Classes\PluginBase
{
	/**
	 * Plugin dependencies.
	 * @var array
	 */
	public $require = ['AxC.Framework'];

	/**
	 * Returns information about this plugin.
	 * @return array
	 */
	public function pluginDetails()
	{
		return [
			'name' => 'Powered',
			'description' => trans('axc.powered::lang.plugin.description'),
			'author' => 'Alex Carrega',
			'icon' => 'icon-copyright'
		];
	}

	/**
	 * Register the components.
	 * @return array
	 */
	public function registerComponents()
	{
		return ['AxC\Powered\Components\Powered' => 'powered'];
	}

/**
 * Register the information about the plugin settings.
 * @return array.
 */
	public function registerSettings()
	{
		return [
			'settings' => [
				'label' => trans('axc.powered::lang.settings.label'),
				'icon' => 'icon-share-alt',
				'description' => trans('axc.powered::lang.settings.description'),
				'class' => 'AxC\Powered\Models\Settings',
				'category' => \AxC\Framework\Plugin::ID,
				'order' => 4
			]
		];
	}
}
