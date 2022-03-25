<?php

/**
 * DbConnect Class Doc comments
 * PHP version: *^7
 * 
 * @category Class
 *  
 * @package DbConnect
 * 
 * @author " Display Name <Cyborg1999.github.com>"
 *  
 * @license * Null
 *   
 * @link localhost
 */

/**
 * DbConnect Class file in the project
 * PHP version: *^7
 * 
 * @category Class
 *  
 * @package MyPackage
 * 
 * @author " Display Name <Cyborg1999.github.com>"
 *  
 * @license * Null
 *   
 * @link localhost
 */

class DbConnect
{
    private $_connect;

    private $_dbType;
    private $_dbHost;
    private $_dbName;
    private $_dbUser;
    private $_dbPass;
    private $_dbPort;
    

     /**
      * Function __construct()
      * 
      * @param String $DBTYPE the type of database used
      * @param String $DBHOST the host of database used
      * @param String $DBNAME the name of database used
      * @param String $DBUSER the user of database used
      * @param String $DBPASS the password of database used
      * @param String $DBPORT the port of database used       
      * 
      * @var this this 
      */   
    public function __construct($DBTYPE, $DBHOST, $DBNAME, $DBUSER, $DBPASS, $DBPORT)
    {
        $this->_dbType = $DBTYPE;
        $this->_dbHost = $DBHOST;
        $this->_dbName = $DBNAME;
        $this->_dbUser = $DBUSER;
        $this->_dbPass = $DBPASS;
        $this->_dbPort = $DBPORT;

        $this->connection($DBTYPE, $DBHOST, $DBNAME, $DBUSER, $DBPASS, $DBPORT);
    
    }

    /**
     * Function connection()
     * 
     * @param String $DBTYPE the type of database used
     * @param String $DBHOST the host of database used
     * @param String $DBNAME the name of database used
     * @param String $DBUSER the user of database used
     * @param String $DBPASS the password of database used
     * @param String $DBPORT the port of database used
     *        
     * @var this $this 
     * 
     * @return String connection status
     */
    public function connection($DBTYPE, $DBHOST, $DBNAME, $DBUSER, $DBPASS, $DBPORT)
    {
        switch($DBTYPE) {
        case 'MySQLi':
            if ($DBPORT<> null) {
                $DBHOST.= ":".$DBPORT;
            }
            $this->_connect = new mysqli($DBHOST, $DBUSER, $DBPASS, $DBNAME);

            if ($this->_connect->connect_error) {
                return "Connection Failure: " .$this->_connect->connect_error;
            } else {
                print "Connection Successfull";
            }
            break;
        case 'PDO':
            if ($DBPORT<>null) {
                $DBHOST.=":".$DBPORT;
            }
            try{
                $this->_connect = new PDO("mysql:host=.$DBHOST; dbname= $DBNAME", $DBUSER, $DBPASS);
                /* Set Error Mode */
                $this->_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                echo "Connected Successfully";
            }catch (PDOException $e){
                echo "Connection failed: " .$e->getMessage();
            }
            break;
        }
    }




    /**
     * Implement extracted ()
     * 
     * @param query String $sth contains String values to be passed to the database
     * 
     * @return String sql statements
     */
    public function extracted(string $sth)
    {
        switch ($this->_dbType) {
        case 'MySQli':
            if ($this->_connect->query($sth) === true) { 
                // change to query later          
                return true;
            } else {
                return "Failed!";
            }
            break;
        case 'PDO':
            try {
                $stmt = $this->_connect->prepare($sth);

                $stmt->execute();
                return true;
            } catch (PDOException $e) {
                return $sth . "<br />" . $e->getMessage();
            }
            break;
        }
    }

    /**
     * Implement update()
     * 
     * @param query String $table contains data stored in the table
     * @param Array|String $data  contains the array of fields to be inserted 
     * 
     * @var String|Array $table 
     * @var Array|String $data  
     * @var String $sth 
     * 
     * @return String sql statements
     */
    public function insert($table, $data)
    {

        ksort($data);
        $fieldDetails = null;
        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = implode(" ',' ", array_keys($data));
        $sth = "INSERT INTO $table('$fieldNames') VALUES ('$fieldValues')";
        return $this->extracted($sth);
    }



}