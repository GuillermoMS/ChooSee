<?php
require_once('C:/xampp/htdocs/configure/routing.php');
require_once(PATH_config);

class User{

        // Variales
        private  $idUser = null;
        private  $rol = null;
        private  $email = null;
        private  $password = null;
        private  $name = null;
        private  $lastname = null;
        private  $nick = null;
        private  $dateRegister = null;
        private  $description = null;
        private  $nVideo = null;
        private  $nComment = null;
        private  $profilePhoto = null;
        private  $bane = null;

        public function __construct(){
            $this->idUser = null;
            $this->rol = 0;
            $this->email = null;
            $this->password = null;
            $this->name = null;
            $this->lastname = null;
            $this->nick = null;
            $this->dateRegister = null;
            $this->description = null;
            $this->nVideo = 0;
            $this->nComment = 0;
            $this->profilePhoto = null;
            $this->bane = 0;
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
         * @return int|null
         */
        public  function getRol()
        {
            return $this->rol;
        }

        /**
         * @param int|null $rol
         */
        public  function setRol($rol)
        {
            $this->rol = $rol;
        }

        /**
         * @return null
         */
        public  function getEmail()
        {
            return $this->email;
        }

        /**
         * @param null $email
         */
        public  function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return null
         */
        public  function getPassword()
        {
            return $this->password;
        }

        /**
         * @param null $password
         */
        public  function setPassword($password)
        {
            $this->password = $password;
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
        public  function getLastname()
        {
            return $this->lastname;
        }

        /**
         * @param null $lastname
         */
        public  function setLastname($lastname)
        {
            $this->lastname = $lastname;
        }

        /**
         * @return null
         */
        public  function getNick()
        {
            return $this->nick;
        }

        /**
         * @param null $nick
         */
        public  function setNick($nick)
        {
            $this->nick = $nick;
        }

        /**
         * @return null
         */
        public  function getDateRegister()
        {
            return $this->dateRegister;
        }

        /**
         * @param null $dateRegister
         */
        public  function setDateRegister($dateRegister)
        {
            $this->dateRegister = $dateRegister;
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
         * @return int|null
         */
        public  function getNVideo()
        {
            return $this->nVideo;
        }

        /**
         * @param int|null $nVideo
         */
        public  function setNVideo($nVideo)
        {
            $this->nVideo = $nVideo;
        }

        /**
         * @return int|null
         */
        public  function getNComment()
        {
            return $this->nComment;
        }

        /**
         * @param int|null $nComment
         */
        public  function setNComment($nComment)
        {
            $this->nComment = $nComment;
        }

        /**
         * @return null
         */
        public  function getProfilePhoto()
        {
            return $this->profilePhoto;
        }

        /**
         * @param null $profilePhoto
         */
        public  function setProfilePhoto($profilePhoto)
        {
            $this->profilePhoto = $profilePhoto;
        }

        /**
         * @return int|null
         */
        public  function getBane()
        {
            return $this->bane;
        }

        /**
         * @param int|null $bane
         */
        public  function setBane($bane)
        {
            $this->bane = $bane;
        }

        public function setUser($idUser ,$rol ,$email ,$password, $name, $lastname, $nick ,$dateRegister, $description, $nVideo, $nComment, $profilePhoto, $bane){
            $this->setIdUser($idUser);
            $this->setRol($rol);
            $this->setEmail($email);
            $this->setDateRegister($dateRegister);
            $this->setPassword($password);
            $this->setName($name);
            $this->setLastname($lastname);
            $this->setNick($nick);
            $this->setDescription($description);
            $this->setNVideo($nVideo);
            $this->setNComment($nComment);
            $this->setProfilePhoto($profilePhoto);
            $this->setBane($bane);
        }








    }

?>