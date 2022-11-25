<?php
namespace SMAK\Inc\Traits;

trait Singleton {
    // Store the Clases Object Which before called 
    private static $instance = [];
    protected final function __construct(){
        // The expensive process goes here.
    }


    /**
	 * Prevent object cloning
	 */
    private final function __clone(){
         
    }
    private final function __wakeup(){
      
    }
    public static function get_instance($std = null){
       
        $class_called = get_class();
        // Ckecks the class has been Called before 
         if(!isset(self::$instance[$class_called])){
          
            // If the class never Called before, Create a new object of this class
            self::$instance[$class_called] =  new $class_called($std);
     
         }
       
      // Return the class object
       return self::$instance[$class_called];

    }
}





