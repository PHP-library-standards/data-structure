<?php
/**
 * @package   Pls\Data\Structure
 * @author    PHP Library Standards <https://github.com/PHP-library-standards>
 * @copyright 2017 PHP Library Standards
 * @license   https://opensource.org/licenses/MIT The MIT License
 */

namespace Pls\Data\Structure;

use Countable, Iterator;

/**
 * A data structure which contains a collections of values.
 */
interface Structure extends Countable, Iterator
{
    /**
     * Removes all values from the structure.
     *
     * @return bool `true` on success, `false` otherwise.
     */
    public function clear(): bool;

    /**
     * Returns whether the structure is empty.
     *
     * @return bool `true` if the structure is empty, `false` otherwise.
     */
    public function isEmpty(): bool;

    /**
     * Returns the value at the top of the structure.
     *
     * @throws UnderflowException If the structure is empty.
     *
     * @return mixed The value at the top of the structure.
     */
    public function peek();

    /**
     * Removes and returns the value at the top of the structure.
     *
     * @throws UnderflowException If the structure is empty.
     *
     * @return mixed The removed value which was at the top of the structure.
     */
    public function pop();

    /**
     * Pushes values onto the structure.
     *
     * @param mixed $values Values to push onto the structure.
     *
     * @return bool `true` on success, `false` otherwise.
     */
    public function push(...$values): bool;
}
