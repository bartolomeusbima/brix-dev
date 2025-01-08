<?php

namespace App\Controllers;

use App\Models\SubscriberModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function subscribe()
    {
        // Get the email from the form
        $email = $this->request->getPost('email');
        
        // Check if the email is provided and is valid
        if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Load the SubscriberModel
            $subscriberModel = new SubscriberModel();
            
            // Prepare the data to be inserted
            $data = [
                'hss_email' => $email,
                'hss_create_date' => date('Y-m-d H:i:s')  // Optional: add the creation date
            ];
            
            // Insert the email into the database
            if ($subscriberModel->insert($data)) {
                return redirect()->to('/')->with('message', 'Thank you for subscribing!');
            } else {
                // If insertion fails
                return redirect()->to('/')->with('message', 'Subscription failed. Please try again.');
            }
        } else {
            // If email is not valid
            return redirect()->to('/')->with('message', 'Please provide a valid email address.');
        }
    }

}
