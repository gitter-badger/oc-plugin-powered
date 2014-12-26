<?

/**
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @package \AxC\Powered\Models
 */

namespace AxC\Powered\Models;

/**
 * Powered Settings model
 */
class Settings extends \AxC\Framework\Classes\SettingsModel
{
	/**
	 * Model extension.
	 * @var array
	 */
	public $implement = ['AxC.Framework.Behaviors.SettingsModel'];

	/**
	 * Prefixes for multiple setting addresses.
	 * @var array
	 */
	public $settingsAddressPrefixes = [];

	/**
	 * Settings field data.
	 * @var array
	 */
	public $settingsData = [];
}
