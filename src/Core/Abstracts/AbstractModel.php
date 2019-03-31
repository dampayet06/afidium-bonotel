<?php

namespace Core\Abstracts;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class AbstractModel
 * @package Core\Abstracts
 */
abstract class AbstractModel {

    /**
     * @param $xmlContent
     * @return mixed
     */
    abstract public function hydrateFromXml($xmlContent);

    /**
     * @param $xmlContent
     * @return mixed
     */
    protected function convertXmlToArray($xmlContent) {
        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $serializer = new Serializer([], $encoders);

        return $serializer->decode($xmlContent,'xml');
    }
}