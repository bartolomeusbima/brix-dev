<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberModel extends Model
{
    protected $table = 'master_subscription';      // Table name
    protected $primaryKey = 'mss_id';              // Primary key (not used in custom query)
    protected $allowedFields = ['mss_email'];      // Fields allowed for insert/update (not used in custom query)

    // Custom insert method to run the query manually
    public function insertEmail($email)
    {
        // Use the database connection and perform a custom insert query
        $db = \Config\Database::connect();
        
        // Prepare the SQL query
        $query = "INSERT INTO " . $this->table . " (mss_email) VALUES (?)";
        
        // Get the current date/time for hss_create_date
        $currentDate = date('Y-m-d H:i:s');

        // Execute the query
        $result = $db->query($query, [$email]);

        // Return the result of the insert query
        return $result;
    }
}
