<?php

class AuthorizeMiddleware extends MiddleWare
{
    private array $allowedEndpoints = [
        'create-post',
        'update-post',
        'delete-post',
    ];

    public function handle(Request $request)
    {
        if (!in_array($request->getEndpoint(), $this->allowedEndpoints)) {
            throw new Exception('Access denied');
        }

        return parent::handle($request);
    }
}
