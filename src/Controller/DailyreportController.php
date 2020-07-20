<?php
/**
 * DailyreportController.php - Main Controller
 *
 * Main Controller Dailyreport Module
 *
 * @category Controller
 * @package Dailyreport
 * @author Verein onePlace
 * @copyright (C) 2020  Verein onePlace <admin@1plc.ch>
 * @license https://opensource.org/licenses/BSD-3-Clause
 * @version 1.0.0
 * @since 1.0.0
 */

declare(strict_types=1);

namespace OnePlace\Dailyreport\Controller;

use Application\Controller\CoreEntityController;
use Application\Model\CoreEntityModel;
use OnePlace\Dailyreport\Model\Dailyreport;
use OnePlace\Dailyreport\Model\DailyreportTable;
use Laminas\View\Model\ViewModel;
use Laminas\Db\Adapter\AdapterInterface;

class DailyreportController extends CoreEntityController {
    /**
     * Dailyreport Table Object
     *
     * @since 1.0.0
     */
    protected $oTableGateway;

    /**
     * DailyreportController constructor.
     *
     * @param AdapterInterface $oDbAdapter
     * @param DailyreportTable $oTableGateway
     * @since 1.0.0
     */
    public function __construct(AdapterInterface $oDbAdapter,DailyreportTable $oTableGateway,$oServiceManager) {
        $this->oTableGateway = $oTableGateway;
        $this->sSingleForm = 'dailyreport-single';
        parent::__construct($oDbAdapter,$oTableGateway,$oServiceManager);

        if($oTableGateway) {
            # Attach TableGateway to Entity Models
            if(!isset(CoreEntityModel::$aEntityTables[$this->sSingleForm])) {
                CoreEntityModel::$aEntityTables[$this->sSingleForm] = $oTableGateway;
            }
        }
    }

    /**
     * Dailyreport Index
     *
     * @since 1.0.0
     * @return ViewModel - View Object with Data from Controller
     */
    public function indexAction() {
        # You can just use the default function and customize it via hooks
        # or replace the entire function if you need more customization
        return $this->generateIndexView('dailyreport');
    }

    /**
     * Dailyreport Add Form
     *
     * @since 1.0.0
     * @return ViewModel - View Object with Data from Controller
     */
    public function addAction() {
        /**
         * You can just use the default function and customize it via hooks
         * or replace the entire function if you need more customization
         *
         * Hooks available:
         *
         * dailyreport-add-before (before show add form)
         * dailyreport-add-before-save (before save)
         * dailyreport-add-after-save (after save)
         */
        return $this->generateAddView('dailyreport');
    }

    /**
     * Dailyreport Edit Form
     *
     * @since 1.0.0
     * @return ViewModel - View Object with Data from Controller
     */
    public function editAction() {
        /**
         * You can just use the default function and customize it via hooks
         * or replace the entire function if you need more customization
         *
         * Hooks available:
         *
         * dailyreport-edit-before (before show edit form)
         * dailyreport-edit-before-save (before save)
         * dailyreport-edit-after-save (after save)
         */
        return $this->generateEditView('dailyreport');
    }

    /**
     * Dailyreport View Form
     *
     * @since 1.0.0
     * @return ViewModel - View Object with Data from Controller
     */
    public function viewAction() {
        /**
         * You can just use the default function and customize it via hooks
         * or replace the entire function if you need more customization
         *
         * Hooks available:
         *
         * dailyreport-view-before
         */
        return $this->generateViewView('dailyreport');
    }
}
