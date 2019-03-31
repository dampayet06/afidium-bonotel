<?php

namespace Vendors\Bonotel\Entity;

use Core\Abstracts\AbstractEntity;
use Core\Utils\ImageInfo;

/**
 * Class BonotelEntity
 * @package Vendors\Bonotel\Entity
 */
class BonotelEntity extends AbstractEntity {

    const PREFIX_FILENAME = "HS_BNO_H_";

    private $m_id;

    private $m_latitude;

    private $m_longitude;

    private $m_rating_level;

    private $m_swimmingpool = false;

    private $m_parking = false;

    private $m_fitness = false;

    private $m_golf = false;

    private $m_seaside = false;

    private $m_spa = false;

    private $m_charm = false;

    private $m_ecotourism = false;

    private $m_exceptional = false;

    private $m_family_friendly = false;

    private $m_pmr = false;

    private $m_preferred = false;

    private $m_wedding = false;

    private $m_description;

    private $m_images = [];

    /**
     * @return mixed
     */
    public function getId() {
        return $this->m_id;
    }

    /**
     * @param mixed $m_id
     * @return BonotelEntity
     */
    public function setId($m_id) {
        $this->m_id = $m_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude() {
        return $this->m_latitude;
    }

    /**
     * @param mixed $m_latitude
     * @return BonotelEntity
     */
    public function setLatitude($m_latitude) {
        $this->m_latitude = $m_latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude() {
        return $this->m_longitude;
    }

    /**
     * @param mixed $m_longitude
     * @return BonotelEntity
     */
    public function setLongitude($m_longitude) {
        $this->m_longitude = $m_longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRatingLevel() {
        return $this->m_rating_level;
    }

    /**
     * @param mixed $m_rating_level
     * @return BonotelEntity
     */
    public function setRatingLevel($m_rating_level) {
        $this->m_rating_level = $m_rating_level;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSwimmingpool() {
        return $this->m_swimmingpool;
    }

    /**
     * @param bool $m_swimmingpool
     * @return BonotelEntity
     */
    public function setSwimmingpool($m_swimmingpool) {
        $this->m_swimmingpool = $m_swimmingpool;
        return $this;
    }

    /**
     * @return bool
     */
    public function getParking() {
        return $this->m_parking;
    }

    /**
     * @param bool $m_parking
     * @return BonotelEntity
     */
    public function setParking($m_parking) {
        $this->m_parking = $m_parking;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFitness() {
        return $this->m_fitness;
    }

    /**
     * @param bool $m_fitness
     * @return BonotelEntity
     */
    public function setFitness($m_fitness) {
        $this->m_fitness = $m_fitness;
        return $this;
    }

    /**
     * @return bool
     */
    public function getGolf() {
        return $this->m_golf;
    }

    /**
     * @param bool $m_golf
     * @return BonotelEntity
     */
    public function setGolf($m_golf) {
        $this->m_golf = $m_golf;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSeaside() {
        return $this->m_seaside;
    }

    /**
     * @param bool $m_seaside
     * @return BonotelEntity
     */
    public function setSeaside($m_seaside) {
        $this->m_seaside = $m_seaside;
        return $this;
    }

    /**
     * @return bool
     */
    public function getSpa() {
        return $this->m_spa;
    }

    /**
     * @param bool $m_spa
     * @return BonotelEntity
     */
    public function setSpa($m_spa) {
        $this->m_spa = $m_spa;
        return $this;
    }

    /**
     * @return bool
     */
    public function getCharm() {
        return $this->m_charm;
    }

    /**
     * @param bool $m_charm
     * @return BonotelEntity
     */
    public function setCharm($m_charm) {
        $this->m_charm = $m_charm;
        return $this;
    }

    /**
     * @return bool
     */
    public function getEcotourism() {
        return $this->m_ecotourism;
    }

    /**
     * @param bool $m_ecotourism
     * @return BonotelEntity
     */
    public function setEcotourism($m_ecotourism) {
        $this->m_ecotourism = $m_ecotourism;
        return $this;
    }

    /**
     * @return bool
     */
    public function getExceptional() {
        return $this->m_exceptional;
    }

    /**
     * @param bool $m_exceptional
     * @return BonotelEntity
     */
    public function setExceptional($m_exceptional) {
        $this->m_exceptional = $m_exceptional;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFamilyFriendly() {
        return $this->m_family_friendly;
    }

    /**
     * @param bool $m_family_friendly
     * @return BonotelEntity
     */
    public function setFamilyFriendly($m_family_friendly) {
        $this->m_family_friendly = $m_family_friendly;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPmr() {
        return $this->m_pmr;
    }

    /**
     * @param bool $m_pmr
     * @return BonotelEntity
     */
    public function setPmr($m_pmr) {
        $this->m_pmr = $m_pmr;
        return $this;
    }

    /**
     * @return bool
     */
    public function getPreferred() {
        return $this->m_preferred;
    }

    /**
     * @param bool $m_preferred
     * @return BonotelEntity
     */
    public function setPreferred($m_preferred) {
        $this->m_preferred = $m_preferred;
        return $this;
    }

    /**
     * @return bool
     */
    public function getWedding() {
        return $this->m_wedding;
    }

    /**
     * @param bool $m_wedding
     * @return BonotelEntity
     */
    public function setWedding($m_wedding) {
        $this->m_wedding = $m_wedding;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->m_description;
    }

    /**
     * @param $m_description
     * @return $this
     */
    public function setDescription($m_description) {
        $this->m_description = $m_description;
        return $this;
    }

    /**
     * @return array
     */
    public function getImages() {
        return $this->m_images;
    }

    /**
     * @param array $m_images
     * @return $this
     */
    public function setImages(array $m_images) {
        $this->m_images = $m_images;

        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function hydrate(array $data) {
        $this
            ->setLongitude((float) $data['longitude'] ?? 0)
            ->setLatitude((float) $data['latitude'] ?? 0)
            ->setId((int) $data['hotelCode'] ?? 0)
            ->setRatingLevel((float) str_replace('star','',$data['starRating'] ?? 0))
            ->setDescription(trim($data['description'] ?? ''))
            ->setImages($data['images']['image'] ?? []);

        $elements = [
            "swimmingpool", "swimmingpool", "fitness", "golf", "seaside",
            "seaside", "spa", "charm", "ecotourism", "exceptional", "family_friendly",
            "pmr", "preferred", "wedding"
        ];

        foreach($elements as $element) {
            if(!empty($data['facilities']) && strpos($data['facilities'], $element) !== false) {
                $this->{"m_".$element} = true;
            }

            if(!empty($data['recreations']) && strpos($data['recreations'], $element) !== false) {
                $this->{"m_".$element} = true;
            }
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename() : string {
        return self::PREFIX_FILENAME . $this->getId() . '.json';
    }

    /**
     * @return string
     */
    public function getJsonData() : string {
        $introductionText   = [];
        $introduction_media = [];

        if (!empty($this->getDescription())) {
            $introductionText[] = [
                'language'  => 'US',
                'type_code' => 'Description',
                'title'     => 'Description',
                'text'      => $this->getDescription()
            ];
        }

        if(!empty($this->getImages())) {
            foreach($this->getImages() as $image) {

                $imageInfo = ImageInfo::getImageInfoFromUrl($image);

                if(!empty($imageInfo['byte'])) {
                    $introduction_media[] = [
                        'weight' => [
                            'value' => $imageInfo['byte'],
                            'unit'  => 'Byte'
                        ],
                        'size' => [
                            'width' => $imageInfo['width'],
                            'height' => $imageInfo['height']
                        ],
                        'url' => $image
                    ];
                }
            }
        }

        $response = [
            'latitude'        => $this->getLatitude(),
            'longitude'       => $this->getLongitude(),
            'language'        => 'US',
            'rating_level'    => $this->getRatingLevel(),
            'swimmingpool'    => $this->getSwimmingpool(),
            'parking'         => $this->getParking(),
            'fitness'         => $this->getFitness(),
            'golf'            => $this->getGolf(),
            'seaside'         => $this->getSeaside(),
            'spa'             => $this->getSpa(),
            'charm'           => $this->getCharm(),
            'ecotourism'      => $this->getEcotourism(),
            'exceptional'     => $this->getExceptional(),
            'family_friendly' => $this->getFamilyFriendly(),
            'pmr'             => $this->getPmr(),
            'preferred'       => $this->getPreferred(),
            'wedding'         => $this->getWedding(),
            'distribution'    => [
                'BONOTEL' => $this->getId()
            ]
        ];

        if(!empty($introductionText)) {
            if(count($introductionText) == 1) {
                $response['introduction_text'] = current($introductionText);
            } else {
                $response['introduction_text'] = $introductionText;
            }
        }

        if(!empty($introduction_media)) {
            if(count($introduction_media) == 1) {
                $response['introduction_media'] = current($introduction_media);
            } else {
                $response['introduction_media'] = $introduction_media;
            }
        }

        return json_encode($response);
    }
}