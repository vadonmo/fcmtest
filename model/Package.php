<?php


class Package
{
    private $message;//: {type: String},
    private $id;//: {type: String},
    private $company;//: {type: String},
    private $statusCode;//: {type: String},
    private $state;//: {type: String},
    private $isChecked;//: {type: Boolean},
    private $data;//: {type: Array},
    private $updateTime;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getisChecked()
    {
        return $this->isChecked;
    }

    /**
     * @param mixed $isChecked
     */
    public function setIsChecked($isChecked)
    {
        $this->isChecked = $isChecked;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param mixed $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }


   /* public function getPackage()
    {
        $res = array();
        $res["data"]["message"] = $this->message;
        $res["data"]["id"] = $this->id;
        $res["data"]["company"] = $this->company;
        $res["data"]["statusCode"] = $this->statusCode;
        $res["data"]["state"] = $this->state;
        $res["data"]["isChecked"] = $this->isChecked;
        $res["data"]["data"] = $this->data;
        $res["data"]["updateTime"] = $this->updateTime;
    }*/

}

?>