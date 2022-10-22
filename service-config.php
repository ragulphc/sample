<?php
    $DEBUG = true;
    
    use Nextcare_Env\EnvReader;
    
    (new EnvReader(nextcare_api_services_plugin_dir . '/env/config.env'))->load();
    
    $base_url = getenv(base_url) 
$env_name = getenv(env_name) 
?>