<?php
/**
 * DailyreportTable.php - Dailyreport Table
 *
 * Table Model for Dailyreport
 *
 * @category Model
 * @package Dailyreport
 * @author Verein onePlace
 * @copyright (C) 2020 Verein onePlace <admin@1plc.ch>
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 * @since 1.0.0
 */

namespace OnePlace\Dailyreport\Model;

use Application\Controller\CoreController;
use Application\Model\CoreEntityTable;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Db\ResultSet\ResultSet;
use Laminas\Db\Sql\Select;
use Laminas\Db\Sql\Where;
use Laminas\Paginator\Paginator;
use Laminas\Paginator\Adapter\DbSelect;

class DailyreportTable extends CoreEntityTable {

    /**
     * DailyreportTable constructor.
     *
     * @param TableGateway $tableGateway
     * @since 1.0.0
     */
    public function __construct(TableGateway $tableGateway) {
        parent::__construct($tableGateway);

        # Set Single Form Name
        $this->sSingleForm = 'dailyreport-single';
    }

    /**
     * Get Dailyreport Entity
     *
     * @param int $id
     * @param string $sKey
     * @return mixed
     * @since 1.0.0
     */
    public function getSingle($id,$sKey = 'Dailyreport_ID') {
        # Use core function
        return $this->getSingleEntity($id,$sKey);
    }

    /**
     * Save Dailyreport Entity
     *
     * @param Dailyreport $oDailyreport
     * @return int Dailyreport ID
     * @since 1.0.0
     */
    public function saveSingle(Dailyreport $oDailyreport) {
        $aDefaultData = [
            'label' => $oDailyreport->label,
        ];

        return $this->saveSingleEntity($oDailyreport,'Dailyreport_ID',$aDefaultData);
    }

    /**
     * Generate new single Entity
     *
     * @return Dailyreport
     * @since 1.0.0
     */
    public function generateNew() {
        return new Dailyreport($this->oTableGateway->getAdapter());
    }
}