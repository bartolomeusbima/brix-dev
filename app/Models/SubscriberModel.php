<?php

namespace App\Models;

use CodeIgniter\Model;

class SubscriberModel extends Model
{
    protected $table = 'master_subscription';      // Table name
    protected $primaryKey = 'mss_id';          // Primary key
    protected $allowedFields = ['mss_email'];  // Fields allowed for insert/update
}