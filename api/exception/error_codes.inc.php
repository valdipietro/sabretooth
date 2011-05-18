<?php
/**
 * error_codes.inc.php
 * 
 * This file is where all error codes are defined.
 * All error code are named after the class and function they occur in.
 * @package sabretooth\exception
 * @filesource
 */

namespace sabretooth\exception;

/**
 * Error number category defines.
 */
define( 'ARGUMENT_BASE_ERROR_NUMBER',   100000 );
define( 'DATABASE_BASE_ERROR_NUMBER',   200000 );
define( 'LDAP_BASE_ERROR_NUMBER',       300000 );
define( 'NOTICE_BASE_ERROR_NUMBER',     400000 );
define( 'PERMISSION_BASE_ERROR_NUMBER', 500000 );
define( 'RUNTIME_BASE_ERROR_NUMBER',    600000 );
define( 'SYSTEM_BASE_ERROR_NUMBER',     700000 );
define( 'TEMPLATE_BASE_ERROR_NUMBER',   800000 );
define( 'VOIP_BASE_ERROR_NUMBER',       900000 );

/**
 * "argument" error codes
 */
define( 'ARGUMENT_ACTION__SCRIPT_ERROR_NUMBER',           ARGUMENT_BASE_ERROR_NUMBER + 1 );
define( 'ARGUMENT_WIDGET__SCRIPT_ERROR_NUMBER',           ARGUMENT_BASE_ERROR_NUMBER + 2 );
define( 'ARGUMENT_DATUM__SCRIPT_ERROR_NUMBER',            ARGUMENT_BASE_ERROR_NUMBER + 3 );
define( 'ARGUMENT_MODIFIER__WHERE_ERROR_NUMBER',          ARGUMENT_BASE_ERROR_NUMBER + 4 );
define( 'ARGUMENT_MODIFIER__GROUP_ERROR_NUMBER',          ARGUMENT_BASE_ERROR_NUMBER + 5 );
define( 'ARGUMENT_MODIFIER__ORDER_ERROR_NUMBER',          ARGUMENT_BASE_ERROR_NUMBER + 6 );
define( 'ARGUMENT_MODIFIER__LIMIT_ERROR_NUMBER',          ARGUMENT_BASE_ERROR_NUMBER + 7 );
define( 'ARGUMENT_RECORD____GET_ERROR_NUMBER',            ARGUMENT_BASE_ERROR_NUMBER + 8 );
define( 'ARGUMENT_RECORD____SET_ERROR_NUMBER',            ARGUMENT_BASE_ERROR_NUMBER + 9 );
define( 'ARGUMENT_RECORD____CALL_ERROR_NUMBER',           ARGUMENT_BASE_ERROR_NUMBER + 10 );
define( 'ARGUMENT_RECORD__GET_ENUM_VALUES_ERROR_NUMBER',  ARGUMENT_BASE_ERROR_NUMBER + 11 );
define( 'ARGUMENT_BASE_DELETE____CONSTRUCT_ERROR_NUMBER', ARGUMENT_BASE_ERROR_NUMBER + 12 );
define( 'ARGUMENT_BASE_EDIT____CONSTRUCT_ERROR_NUMBER',   ARGUMENT_BASE_ERROR_NUMBER + 13 );
define( 'ARGUMENT_BASE_RECORD__SET_MODE_ERROR_NUMBER',    ARGUMENT_BASE_ERROR_NUMBER + 14 );
define( 'ARGUMENT_OPERATION__GET_ARGUMENT_ERROR_NUMBER',  ARGUMENT_BASE_ERROR_NUMBER + 15 );
define( 'ARGUMENT_WIDGET__GET_ARGUMENT_ERROR_NUMBER',     ARGUMENT_BASE_ERROR_NUMBER + 16 );
define( 'ARGUMENT_SESSION____CONSTRUCT_ERROR_NUMBER',     ARGUMENT_BASE_ERROR_NUMBER + 17 );
define( 'ARGUMENT_OPERATION____CONSTRUCT_ERROR_NUMBER',   ARGUMENT_BASE_ERROR_NUMBER + 18 );
define( 'ARGUMENT_SITE__ADD_ACCESS_ERROR_NUMBER',         ARGUMENT_BASE_ERROR_NUMBER + 19 );
define( 'ARGUMENT_BASE_VIEW__SET_ITEM_ERROR_NUMBER',      ARGUMENT_BASE_ERROR_NUMBER + 20 );
define( 'ARGUMENT_BASE_VIEW__ADD_ITEM_ERROR_NUMBER',      ARGUMENT_BASE_ERROR_NUMBER + 21 );
define( 'ARGUMENT_ACCESS__EXISTS_ERROR_NUMBER',           ARGUMENT_BASE_ERROR_NUMBER + 22 );
define( 'ARGUMENT_VOIP_MANAGER__CALL_ERROR_NUMBER',       ARGUMENT_BASE_ERROR_NUMBER + 23 );
define( 'ARGUMENT_VOIP_CALL____CONSTRUCT_ERROR_NUMBER',   ARGUMENT_BASE_ERROR_NUMBER + 24 );

