<?php
namespace Stanford\ServiceDeskWidget;

//require_once "emLoggerTrait.php";

class ServiceDeskWidget extends \ExternalModules\AbstractExternalModule {

   // use emLoggerTrait;

    public $settings;
    public $title;
    public $record;
    public $context;

    public function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}

	public function redcap_module_system_enable( $version ) {

	}


	public function redcap_module_project_enable( $version, $project_id ) {

	}


	public function redcap_module_save_configuration( $project_id ) {

	}

    function redcap_every_page_top($project_id)
    {
        $this->insert_widget();
    }

	function insert_widget()
    {
        ?>
        <script data-jsd-embedded data-key="3799d5cc-7398-41cf-87a3-65e2ef6946c9" data-base-url="https://jsd-widget.atlassian.com" src="https://jsd-widget.atlassian.com/assets/embed.js"></script>
        <?php
    }


}
