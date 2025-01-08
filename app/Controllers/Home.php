<?php

namespace App\Controllers;

use CodeIgniter\Database\Config;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function subscribe()
    {
        // Get the email from the form submission
        $email = $this->request->getPost('email');

        // Validate the email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Invalid email address.');
        }

        // Get the database connection
        $db = Config\Database::connect();
        $builder = $db->table('master_subscription'); // Table name

        // Prepare data to insert
        $data = [
            'mss_email' => $email,
            'hss_create_date' => date('Y-m-d H:i:s') // Current timestamp
        ];

        // Attempt to insert the email into the database
        if ($builder->insert($data)) {
            return redirect()->back()->with('success', 'Subscription successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to subscribe. Please try again.');
        }
    }
}
