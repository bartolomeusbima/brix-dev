<?php

namespace App\Controllers;

use Config\Database;

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

        // Prepare the data to be inserted
        $data = [
            'mss_email' => $email,
            'hss_create_date' => date('Y-m-d H:i:s') // optional: if you have a create date column
        ];

        // Get the database connection using the Database config
        $db = Database::connect();

        // Use SQL query to insert the data
        $query = "INSERT INTO master_subscription (mss_email, hss_create_date) VALUES (:email:, :created_at:)";
        
        // Execute the query with binding values
        $result = $db->query($query, [
            'email' => $email,
            'created_at' => $data['hss_create_date']
        ]);

        // Check if the insertion was successful
        if ($result) {
            return redirect()->back()->with('success', 'Subscription successful!');
        } else {
            return redirect()->back()->with('error', 'Failed to subscribe. Please try again.');
        }
    }
}
