<?php
/**
 * @package   Pls\Data\Structure
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Data\Structure;

use Throwable;

/**
 * Base exception interface for all types of data structure exceptions.
 *
 * This interface MUST be implemented by all exceptions thrown by a `Structure`
 * implementation.
 */
interface StructureException extends Throwable
{
}
