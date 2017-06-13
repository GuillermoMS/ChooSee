<?php


class Reg
{
    private  $idReg = null;
    private  $idVideo = null;
    private  $idUser = null;
    private  $typeVideo = null;
    private  $dateReg = null;
    private  $tags = null;
    private  $likes = null;
    private  $disLikes = null;

    /**
     * Reg constructor.
     */
    public function __construct()
    {
        $this->idReg = null;
        $this->idVideo = null;
        $this->idUser = null;
        $this->typeVideo = "";
        $this->dateReg = null;
        $this->tags = "";
        $this->likes = 0;
        $this->disLikes = 0;
    }

    /**
     * @return null
     */
    public  function getIdReg()
    {
        return $this->idReg;
    }

    /**
     * @param null $idReg
     */
    public  function setIdReg($idReg)
    {
        $this->idReg = $idReg;
    }

    /**
     * @return null
     */
    public  function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * @param null $idVideo
     */
    public  function setIdVideo($idVideo)
    {
        $this->idVideo = $idVideo;
    }

    /**
     * @return null
     */
    public  function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param null $idUser
     */
    public  function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return null|string
     */
    public  function getTypeVideo()
    {
        return $this->typeVideo;
    }

    /**
     * @param null|string $typeVideo
     */
    public  function setTypeVideo($typeVideo)
    {
        $this->typeVideo = $typeVideo;
    }

    /**
     * @return null
     */
    public  function getDateReg()
    {
        return $this->dateReg;
    }

    /**
     * @param null $dateReg
     */
    public  function setDateReg($dateReg)
    {
        $this->dateReg = $dateReg;
    }

    /**
     * @return null|string
     */
    public  function getTags()
    {
        return $this->tags;
    }

    /**
     * @param null|string $tags
     */
    public  function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return int|null
     */
    public  function getLikes()
    {
        return $this->likes;
    }

    /**
     * @param int|null $likes
     */
    public  function setLikes($likes)
    {
        $this->likes = $likes;
    }

    /**
     * @return int|null
     */
    public  function getDisLikes()
    {
        return $this->disLikes;
    }

    /**
     * @param int|null $disLikes
     */
    public  function setDisLikes($disLikes)
    {
        $this->disLikes = $disLikes;
    }

    public function setReg($idReg, $idVideo, $idUser ,$typeVideo ,$dateReg ,$tags ,$likes,$disLikes){
        $this->setIdReg($idReg);
        $this->setIdUser($idUser);
        $this->setIdVideo($idVideo);
        $this->setTypeVideo($typeVideo);
        $this->setDateReg($dateReg);
        $this->setTags($tags);
        $this->setLikes($likes);
        $this->setDisLikes($disLikes);
    }

}


?>