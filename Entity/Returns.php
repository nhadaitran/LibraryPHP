<?php

class Returns
{
    private $id;
    private $dateReturn;
    private $rid;
    private $aid;

    /**
     * @param $id
     * @param $dateReturn
     * @param $rid
     * @param $aid
     */
    public function __construct($id, $dateReturn, $rid, $aid)
    {
       if($id!=null){
           $this->id = $id;
       }
        $this->dateReturn = $dateReturn;
        $this->rid = $rid;
        $this->aid = $aid;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDateReturn()
    {
        return $this->dateReturn;
    }

    /**
     * @param mixed $dateReturn
     */
    public function setDateReturn($dateReturn): void
    {
        $this->dateReturn = $dateReturn;
    }

    /**
     * @return mixed
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param mixed $rid
     */
    public function setRid($rid): void
    {
        $this->rid = $rid;
    }

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     */
    public function setAid($aid): void
    {
        $this->aid = $aid;
    }



}