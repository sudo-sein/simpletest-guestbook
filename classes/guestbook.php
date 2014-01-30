<?php  
class Guestbook  
{  
    // To save time, instead of creating and connecting to a database, we're going to  
    // simulate a "database" by creating a static entries array here.  
    // It will be like we have two entries in the table.  
      
    private static $_entries = array(  
        array (  
            'name' => 'Kirk', 
            'message' => 'Hi, I\'m Kirk.'  
        ),  
        array (  
            'name' => 'Ted',  
            'message' => 'Hi, I\'m Ted.'  
        )  
    );  
      
    public function viewAll() {  
        // Here, we should retrieve all the records from the database.  
        // This is simulated by returning the $_entries array  
        return self::$_entries;  
    }  
      
    public function add( $name, $message ) {  

        // self::$_entries[] = array('name' => $name, 'message' => $message );  
        self::$_entries[] = array('notname' => $name, 'notmessage' => $message ); 
        return true;  
    }  
      
    public function deleteAll() {  
        // We just set the $_entries array to simulate   
        self::$_entries = array();  
        return true;  
    }  
}