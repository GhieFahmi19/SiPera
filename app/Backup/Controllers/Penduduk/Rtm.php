<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        helper(["url"]);
    }

    public function addUser()
    {
        // layout of add user form
        return view('add-user');
    }

    public function saveUser()
    {
        if ($this->request->getMethod() == "post") {

            $rules = [
                "name" => "required",
                "email" => "required|valid_email",
                "mobile" => "required"
            ];

            if (!$this->validate($rules)) {

                $response = [
                    'success' => false,
                    'msg' => "There are some validation errors",
                ];

                return $this->response->setJSON($response);
            } else {

                $userModel = new UserModel();

                $data = [
                    "name" => $this->request->getVar("name"),
                    "email" => $this->request->getVar("email"),
                    "mobile" => $this->request->getVar("mobile"),
                ];

                if ($userModel->insert($data)) {

                    $response = [
                        'success' => true,
                        'msg' => "User created",
                    ];
                } else {
                    $response = [
                        'success' => true,
                        'msg' => "Failed to create user",
                    ];
                }

                return $this->response->setJSON($response);
            }
        }
    }
}
