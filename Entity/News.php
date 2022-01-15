<?php
class News
{
    private $id;
    private $image;
    private $id_newcategory;
    private $title;
    private $description;
    private $dateNew;
    private $id_admin;

    /**
     * @param $id
     * @param $image
     * @param $id_newcategory
     * @param $title
     * @param $Description
     * @param $dateNew
     * @param $id_admin
     */
    public function __construct($id, $image, $id_newcategory, $title, $description, $dateNew, $id_admin)
    {
        $this->id = $id;
        $this->image = $image;
        $this->id_newcategory = $id_newcategory;
        $this->title = $title;
        $this->description = $description;
        $this->dateNew = $dateNew;
        $this->id_admin = $id_admin;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getIdNewcategory()
    {
        return $this->id_newcategory;
    }

    /**
     * @param mixed $id_newcategory
     */
    public function setIdNewcategory($id_newcategory)
    {
        $this->id_newcategory = $id_newcategory;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateNew()
    {
        return $this->dateNew;
    }

    /**
     * @param mixed $dateNew
     */
    public function setDateNew($dateNew)
    {
        $this->dateNew = $dateNew;
    }

    /**
     * @return mixed
     */
    public function getIdAdmin()
    {
        return $this->id_admin;
    }

    /**
     * @param mixed $id_admin
     */
    public function setIdAdmin($id_admin)
    {
        $this->id_admin = $id_admin;
    }
}