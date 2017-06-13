<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_config);

class Video{

        // Variales
        private  $idVideo = null;
        private  $idUser = null;
        private  $name = null;
        private  $path = null;
        private  $img = null;
        private  $type = null;
        private  $dateUp = null;
        private  $description = null;
        private  $tags = null;
        private  $likes = null;
        private  $disLikes = null;
        private  $nPlay = null;
        private  $published = null;

        /**
         * Video constructor.
         */
        public function __construct(){
            $this->idVideo = null;
            $this->idUser = null;
            $this->name = "";
            $this->path = null;
            $this->img = null;
            $this->type = null;
            $this->dateUp = null;
            $this->description = "";
            $this->tags = "";
            $this->likes = 0;
            $this->disLikes = 0;
            $this->nPlay = 0;
            $this->published = 0;
        }

        /**
         * @return null
         */
        public  function getidVideo()
        {
            return $this->idVideo;
        }

        /**
         * @param null $idVideo
         */
        public  function setidVideo($idVideo)
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
         * @return null
         */
        public  function getName()
        {
            return $this->name;
        }

        /**
         * @param null $name
         */
        public  function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return null
         */
        public  function getPath()
        {
            return $this->path;
        }

        /**
         * @param null $path
         */
        public  function setPath($path)
        {
            $this->path = $path;
        }

        /**
         * @return null
         */
        public  function getImg()
        {
            return $this->img;
        }

        /**
         * @param null $img
         */
        public  function setImg($img)
        {
            $this->img = $img;
        }

        /**
         * @return null
         */
        public  function getType()
        {
            return $this->type;
        }

        /**
         * @param null $type
         */
        public  function setType($type)
        {
            $this->type = $type;
        }

        /**
         * @return null
         */
        public  function getDateUp()
        {
            return $this->dateUp;
        }

        /**
         * @param null $dateUp
         */
        public  function setDateUp($dateUp)
        {
            $this->dateUp = $dateUp;
        }

        /**
         * @return null
         */
        public  function getDescription()
        {
            return $this->description;
        }

        /**
         * @param null $description
         */
        public  function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @return null
         */
        public  function getTags()
        {
            return $this->tags;
        }

        /**
         * @param null $tags
         */
        public  function setTags($tags)
        {
            $this->tags = $tags;
        }

        /**
         * @return null
         */
        public  function getLikes()
        {
            return $this->likes;
        }

        /**
         * @param null $likes
         */
        public  function setLikes($likes)
        {
            $this->likes = $likes;
        }

        /**
         * @return null
         */
        public  function getDisLikes()
        {
            return $this->disLikes;
        }

        /**
         * @param null $disLikes
         */
        public  function setDisLikes($disLikes)
        {
            $this->disLikes = $disLikes;
        }

        /**
         * @return null
         */
        public  function getNPlay()
        {
            return $this->nPlay;
        }

        /**
         * @param null $nPlay
         */
        public  function setNPlay($nPlay)
        {
            $this->nPlay = $nPlay;
        }

        /**
         * @return null
         */
        public  function getPublished()
        {
            return $this->published;
        }

        /**
         * @param null $published
         */
        public  function setPublished($published)
        {
            $this->published = $published;
        }

        public function setVideo($idVideo, $idUser ,$name ,$path ,$img ,$type ,$dateUp ,$description ,$tags ,$likes ,$disLikes ,$nPlay, $published){
            $this->setIdUser($idUser);
            $this->setIdVideo($idVideo);
            $this->setName($name);
            $this->setPath($path);
            $this->setImg($img);
            $this->setType($type);
            $this->setDateUp($dateUp);
            $this->setDescription($description);
            $this->setTags($tags);
            $this->setLikes($likes);
            $this->setDisLikes($disLikes);
            $this->setNPlay($nPlay);
            $this->setPublished($published);
        }

    }
?>