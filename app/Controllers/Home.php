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
        return redirect()->back()->with('error', 'Invalid email address.');
        // // Get the email from the form submission
        // $email = $this->request->getPost('email');

        // // Validate the email
        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     return redirect()->back()->with('error', 'Invalid email address.');
        // }

        // // Save the email to the database using the model
        // $subscriberModel = new SubscriberModel();
        // $data = ['email' => $email];

        // if ($subscriberModel->insert($data)) {
        //     return redirect()->back()->with('success', 'Subscription successful!');
        // } else {
        //     return redirect()->back()->with('error', 'Failed to subscribe. Please try again.');
        // }
    }
}
