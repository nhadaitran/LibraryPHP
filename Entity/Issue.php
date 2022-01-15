<?php

class Issue
{
    private $id;
    private $dateissue;
    private $sid;
    private $bid;
    private $aid;

    /**
     * @param $id
     * @param $dateissue
     * @param $sid
     * @param $bid
     * @param $aid
     */
    public function __construct($id, $dateissue, $sid, $bid, $aid)
    {
       if($id!=null){
           $this->id = $id;
       }
        $this->dateissue = $dateissue;
        $this->sid = $sid;
        $this->bid = $bid;
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
    public function getDateissue()
    {
        return $this->dateissue;
    }

    /**
     * @param mixed $dateissue
     */
    public function setDateissue($dateissue): void
    {
        $this->dateissue = $dateissue;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     */
    public function setSid($sid): void
    {
        $this->sid = $sid;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid): void
    {
        $this->bid = $bid;
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