/**
 * "database" error codes
 * 
 * Since database errors already have codes this list is likely to stay empty.
 */

/**
 * "ldap" error codes
 * 
 * Since ldap errors already have codes this list is likely to stay empty.
 */

/**
 * "notice" error codes
 */
define( 'NOTICE_SESSION__SET_USER_ERROR_NUMBER',                NOTICE_BASE_ERROR_NUMBER + 1 );
define( 'NOTICE_BASE_DELETE__EXECUTE_ERROR_NUMBER',             NOTICE_BASE_ERROR_NUMBER + 2 );
define( 'NOTICE_BASE_NEW__EXECUTE_ERROR_NUMBER',                NOTICE_BASE_ERROR_NUMBER + 3 );
define( 'NOTICE_BASE_EDIT__EXECUTE_ERROR_NUMBER',               NOTICE_BASE_ERROR_NUMBER + 4 );
define( 'NOTICE_USER_NEW__EXECUTE_ERROR_NUMBER',                NOTICE_BASE_ERROR_NUMBER + 5 );
define( 'NOTICE_PARTICIPANT_NEW__EXECUTE_ERROR_NUMBER',         NOTICE_BASE_ERROR_NUMBER + 6 );
define( 'NOTICE_SAMPLE_NEW__EXECUTE_ERROR_NUMBER',              NOTICE_BASE_ERROR_NUMBER + 7 );
define( 'NOTICE_QNAIRE_NEW__EXECUTE_ERROR_NUMBER',              NOTICE_BASE_ERROR_NUMBER + 8 );
define( 'NOTICE_AVAILABILITY_EDIT__EXECUTE_ERROR_NUMBER',       NOTICE_BASE_ERROR_NUMBER + 9 );
define( 'NOTICE_AVAILABILITY_NEW__EXECUTE_ERROR_NUMBER',        NOTICE_BASE_ERROR_NUMBER + 10 );
define( 'NOTICE_SHIFT_NEW__EXECUTE_ERROR_NUMBER',               NOTICE_BASE_ERROR_NUMBER + 11 );
define( 'NOTICE_SHIFT_EDIT__EXECUTE_ERROR_NUMBER',              NOTICE_BASE_ERROR_NUMBER + 12 );
define( 'NOTICE_APPOINTMENT_NEW__EXECUTE_ERROR_NUMBER',         NOTICE_BASE_ERROR_NUMBER + 13 );
define( 'NOTICE_SAMPLE_EDIT__EXECUTE_ERROR_NUMBER',             NOTICE_BASE_ERROR_NUMBER + 14 );
define( 'NOTICE_ASSIGNMENT_BEGIN__EXECUTE_ERROR_NUMBER',        NOTICE_BASE_ERROR_NUMBER + 15 );
define( 'NOTICE_ASSIGNMENT_END__EXECUTE_ERROR_NUMBER',          NOTICE_BASE_ERROR_NUMBER + 16 );
define( 'NOTICE_VOIP_MANAGER__CALL_ERROR_NUMBER',               NOTICE_BASE_ERROR_NUMBER + 17 );
define( 'NOTICE_CONTACT_NEW__EXECUTE_ERROR_NUMBER',             NOTICE_BASE_ERROR_NUMBER + 18 );
define( 'NOTICE_CONTACT_EDIT__EXECUTE_ERROR_NUMBER',            NOTICE_BASE_ERROR_NUMBER + 19 );
define( 'NOTICE_APPOINTMENT_EDIT__EXECUTE_ERROR_NUMBER',        NOTICE_BASE_ERROR_NUMBER + 20 );
define( 'NOTICE_SELF_SET_PASSWORD__EXECUTE_ERROR_NUMBER',       NOTICE_BASE_ERROR_NUMBER + 21 );

