<?php
class UserController extends BaseController
{
    /**
     * "/user/list" Endpoint - Get list of users
     */
    public function listAction()
    {
        $errorDescription = '';
        $requestMethod = $_SERVER["REQUEST_METHOD"];
        $stringParamsArray = $this->getStringParams();
 
        if (strtoupper($requestMethod) == 'GET') {
            try {
                $userModel = new UserModel();
 
                $intLimit = 10;
                if (isset($stringParamsArray['limit']) && $stringParamsArray['limit']) {
                    $intLimit = $stringParamsArray['limit'];
                }
 
                $usersArray = $userModel->getUsers($intLimit);
                $responseData = json_encode($usersArray);
            } catch (Error $e) {
                $erroDescriptionr = $e->getMessage().'Something went wrong! Please contact support.';
                $errorHeader = 'HTTP/1.1 500 Internal Server Error';
            }
        } else {
            $erroDescriptionr = 'Method not supported';
            $errorHeader = 'HTTP/1.1 422 Unprocessable Entity';
        }
 
        // send output
        if (!$erroDescriptionr) {
            $this->sendOutput(
                $responseData,
                array('Content-Type: application/json', 'HTTP/1.1 200 OK')
            );
        } else {
            $this->sendOutput(json_encode(array('error' => $erroDescriptionr)), 
                array('Content-Type: application/json', $errorHeader)
            );
        }
    }
}