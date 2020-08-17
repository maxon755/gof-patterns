<?php

abstract class MiddleWare
{
    private ?MiddleWare $next = null;

    public function setNext(MiddleWare $next)
    {
        $this->next = $next;

        return $next;
    }

    public function handle(Request $request)
    {
        if (is_null($this->next)) {
            return false;
        }

        return $this->next->handle($request);
    }
}
