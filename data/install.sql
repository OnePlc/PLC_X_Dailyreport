--
-- Base Table
--
CREATE TABLE `dailyreport` (
  `Dailyreport_ID` int(11) NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `dailyreport`
  ADD PRIMARY KEY (`Dailyreport_ID`);

ALTER TABLE `dailyreport`
  MODIFY `Dailyreport_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Permissions
--
INSERT INTO `permission` (`permission_key`, `module`, `label`, `nav_label`, `nav_href`, `show_in_menu`) VALUES
('add', 'OnePlace\\Dailyreport\\Controller\\DailyreportController', 'Add', '', '', 0),
('edit', 'OnePlace\\Dailyreport\\Controller\\DailyreportController', 'Edit', '', '', 0),
('index', 'OnePlace\\Dailyreport\\Controller\\DailyreportController', 'Index', 'Dailyreports', '/dailyreport', 1),
('list', 'OnePlace\\Dailyreport\\Controller\\ApiController', 'List', '', '', 1),
('view', 'OnePlace\\Dailyreport\\Controller\\DailyreportController', 'View', '', '', 0),
('dump', 'OnePlace\\Dailyreport\\Controller\\ExportController', 'Excel Dump', '', '', 0),
('index', 'OnePlace\\Dailyreport\\Controller\\SearchController', 'Search', '', '', 0);

--
-- Form
--
INSERT INTO `core_form` (`form_key`, `label`, `entity_class`, `entity_tbl_class`) VALUES
('dailyreport-single', 'Dailyreport', 'OnePlace\\Dailyreport\\Model\\Dailyreport', 'OnePlace\\Dailyreport\\Model\\DailyreportTable');

--
-- Index List
--
INSERT INTO `core_index_table` (`table_name`, `form`, `label`) VALUES
('dailyreport-index', 'dailyreport-single', 'Dailyreport Index');

--
-- Tabs
--
INSERT INTO `core_form_tab` (`Tab_ID`, `form`, `title`, `subtitle`, `icon`, `counter`, `sort_id`, `filter_check`, `filter_value`) VALUES ('dailyreport-base', 'dailyreport-single', 'Dailyreport', 'Base', 'fas fa-cogs', '', '0', '', '');

--
-- Buttons
--
INSERT INTO `core_form_button` (`Button_ID`, `label`, `icon`, `title`, `href`, `class`, `append`, `form`, `mode`, `filter_check`, `filter_value`) VALUES
(NULL, 'Save Dailyreport', 'fas fa-save', 'Save Dailyreport', '#', 'primary saveForm', '', 'dailyreport-single', 'link', '', ''),
(NULL, 'Edit Dailyreport', 'fas fa-edit', 'Edit Dailyreport', '/dailyreport/edit/##ID##', 'primary', '', 'dailyreport-view', 'link', '', ''),
(NULL, 'Add Dailyreport', 'fas fa-plus', 'Add Dailyreport', '/dailyreport/add', 'primary', '', 'dailyreport-index', 'link', '', ''),
(NULL, 'Export Dailyreports', 'fas fa-file-excel', 'Export Dailyreports', '/dailyreport/export', 'primary', '', 'dailyreport-index', 'link', '', ''),
(NULL, 'Find Dailyreports', 'fas fa-searh', 'Find Dailyreports', '/dailyreport/search', 'primary', '', 'dailyreport-index', 'link', '', ''),
(NULL, 'Export Dailyreports', 'fas fa-file-excel', 'Export Dailyreports', '#', 'primary initExcelDump', '', 'dailyreport-search', 'link', '', ''),
(NULL, 'New Search', 'fas fa-searh', 'New Search', '/dailyreport/search', 'primary', '', 'dailyreport-search', 'link', '', '');

--
-- Fields
--
INSERT INTO `core_form_field` (`Field_ID`, `type`, `label`, `fieldkey`, `tab`, `form`, `class`, `url_view`, `url_list`, `show_widget_left`, `allow_clear`, `readonly`, `tbl_cached_name`, `tbl_class`, `tbl_permission`) VALUES
(NULL, 'text', 'Name', 'label', 'dailyreport-base', 'dailyreport-single', 'col-md-3', '/dailyreport/view/##ID##', '', 0, 1, 0, '', '', '');

--
-- User XP Activity
--
INSERT INTO `user_xp_activity` (`Activity_ID`, `xp_key`, `label`, `xp_base`) VALUES
(NULL, 'dailyreport-add', 'Add New Dailyreport', '50'),
(NULL, 'dailyreport-edit', 'Edit Dailyreport', '5'),
(NULL, 'dailyreport-export', 'Edit Dailyreport', '5');

COMMIT;