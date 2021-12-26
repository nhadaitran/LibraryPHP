<?php

class Book
{
    private $id;
    private $aid;
    private $name;
    private $author;
    private $status;
    private $description;
    private $date;
    private $image;

    /**
     * @param $id
     * @param $aid
     * @param $name
     * @param $author
     * @param $status
     * @param $description
     * @param $date
     * @param $image
     */
    public function __construct($id, $aid, $name, $author, $status, $description, $date, $image)
    {
       if($id!=null){
           $this->id = $id;
       }
        $this->aid = $aid;
        $this->name = $name;
        $this->author = $author;
        $this->status = $status;
        $this->description = $description;
        $this->date = $date;
        $this->image = $image;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}