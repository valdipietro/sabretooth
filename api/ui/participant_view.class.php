<?php
/**
 * participant_view.class.php
 * 
 * @author Patrick Emond <emondpd@mcmaster.ca>
 * @package sabretooth\ui
 * @filesource
 */

namespace sabretooth\ui;

/**
 * widget participant view
 * 
 * @package sabretooth\ui
 */
class participant_view extends base_view
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
    parent::__construct( 'participant', 'view', $args );
    
    // create an associative array with everything we want to display about the participant
    $this->add_item( 'first_name', 'string', 'First Name' );
    $this->add_item( 'last_name', 'string', 'Last Name' );
    $this->add_item( 'language', 'enum', 'Language' );
    $this->add_item( 'hin', 'string', 'Health Insurance Number' );
    $this->add_item( 'status', 'enum', 'Condition' );
    $this->add_item( 'site_id', 'enum', 'Site' );
    $this->add_item( 'samples', 'constant', 'Number of samples' );
    $this->add_item( 'contacts', 'constant', 'Number of contact entries' );
    $this->add_item( 'availabilities', 'constant', 'Number of availability entries' );
    $this->add_item( 'consents', 'constant', 'Number of consent entries' );

    // create the sample sub-list widget
    $this->sample_list = new sample_list( $args );
    $this->sample_list->set_parent( $this );
    $this->sample_list->set_heading( 'Samples the participant belongs to' );

    // create the contact sub-list widget
    $this->contact_list = new contact_list( $args );
    $this->contact_list->set_parent( $this );
    $this->contact_list->set_heading( 'Participant\'s contact information' );

    // create the availability sub-list widget
    $this->availability_list = new availability_list( $args );
    $this->availability_list->set_parent( $this );
    $this->availability_list->set_heading( 'Participant availability' );

    // create the consent sub-list widget
    $this->consent_list = new consent_list( $args );
    $this->consent_list->set_parent( $this );
    $this->consent_list->set_heading( 'Participant\'s consent information' );
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
    $languages = \sabretooth\database\participant::get_enum_values( 'language' );
    $languages = array_combine( $languages, $languages );
    $statuses = \sabretooth\database\participant::get_enum_values( 'status' );
    $statuses = array_combine( $statuses, $statuses );
    $sites = array();
    foreach( \sabretooth\database\site::select() as $db_site ) $sites[$db_site->id] = $db_site->name;
    
    // set the view's items
    $this->set_item( 'first_name', $this->get_record()->first_name );
    $this->set_item( 'last_name', $this->get_record()->last_name );
    $this->set_item( 'language', $this->get_record()->language, false, $languages );
    $this->set_item( 'hin', $this->get_record()->hin );
    $this->set_item( 'status', $this->get_record()->status, false, $statuses );
    $this->set_item( 'site_id', $this->get_record()->get_site()->name, false, $sites );
    $this->set_item( 'samples', $this->get_record()->get_sample_count() );
    $this->set_item( 'contacts', $this->get_record()->get_contact_count() );
    $this->set_item( 'availabilities', $this->get_record()->get_availability_count() );
    $this->set_item( 'consents', $this->get_record()->get_consent_count() );

    $this->finish_setting_items();

    $this->sample_list->finish();
    $this->set_variable( 'sample_list', $this->sample_list->get_variables() );
    $this->contact_list->finish();
    $this->set_variable( 'contact_list', $this->contact_list->get_variables() );
    $this->availability_list->finish();
    $this->set_variable( 'availability_list', $this->availability_list->get_variables() );
    $this->consent_list->finish();
    $this->set_variable( 'consent_list', $this->consent_list->get_variables() );
  }
  
  /**
   * The participant list widget.
   * @var sample_list
   * @access protected
   */
  protected $sample_list = NULL;
  
  /**
   * The participant list widget.
   * @var contact_list
   * @access protected
   */
  protected $contact_list = NULL;
  
  /**
   * The participant list widget.
   * @var availability_list
   * @access protected
   */
  protected $availability_list = NULL;
  
  /**
   * The participant list widget.
   * @var consent_list
   * @access protected
   */
  protected $consent_list = NULL;
}
?>
