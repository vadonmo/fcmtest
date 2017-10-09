<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/9
 * Time: 10:35
 */
class User
{
    private $deviceToken;
    private $registerTime;
    private $subscribes;

    /**
     * @return mixed
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * @param mixed $deviceToken
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
    }

    /**
     * @return mixed
     */
    public function getRegisterTime()
    {
        return $this->registerTime;
    }

    /**
     * @param mixed $registerTime
     */
    public function setRegisterTime($registerTime)
    {
        $this->registerTime = $registerTime;
    }

    /**
     * @return mixed
     */
    public function getSubscribes()
    {
        return $this->subscribes;
    }

    /**
     * @param mixed $subscribes
     */
    public function setSubscribes($subscribes)
    {
        $this->subscribes = $subscribes;
    }


}

?>