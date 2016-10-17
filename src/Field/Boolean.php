<?php

namespace Corcel\Acf\Field;

use Corcel\Acf\FieldInterface;

/**
 * Class Boolean
 *
 * @package Corcel\Acf\Field
 * @author Junior Grossi <juniorgro@gmail.com>
 */
class Boolean extends Text implements FieldInterface
{
    /**
     * @return bool
     */
    public function get()
    {
        return (bool)parent::get();
    }
}
