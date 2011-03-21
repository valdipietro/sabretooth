<?php
/**
 * sample_view.class.php
 * 
 * @author Patrick Emond <emondpd@mcmaster.ca>
 * @package sabretooth\ui
 * @filesource
 */

namespace sabretooth\ui;

/**
 * widget sample view
 * 
 * @package sabretooth\ui
 */
class sample_view extends base_view
{
  /**
   * Constructor
   * 
   * Defines all variables which need to be set for the associated template.
   * @author Patrick Emond <emondpd@mcmaster.ca>
   * @param array $args An associative array of arguments to be processed by the widget
   * @access public
   */
  public function __construct( $args )
  {
    parent::__construct( 'sample', 'view', $args );

    // create an associative array with everything we want to display about the sample
    $this->add_item( 'name', 'string', 'Name' );
    $this->add_item( 'participants', 'constant', 'Number of participants' );
    $this->add_item( 'qnaire_id', 'enum', 'Questionnaires' );
    $this->add_item( 'active', 'boolean', 'Activated' );
    $this->add_item( 'description', 'text', 'Description' );

    try
    {
      // create the participant sub-list widget
      $this->participant_list = new participant_list( $args );
      $this->participant_list->set_parent( $this );
      $this->participant_list->set_heading( 'Participants belonging to this sample' );
    }
    catch( \sabretooth\exception\permission $e )
    {
      $this->participant_list = NULL;
    }
  }

  /**
   * Finish setting the variables in a widget.
   * 
   * @author Patrick Emond <emondpd@mcmaster.ca>
   * @access public
   */
  public function finish()
  {
    parent::finish();
    
    // create enum arrays
    $qnaires = array();
    foreach( \sabretooth\database\qnaire::select() as $db_qnaire )
      $qnaires[$db_qnaire->id] = $db_qnaire->name;

    // set the view's items
    $this->set_item( 'name', $this->get_record()->name, true );
    $this->set_item( 'participants', $this->get_record()->get_participant_count() );
    $this->set_item( 'qnaire_id', $this->get_record()->qnaire_id, false, $qnaires );
    $this->set_item( 'active', $this->get_record()->active, true );
    $this->set_item( 'description', $this->get_record()->description );

    $this->finish_setting_items();

    // finish the child widgets
    if( !is_null( $this->participant_list ) )
    {
      $this->participant_list->finish();
      $this->set_variable( 'participant_list', $this->participant_list->get_variables() );
    }
  }
  
  /**
   * The sample list widget.
   * @var participant_list
   * @access protected
   */
  protected $participant_list = NULL;
}
?>
