<?php
/**
 * note_delete.class.php
 * 
 * @author Patrick Emond <emondpd@mcmaster.ca>
 * @package sabretooth\ui
 * @filesource
 */

namespace sabretooth\ui\push;
use cenozo\lib, cenozo\log, cenozo\util;

/**
 * Extends the parent class to send machine requests.
 * @package sabretooth\ui
 */
class note_delete extends \cenozo\ui\push\note_delete
{
  /**
   * Constructor.
   * @author Patrick Emond <emondpd@mcmaster.ca>
   * @param array $args Push arguments
   * @access public
   */
  public function __construct( $args )
  {
    parent::__construct( $args );

    // only send machine requests for participant notes
    if( 'participant' == $this->get_argument( 'category' ) )
    {
      $this->set_machine_request_enabled( true );
      $this->set_machine_request_url( MASTODON_URL );
    }
  }
}
?>
