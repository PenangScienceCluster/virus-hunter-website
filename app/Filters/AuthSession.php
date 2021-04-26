<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class AuthSession implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // echo '[Filter before]<br>';
        $session = Services::session();
        // var_dump($session->has('isLoggedIn'));
        if (!$session->has('isLoggedIn')) {
            return redirect()->to(URL_PORTAL_LOGIN)->with('error', lang('Validation.login_expired'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}