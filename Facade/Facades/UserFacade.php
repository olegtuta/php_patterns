<?php

namespace Facades;

use User\Auth;
use User\Email;
use User\User;

/**
 * Class UserFacade
 * Facade for User-related functionality
 */
class UserFacade
{
    protected $auth;
    protected $user;
    protected $email;

    /**
     * UserFacade constructor.
     *
     * @param Auth $auth Auth object
     * @param User $user User object
     * @param Email $email Email object
     */
    public function __construct(
        Auth $auth,
        User $user,
        Email $email
    ) {
        $this->auth  = $auth;
        $this->user  = $user;
        $this->email = $email;
    }

    /**
     * Login user with username and password
     *
     * @param string $username Username
     * @param string $password Password
     *
     * @return bool Login status
     */
    public function login($username, $password)
    {
        return $this->auth->login($username, $password);
    }

    /**
     * Logout user
     *
     * @return bool Logout status
     */
    public function logout()
    {
        return $this->auth->logout();
    }

    /**
     * Create new user with provided data
     *
     * @param array $data User data
     *
     * @return int User ID
     */
    public function createUser($data)
    {
        return $this->user->create($data);
    }

    /**
     * Update user with provided ID and data
     *
     * @param int   $id User ID
     * @param array $data User data
     *
     * @return bool Update status
     */
    public function updateUser($id, $data)
    {
        return $this->user->update($id, $data);
    }

    /**
     * Delete user with provided ID
     *
     * @param int $id User ID
     *
     * @return bool Delete status
     */
    public function deleteUser($id)
    {
        return $this->user->delete($id);
    }

    /**
     * Get user with provided ID
     *
     * @param int $id User ID
     *
     * @return array User data
     */
    public function getUser($id)
    {
        return $this->user->get($id);
    }

    /**
     * Get all users
     *
     * @return array List of users
     */
    public function getAllUsers()
    {
        return $this->user->getAll();
    }

    /**
     * Send email
     *
     * @param string $to Recipient email address
     * @param string $subject Email subject
     * @param string $body Email body
     *
     * @return bool Email status
     */
    public function sendEmail($to, $subject, $body)
    {
        return $this->email->send($to, $subject, $body);
    }
}
