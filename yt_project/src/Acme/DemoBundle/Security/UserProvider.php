<?php
/**
 * По мотивам: http://symfony.com/doc/current/cookbook/security/custom_authentication_provider.html
 * Провайдер пользователя - находит пользователя по уникальному полю username.
 *//*
namespace Acme\DemoBundle\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Acme\DemoBundle\Entity\User;

class UserProvider implements UserProviderInterface
{
    /**
     * находит и возвращает экземпляр класса User или выбрасывает Exception.
     *
     * @param string $username - мыло пользователя
     *
     * @return false|User|\Symfony\Component\Security\Core\User\UserInterface
     * @throws \Symfony\Component\Security\Core\Exception\UsernameNotFoundException
     *//*
    public function loadUserByUsername( $username = '' )
    {
        if (empty($username)) {
            throw new UsernameNotFoundException('Username is empty.');
        }

        //$r = mysq_fetch_assoc(mysql_query("SELECT * FROM User WHERE username = '".$username."'"));
        $r = "admin";

        if(empty($r)){
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        $user = new User();
        $user->setUsername($r['username']);
        $user->setPassword($r['password']);// напомню, это хэш пароля (как его создать - читай ниже)
        return $user;
    }

    /**
     * метод проверяет вид сущности пользователя (ведь их может быть много)
     *
     * @param UserInterface $user
     *
     * @return User|UserInterface
     * @throws \Symfony\Component\Security\Core\Exception\UnsupportedUserException
     */
   /* public function refreshUser( UserInterface $user )
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException( sprintf( 'Instances of "%s" are not supported.', get_class( $user ) ) );
        }
        return $this->loadUserByUsername( $user->getUsername() );
    }

    /**
     * Метод проверки класса пользователя
     * нужен чтобы Symfony использовал правильный класс Пользователя для получения объекта пользователя
     *
     * @param string $class
     *
     * @return bool
     */
   /* public function supportsClass( $class )
    {
        return $class === 'Acme\\DemoBundle\\Entity\\User';
    }
}