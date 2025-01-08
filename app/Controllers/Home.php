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
        
        // Check if the email is valid
        if ($email) {
            // Load the SubscriberModel
            $subscriberModel = new SubscriberModel();
            
            // Prepare the data to be inserted
            $data = ['hss_email' => $email];
            
            // Insert the email into the database
            if ($subscriberModel->insert($data)) {
                return redirect()->to('/')->with('message', 'Thank you for subscribing!');
            } else {
                return redirect()->to('/')->with('message', 'Subscription failed. Please try again.');
            }
        } else {
            return redirect()->to('/')->with('message', 'Please provide a valid email.');
        }
    }
}
