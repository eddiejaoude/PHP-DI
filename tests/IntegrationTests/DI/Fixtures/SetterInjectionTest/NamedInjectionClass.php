<?php
/**
 * PHP-DI
 *
 * @link      http://php-di.org/
 * @copyright Matthieu Napoli (http://mnapoli.fr/)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace IntegrationTests\DI\Fixtures\SetterInjectionTest;

use DI\Annotation\Inject;

/**
 * Fixture class
 */
class NamedInjectionClass
{

    /**
     * @Inject(name="namedDependency")
     */
    public $dependency;

}
