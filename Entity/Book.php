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
    public function getaid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     */
    public function setaid($aid): void
    {
        $this->aid = $aid;
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

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }


}