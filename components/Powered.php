<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Powered\Components
 */

namespace AxC\Powered\Components;

/**
 * Powered component class.
 */
class Powered extends \Cms\Classes\ComponentBase
{
	/**
	 * Return the component details.
	 * @return array
	 */
	public function componentDetails()
	{
		return [
			'name' => trans('axc.powered::lang.component.name'),
			'description' => trans('axc.powered::lang.component.description')
		];
	}

	/**
	 * Add default render settings to component.
	 * @todo add comments and code
	 * @return null
	 */
	public function onRender()
	{
	}
}
