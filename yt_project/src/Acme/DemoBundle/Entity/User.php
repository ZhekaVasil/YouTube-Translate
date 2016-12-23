<?php
//
//namespace Acme\DemoBundle\Entity;
//
//use Symfony\Component\Security\Core\User\UserInterface;
//use Symfony\Component\Security\Core\User\EquatableInterface;
//
//class User implements UserInterface, EquatableInterface
//{
//    private $id;
//    private $username;
//    private $password;
//    private $salt;
//
//    public function setId( $v )
//    {
//        $this->id = $v;
//    }
//
//    public function setUsername( $v )
//    {
//        $this->username = $v;
//    }
//
//    public function setPassword( $v )
//    {
//        $this->password = $v;
//    }
//
//    /**
//     * @inheritDoc
//     * создан, т.к. этого требует интерфейс UserInterface
//     * @return string - обязан возвращать уникальный параметр пользователя (например уникальное имя или емэйл)
//     */
//    public function getUsername()
//    {
//        return (string)$this->username;
//    }
//
//    /**
//     * @inheritDoc
//     * создан, т.к. этого требует интерфейс UserInterface
//     * отдает соль для хэширования пароля пользователя
//     * @return null|string
//     */
//    public function getSalt()
//    {
//        // you *may* need a real salt depending on your encoder
//        // see section on salt below
//        return null;
//    }
//
//    /**
//     * @inheritDoc
//     */
//    public function getPassword()
//    {
//        return $this->password;
//    }
//
//    /**
//     * @inheritDoc
//     */
//    public function getRoles()
//    {
//        return empty($this->roles)? array('ROLE_USER') : explode(',', $this->roles);
//    }
//
//    /**
//     * @inheritDoc
//     * создан, т.к. этого требует интерфейс UserInterface
//     * идея в следующем: удаляет конфиденциальные данные о пользователе. Это важно, т.к.,
//     * конфиденциальная информация (например, plain-text password хранится в этом объекте).
//     */
//    public function eraseCredentials()
//    {
//    }
//
//    /**
//     * проверка объекта пользователя полученного из токена с объектом полученным из провайдера
//     * запускается каждый раз, при рефреше страницы (но только если в app/config/security.yml выставлен access_control)
//     * @param UserInterface $user
//     * @return bool
//     */
//    public function isEqualTo(UserInterface $user)
//    {
//        if (!$user instanceof User) {
//            return false;
//        }
//
//        if ($this->password !== $user->getPassword()) {
//            return false;
//        }
//
//        if ($this->salt !== $user->getSalt()) {
//            return false;
//        }
//
//        if ($this->username !== $user->getUsername()) {
//            return false;
//        }
//
//        return true;
//    }
//}