<?php
/**
 * ExportController.php - Dailyreport Export Controller
 *
 * Main Controller for Dailyreport Export
 *
 * @category Controller
 * @package Dailyreport
 * @author Verein onePlace
 * @copyright (C) 2020  Verein onePlace <admin@1plc.ch>
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 * @since 1.0.0
 */

namespace OnePlace\Dailyreport\Controller;

use Application\Controller\CoreController;
use Application\Controller\CoreExportController;
use OnePlace\Dailyreport\Model\DailyreportTable;
use Laminas\Db\Sql\Where;
use Laminas\Db\Adapter\AdapterInterface;
use Laminas\View\Model\ViewModel;


class ExportController extends CoreExportController
{
    /**
     * ApiController constructor.
     *
     * @param AdapterInterface $oDbAdapter
     * @param DailyreportTable $oTableGateway
     * @since 1.0.0
     */
    public function __construct(AdapterInterface $oDbAdapter,DailyreportTable $oTableGateway,$oServiceManager) {
        parent::__construct($oDbAdapter,$oTableGateway,$oServiceManager);
    }


    /**
     * Dump Dailyreports to excel file
     *
     * @return ViewModel
     * @since 1.0.0
     */
    public function dumpAction() {
        $this->layout('layout/json');

        # Use Default export function
        $aViewData = $this->exportData('Dailyreports','dailyreport');

        # return data to view (popup)
        return new ViewModel($aViewData);
    }
}