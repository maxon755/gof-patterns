<?php

require_once __DIR__ . '/MiddleWare.php';

class AuthMiddleware extends MiddleWare
{
    public function handle(Request $request)
    {
        if (
            $request->getLogin() !== 'valid_user' ||
            $request->getPassword() !== 'secret'
        ) {
            throw new Exception('Invalid credentials given');
        }

        return parent::handle($request);
    }
}
