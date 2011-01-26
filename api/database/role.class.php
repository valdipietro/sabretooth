<?php
/**
 * role.class.php
 * 
 * @author Patrick Emond <emondpd@mcmaster.ca>
 * @package sabretooth\database
 */

namespace sabretooth\database;

/**
 * role: active record
 *
 * @package sabretooth\database
 */
class role extends active_record
{
  /**
   * Returns whether the user has the role for the given site.
   * 
   * @author Patrick Emond <emondpd@mcmaster.ca>
   * @param database\operation $db_operation
   * @return bool
   */
  public function has_operation( $db_operation )
  {
    if( is_null( $this->id ) )
    {
      \sabretooth\log::warning( 'Tried to determine operation for record with no id' );
      return false;
    }

    $rows = self::get_one(
      'SELECT * '.
      'FROM role_has_operation '.
      'WHERE role_id = '.$this->id.' '.
      'AND operation = "'.$db_operation->name.'" '.
      'AND action = "'.$db_operation->action.'"' );
    
    return count( $rows );
  }
  
}
?>
