<?php
/**
 * @package   Pls\Data\Structure
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Data\Structure;

/**
 * Exception interface for when an invalid operation on an empty data structure
 * is performed.
 */
interface UnderflowException extends StructureException
{
}
