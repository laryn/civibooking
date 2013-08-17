<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.4                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2013                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2013
 *
 * Generated from xml/schema/CRM/Booking/Slot.xml
 * DO NOT EDIT.  Generated by GenCode.php
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Booking_DAO_Slot extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_booking_slot';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = true;
  /**
   *
   * @var int unsigned
   */
  public $id;
  /**
   * FK to Booking ID
   *
   * @var int unsigned
   */
  public $booking_id;
  /**
   * FK to resource configuration option ID
   *
   * @var int unsigned
   */
  public $config_id;
  /**
   *
   * @var datetime
   */
  public $start;
  /**
   *
   * @var datetime
   */
  public $end;
  /**
   *
   * @var int
   */
  public $quantity;
  /**
   *
   * @var text
   */
  public $note;
  /**
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   *
   * @var boolean
   */
  public $is_cancelled;
  /**
   *
   * @var boolean
   */
  public $is_deleted;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_booking_slot
   */
  function __construct()
  {
    $this->__table = 'civicrm_booking_slot';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_EntityReference
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = array(
        new CRM_Core_EntityReference(self::getTableName() , 'booking_id', 'civicrm_booking', 'id') ,
        new CRM_Core_EntityReference(self::getTableName() , 'config_id', 'civicrm_booking_resource_config_option', 'id') ,
      );
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'required' => true,
        ) ,
        'booking_id' => array(
          'name' => 'booking_id',
          'type' => CRM_Utils_Type::T_INT,
          'FKClassName' => 'CRM_Booking_DAO_Booking',
        ) ,
        'config_id' => array(
          'name' => 'config_id',
          'type' => CRM_Utils_Type::T_INT,
          'FKClassName' => 'CRM_Booking_DAO_ResourceConfigOption',
        ) ,
        'start' => array(
          'name' => 'start',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Start') ,
          'required' => true,
        ) ,
        'end' => array(
          'name' => 'end',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('End') ,
          'required' => true,
        ) ,
        'quantity' => array(
          'name' => 'quantity',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Quantity') ,
          'required' => true,
        ) ,
        'note' => array(
          'name' => 'note',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Note') ,
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
        ) ,
        'is_cancelled' => array(
          'name' => 'is_cancelled',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
        'is_deleted' => array(
          'name' => 'is_deleted',
          'type' => CRM_Utils_Type::T_BOOLEAN,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'booking_id' => 'booking_id',
        'config_id' => 'config_id',
        'start' => 'start',
        'end' => 'end',
        'quantity' => 'quantity',
        'note' => 'note',
        'parent_id' => 'parent_id',
        'is_cancelled' => 'is_cancelled',
        'is_deleted' => 'is_deleted',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return self::$_tableName;
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['booking_slot'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['booking_slot'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
