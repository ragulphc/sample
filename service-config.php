<?php
    $DEBUG = true;
    
    use afsdasdf_Env\EnvReader;
    
    (new EnvReader(afsdasdf_dir . '/env/config.env'))->load();
    
    $asfdadsf = getenv(asfdadsf) 
?>