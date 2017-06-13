<?php


class Comment
{
    private  $idComment = null;
    private  $idVideo = null;
    private  $idUser = null;
    private  $dateComment = null;
    private  $text = null;
    private  $published = null;

    /**
     * Comment constructor.
     */
    public function __construct()
    {
        $this->idComment = null;
        $this->idVideo = null;
        $this->idUser = null;
        $this->dateComment = null;
        $this->text = "";
        $this->published = 0;
    }

    /**
     * @return null
     */
    public  function getIdComment()
    {
        return self::$idComment;
    }

    /**
     * @param null $idComment
     */
    public  function setIdComment($idComment)
    {
        self::$idComment = $idComment;
    }

    /**
     * @return null
     */
    public  function getIdVideo()
    {
        return self::$idVideo;
    }

    /**
     * @param null $idVideo
     */
    public  function setIdVideo($idVideo)
    {
        self::$idVideo = $idVideo;
    }

    /**
     * @return null
     */
    public  function getIdUser()
    {
        return self::$idUser;
    }

    /**
     * @param null $idUser
     */
    public  function setIdUser($idUser)
    {
        self::$idUser = $idUser;
    }

    /**
     * @return null
     */
    public  function getDateComment()
    {
        return self::$dateComment;
    }

    /**
     * @param null $dateComment
     */
    public  function setDateComment($dateComment)
    {
        self::$dateComment = $dateComment;
    }

    /**
     * @return null|string
     */
    public  function getText()
    {
        return self::$text;
    }

    /**
     * @param null|string $text
     */
    public  function setText($text)
    {
        self::$text = $text;
    }

    /**
     * @return int|null
     */
    public  function getPublished()
    {
        return self::$published;
    }

    /**
     * @param int|null $published
     */
    public  function setPublished($published)
    {
        self::$published = $published;
    }

    public function setComment($idComment, $idVideo, $idUser ,$dateComment ,$text, $published){
        self::setIdComment($idComment);
        self::setIdUser($idUser);
        self::setIdVideo($idVideo);
        self::setDateComment($dateComment);
        self::setText($text);
        self::setPublished($published);
    }

}

?>