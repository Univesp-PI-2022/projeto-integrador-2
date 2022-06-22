<?php



namespace src\model;

use src\database\DatabaseCon;


class Post extends DatabaseCon
{
    private $id;
    private $title;
    private $content;
    private $image;



    public function __construct(string $title,  string $content, string $image)
    {
        $this->setTitle($title);
        $this->setContent($content);
        $this->setImage($image);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $titleLength = strlen($title);

        if ($titleLength > 5) {
            $this->title = $title;
            return $this;
        } else {
            $this->title = false;
            return $this;
        }
    }

    /**
     * Get the value of content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */
    public function setContent($content)
    {
        $contentLength = strlen($content);
        if ($contentLength > 10) {
            $this->content = $content;
            return $this;
        } else {
            $this->content = false;
            return $this;
        }
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }


    public function createPost()
    {
        $databaseCon = new DatabaseCon("posts");

        $registered =  $databaseCon->insert([
            "title" => $this->getTitle(),
            "content" => $this->getContent(),
            "image" => $this->getImage()
        ]);

        return $registered;
    }


    public function updatePost()
    {
        return (new DatabaseCon("usuarios"))->update("id = " . $this->id, [
            "title" => $this->getTitle(),
            "content" => $this->getContent(),
            "image" => $this->getImage()
        ]);
    }


    public function deletePost()
    {
        return (new DatabaseCon("usuarios"))->delete("id = " . $this->id);
    }


    public function getPosts()
    {
        # code...
    }
}
