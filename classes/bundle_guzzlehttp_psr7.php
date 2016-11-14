<?php

namespace GuzzleHttp\Promise{
    
    class bundle_guzzlehttp_psr7 extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('guzzlehttp_psr7', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                require(ADAPT_PATH . "{$this->name}/{$this->name}-{$this->version}/src/functions_include.php");
                return true;
            }
            
            return false;
        }
        
    }
    
}

?>