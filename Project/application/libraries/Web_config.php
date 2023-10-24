<?php 
class Web_config {      
    public function __construct()
    {        
        $this->define_webconfig_constant(); 
        define("_IMAGES_PATH", base_url() . 'assets/images/');
        define('_SITE_ASSETS_PATH', base_url() . 'assets/');
        define('_FAVICON_PATH', base_url() . 'assets/images/favicon/');
        define('_CSS_PATH', base_url() . 'assets/css/');
        define('_JS_PATH', base_url() . 'assets/js/');
        define('_PLUGIN_PATH', base_url() . 'assets/plugin/');
        define('_PROJECT_NAME', 'Monthly Expense');
        define('_ADMINPANEL_TITLE_SPLATER1', ' :: ');
        define('_ADMINPANEL_TITLE_SPLATER2', ' | ');
        
        define('_TEMPLATE_PATH', 'modules/template');  // define template path for frontend.

        $exp = explode('index.php', $_SERVER['SCRIPT_NAME']);
        define('_PHYSICAL_PATH', $_SERVER['DOCUMENT_ROOT'].$exp[0]);

        define('_PSV_FILE_PATH', 'uploads/psv_files/');
    }

    
    public function define_webconfig_constant() {
        $ci = & get_instance();
        $table = $ci->db->dbprefix.'web_config';
        $ci->db->select('*');
        $d = $ci->db->get($table);
        if($d->num_rows() > 0)
        {
            foreach($d->result() as $rows)
            {
                define($rows->constant_name, $rows->value);
            }
        }
    }

    
}