<?php

namespace Core\Abstracts;

use Core\Interfaces\EntityInterface;

/**
 * Class AbstractEntity
 * @package Core\Abstracts
 */
abstract class AbstractEntity implements EntityInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    abstract public function hydrate(array $data);

    /**
     * @return string
     */
    abstract public function getFilename() : string;

    /**
     * @return string
     */
    abstract public function getJsonData() : string;
}