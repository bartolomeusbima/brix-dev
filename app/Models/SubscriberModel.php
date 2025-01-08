<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberModel extends Model
{
    protected $table = 'ms_subscription';      // Table name
    protected $primaryKey = 'mss_id';              // Primary key
    protected $allowedFields = ['mss_email'];      // Fields allowed for insert/update

    public function insertEmail($email)
    {
        // Prepare the data to be inserted
        $data = [
            'mss_email' => $email
        ];

        // Insert the email into the database
        return $this->insert($data); // Return true if insert is successful, otherwise false
    }
}
