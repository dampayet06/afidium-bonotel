<?php

namespace Core\Interfaces;

/**
 * Interface EntityInterface
 * @package Core\Interfaces
 */
Interface EntityInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function hydrate(array $data);

    /**
     * @return string
     */
    public function getFilename() : string;

    /**
     * @return string
     */
    public function getJsonData() : string;

}