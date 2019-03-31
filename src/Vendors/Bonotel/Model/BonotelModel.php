<?php

namespace Vendors\Bonotel\Model;

use Core\Abstracts\AbstractModel;
use Vendors\Bonotel\Entity\BonotelEntity;

/**
 * Class BonotelModel
 * @package Vendors\Bonotel\Model
 */
class BonotelModel extends AbstractModel {

    /**
     * @param $xmlContent
     * @return array
     */
    public function hydrateFromXml($xmlContent) : array {
        $elements = parent::convertXmlToArray($xmlContent);

        $hotels = $elements['hotel'] ?? [];

        $entities = [];

        foreach($hotels as $hotel) {
            $entities[] = $this->hydrateHotelEntity($hotel);
        }

        return $entities;
    }

    /**
     * @param array $hotel
     * @return BonotelEntity
     */
    protected function hydrateHotelEntity(array $hotel) : BonotelEntity {
        $bonotelEntity = new BonotelEntity();
        $bonotelEntity->hydrate($hotel);

        return $bonotelEntity;
    }

}