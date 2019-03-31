<?php

namespace Vendors\Bonotel;

use Vendors\Bonotel\Model\BonotelModel;
use Core\Abstracts\AbstractApi;

/**
 * Class BonotelApi
 * @package Vendors\Bonotel
 */
class BonotelApi extends AbstractApi {

    const URL_B0NOTEL_WEBSERVICE = "http://api.bonotel.com/index.cfm/user/voyagrs_xml/action/hotel";

    private $m_xmlData;

    public function callWebservice() {

        $this->m_xmlData = file_get_contents(self::URL_B0NOTEL_WEBSERVICE);

    }

    /**
     * @return array
     */
    public function getAllEntities() : array {
        $model = new BonotelModel();

        return $model->hydrateFromXml($this->m_xmlData);
    }
}