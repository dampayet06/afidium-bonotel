<?php

namespace Core;

use Core\Interfaces\ApiInterface;
use Core\Interfaces\EntityInterface;
use Vendors\Bonotel\BonotelApi;

/**
 * Class HotelManager
 * @package Core
 */
class HotelManager
{
    private $m_allowed_vendors = ['bonotel'];
    private $m_vendor;
    private $m_output;
    private $m_force;

    /**
     * HotelManager constructor.
     * @param $vendor
     * @param $output
     * @param bool $force
     * @throws \Exception
     */
    public function __construct($vendor, $output, $force = false) {
        $this->m_output = $output;
        $this->m_force  = $force;

        if(in_array($vendor, $this->m_allowed_vendors) || $vendor == 'all') {
            $this->m_vendor = $vendor;
        } else {
            throw new \Exception('Vendor "'.$vendor.'" not allowed');
        }
    }

    public function execute() {
        if ($this->m_vendor == 'all') {
            foreach($this->m_allowed_vendors as $vendor) {
                $this->executeVendor($vendor);
            }
        } else {
            $this->executeVendor($this->m_vendor);
        }
    }

    /**
     * @param $vendor
     */
    private function executeVendor($vendor) {
        $api = null;

        switch($vendor) {
            case "bonotel":
                $api = new BonotelApi();
                break;
        }

        if ($api instanceof ApiInterface) {
            $api->callWebservice();

            $allEntities = $api->getAllEntities();

            foreach ($allEntities as $entity) {
                if ($entity instanceof EntityInterface) {
                    $this->createOutputFile(
                        $entity->getFilename(),
                        $entity->getJsonData()
                    );
                }
            }
        }
    }

    /**
     * @param $filename
     * @param $jsonData
     */
    private function createOutputFile($filename, $jsonData) {
        $path = $this->m_output . '/' . $filename;

        if($this->m_force && file_exists($path)) {
            unlink($path);
        }

        if(!file_exists($path)) {
            $file = fopen($path, 'w+');
            fwrite($file,$jsonData, strlen($jsonData));
            fclose($file);
        }
    }
}