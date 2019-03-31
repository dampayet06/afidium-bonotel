<?php

namespace Core\Abstracts;

use Core\Interfaces\ApiInterface;

/**
 * Class VendorApi
 * @package Core\Abstracts
 */
abstract class AbstractApi implements ApiInterface {

    /**
     * @return array
     */
    abstract public function getAllEntities() : array;

}