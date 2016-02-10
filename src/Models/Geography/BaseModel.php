<?php
namespace app\Models\Geography;


class BaseModel
{

    public function getPublicVars()
    {
        return call_user_func('get_object_vars', $this);
    }

}