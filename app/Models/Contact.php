<?php 
namespace App\Models;
use CodeIgniter\Model;



class Contact extends Model
{

    public function getdata(){
        $db = \Config\Database::connect();
        $db = db_connect();
        $query = $db->query('SELECT * from userxx');
        $results = $query->getResult();
        return $results;
    }

}

?>