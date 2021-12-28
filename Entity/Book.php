<?php

class Book
{
    private $id;
    private $name;
    private $author;
    private $id_category;
    private $status;
    private $description;
    private $date;
    private $image;

    /**
     * @param $id
     * @param $name
     * @param $author
     * @param $id_category
     * @param $status
     * @param $description
     * @param $date
     * @param $image
     */
    public function __construct($id, $name, $author, $id_category, $status, $description, $date, $image)
    {
       if($id!=null){
           $this->id = $id;
       }
        $this->name = $name;
        $this->author = $author;
        $this->id_category = $id_category;
        if($status!=null){
            $this->status = $status;
        }

        $this->description = $description;
        if($date!=null){
            $this->date = $date;
        }
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
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * @param mixed $id_category
     */
    public function setIdCategory($id_category): void
    {
        $this->id_category = $id_category;
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