/**
 * "permission" error codes
 */
define( 'PERMISSION_OPERATION____CONSTRUCT_ERROR_NUMBER', PERMISSION_BASE_ERROR_NUMBER + 1 );
define( 'PERMISSION_ACCESS__SAVE_ERROR_NUMBER',           PERMISSION_BASE_ERROR_NUMBER + 2 );

/**
 * "runtime" error codes
 */
define( 'RUNTIME_ACTION__SCRIPT_ERROR_NUMBER',                   RUNTIME_BASE_ERROR_NUMBER + 1 );
define( 'RUNTIME_WIDGET__SCRIPT_ERROR_NUMBER',                   RUNTIME_BASE_ERROR_NUMBER + 2 );
define( 'RUNTIME_DATUM__SCRIPT_ERROR_NUMBER',                    RUNTIME_BASE_ERROR_NUMBER + 3 );
define( 'RUNTIME_RECORD____CONSTRUCT_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 4 );
define( 'RUNTIME_RECORD____CALL_ERROR_NUMBER',                   RUNTIME_BASE_ERROR_NUMBER + 5 );
define( 'RUNTIME_RECORD__LOAD_ERROR_NUMBER',                     RUNTIME_BASE_ERROR_NUMBER + 6 );
define( 'RUNTIME_RECORD__SAVE_ERROR_NUMBER',                     RUNTIME_BASE_ERROR_NUMBER + 7 );
define( 'RUNTIME_SESSION__INITIALIZE_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 8 );
define( 'RUNTIME_SESSION__ENABLE_SURVEY_ERROR_NUMBER',           RUNTIME_BASE_ERROR_NUMBER + 9 );
define( 'RUNTIME_SELF_SET_ROLE__EXECUTE_ERROR_NUMBER',           RUNTIME_BASE_ERROR_NUMBER + 10 );
define( 'RUNTIME_SELF_SET_SITE__EXECUTE_ERROR_NUMBER',           RUNTIME_BASE_ERROR_NUMBER + 11 );
define( 'RUNTIME_LOG__INITIALIZE_LOGGER_ERROR_NUMBER',           RUNTIME_BASE_ERROR_NUMBER + 12 );
define( 'RUNTIME_BASE_VIEW__SET_ITEM_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 13 );
define( 'RUNTIME_AVAILABILITY__ADD_ERROR_NUMBER',                RUNTIME_BASE_ERROR_NUMBER + 14 );
define( 'RUNTIME_CONTACT_ADD__FINISH_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 15 );
define( 'RUNTIME_PHASE_ADD__FINISH_ERROR_NUMBER',                RUNTIME_BASE_ERROR_NUMBER + 16 );
define( 'RUNTIME_SHIFT_ADD__FINISH_ERROR_NUMBER',                RUNTIME_BASE_ERROR_NUMBER + 17 );
define( 'RUNTIME_CONSENT_ADD__FINISH_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 18 );
define( 'RUNTIME_DATABASE____CONSTRUCT_ERROR_NUMBER',            RUNTIME_BASE_ERROR_NUMBER + 19 );
define( 'RUNTIME_DATABASE__GET_COLUMN_NAMES_ERROR_NUMBER',       RUNTIME_BASE_ERROR_NUMBER + 20 );
define( 'RUNTIME_DATABASE__GET_COLUMN_TYPE_ERROR_NUMBER',        RUNTIME_BASE_ERROR_NUMBER + 21 );
define( 'RUNTIME_SHIFT__SAVE_ERROR_NUMBER',                      RUNTIME_BASE_ERROR_NUMBER + 22 );
define( 'RUNTIME_APPOINTMENT_ADD__FINISH_ERROR_NUMBER',          RUNTIME_BASE_ERROR_NUMBER + 23 );
define( 'RUNTIME_SAMPLE__SAVE_ERROR_NUMBER',                     RUNTIME_BASE_ERROR_NUMBER + 24 );
define( 'RUNTIME_PARTICIPANT__ADD_RECORDS_ERROR_NUMBER',         RUNTIME_BASE_ERROR_NUMBER + 25 );
define( 'RUNTIME_PARTICIPANT__REMOVE_RECORDS_ERROR_NUMBER',      RUNTIME_BASE_ERROR_NUMBER + 26 );
define( 'RUNTIME_SAMPLE__ADD_RECORDS_ERROR_NUMBER',              RUNTIME_BASE_ERROR_NUMBER + 27 );
define( 'RUNTIME_SAMPLE__REMOVE_RECORDS_ERROR_NUMBER',           RUNTIME_BASE_ERROR_NUMBER + 28 );
define( 'RUNTIME_ASSIGNMENT_BEGIN__EXECUTE_ERROR_NUMBER',        RUNTIME_BASE_ERROR_NUMBER + 29 );
define( 'RUNTIME_PHONE_CALL_BEING__EXECUTE_ERROR_NUMBER',        RUNTIME_BASE_ERROR_NUMBER + 30 );
define( 'RUNTIME_VOIP_MANAGER__INITIALIZE_ERROR_NUMBER',         RUNTIME_BASE_ERROR_NUMBER + 31 );
define( 'RUNTIME_VOIP_MANAGER__CONNECT_ERROR_NUMBER',            RUNTIME_BASE_ERROR_NUMBER + 32 );
define( 'RUNTIME_VOIP_MANAGER__CALL_ERROR_NUMBER',               RUNTIME_BASE_ERROR_NUMBER + 33 );
define( 'RUNTIME_PARTICIPANT_PRIMARY____CONSTRUCT_ERROR_NUMBER', RUNTIME_BASE_ERROR_NUMBER + 34 );
define( 'RUNTIME_NOTE_LIST__FINISH_ERROR_NUMBER',                RUNTIME_BASE_ERROR_NUMBER + 35 );
define( 'RUNTIME_NOTE_NEW__EXECUTE_ERROR_NUMBER',                RUNTIME_BASE_ERROR_NUMBER + 36 );
define( 'RUNTIME_APPOINTMENT__VALIDATE_DATE_ERROR_NUMBER',       RUNTIME_BASE_ERROR_NUMBER + 37 );
define( 'RUNTIME_AUTOLOADER__AUTOLOAD_ERROR_NUMBER',             RUNTIME_BASE_ERROR_NUMBER + 38 );
define( 'RUNTIME_LDAP_MANAGER__SET_USER_PASSWORD_ERROR_NUMBER',  RUNTIME_BASE_ERROR_NUMBER + 39 );
define( 'RUNTIME_LDAP_MANAGER__VALIDATE_USER_ERROR_NUMBER',      RUNTIME_BASE_ERROR_NUMBER + 40 );
define( 'RUNTIME_SESSION__VALIDATE_PASSWORD_ERROR_NUMBER',       RUNTIME_BASE_ERROR_NUMBER + 41 );

/**
 * "system" error codes
 * 
 * Since system errors already have codes this list is likely to stay empty.
 */

/**
 * "template" error codes
 * 
 * Since template errors already have codes this list is likely to stay empty.
 */

/**
 * "voip" error codes
 */
define( 'VOIP_VOIP_MANAGER__INITIALIZE_ERROR_NUMBER',            VOIP_BASE_ERROR_NUMBER + 1 );
define( 'VOIP_VOIP_MANAGER__GET_CALLS_FROM_SERVER_ERROR_NUMBER', VOIP_BASE_ERROR_NUMBER + 2 );
define( 'VOIP_VOIP_MANAGER__CALL_ERROR_NUMBER',                  VOIP_BASE_ERROR_NUMBER + 3 );
define( 'VOIP_VOIP_CALL__DTMF_ERROR_NUMBER',                     VOIP_BASE_ERROR_NUMBER + 4 );
define( 'VOIP_VOIP_CALL__START_MONITORING_ERROR_NUMBER',         VOIP_BASE_ERROR_NUMBER + 5 );
define( 'VOIP_VOIP_CALL__STOP_MONITORING_ERROR_NUMBER',          VOIP_BASE_ERROR_NUMBER + 6 );
define( 'VOIP_VOIP_CALL__PLAY_SOUND_ERROR_NUMBER',               VOIP_BASE_ERROR_NUMBER + 7 );

?>
