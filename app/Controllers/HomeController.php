<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Email\Email;
use CodeIgniter\Config\Services;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('pages/Home');
    }

    public function make_appointment(): string
    {
        return view('pages/Make_appointment');
    }

    public function bookAppointment()
    {
        $name = $this->request->getPost('name');
        $userEmail = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $date = $this->request->getPost('date');
        $design = $this->request->getPost('design');
        $size = $this->request->getPost('size');
        $placement = $this->request->getPost('placement');

        if (empty($name) || empty($userEmail) || empty($phone) || empty($date) || empty($size) || empty($placement)) {
            echo "<script>alert('Please fill in all required fields!');</script>";
            return;
        }

        // Handle image upload
        $imagePath = null;
        if ($imageFile = $this->request->getFile('image')) {
            if ($imageFile->isValid() && !$imageFile->hasMoved()) {
                $newName = $imageFile->getRandomName();
                $imagePath = 'uploads/' . $newName;
                $imageFile->move('uploads/', $newName);
            }
        }

        // Prepare email data
        $email = Services::email();
        $email->setFrom('zaril.ziral2020@gmail.com', 'Tattoo Studio');
        $email->setTo($userEmail);
        $email->setSubject('New Tattoo Appointment Request');

        $message = "<h3>Tattoo Appointment Request</h3>";
        $message .= "<p><strong>Name:</strong> $name</p>";
        $message .= "<p><strong>Email:</strong> $userEmail</p>";
        $message .= "<p><strong>Phone:</strong> $phone</p>";
        $message .= "<p><strong>Preferred Date:</strong> $date</p>";
        $message .= "<p><strong>Tattoo Size:</strong> $size</p>";
        $message .= "<p><strong>Placement:</strong> $placement</p>";
        $message .= "<p><strong>Design Description:</strong> $design</p>";

        if ($imagePath) {
            $message .= "<p><strong>Reference Image:</strong> <a href='" . base_url($imagePath) . "' target='_blank'>View Image</a></p>";
            $email->attach(FCPATH . $imagePath);
        }

        $email->setMessage($message);

        if ($email->send()) {
            echo "<script>alert('Your appointment request has been sent successfully!');</script>";
        } else {
            $data = $email->printDebugger(['headers']);
            echo "<script>alert('Failed to send appointment details. Debug info: $data');</script>";
        }
    }


    public function check_schedule(): string
    {
        return view('pages/Check_appointment');
    }
}
