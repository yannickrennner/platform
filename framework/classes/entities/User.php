<?php

namespace CASHMusic\Entities;

/**
 * Class User
 * @package CASHMusic\Entities
 * @Entity @Table(name="people")
 *
 * @property integer $id
 * @property string $username
 * @property string $email_address
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property array $data
 */

class User extends EntityBase {

    protected $fillable = ['username', 'email_address', 'last_name', 'password', 'data'];

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $username;

    /** @Column(type="string") **/
    protected $email_address;

    /** @Column(type="string") **/
    protected $first_name;

    /** @Column(type="string") **/
    protected $last_name;

    /** @Column(type="string") **/
    protected $password;

    /** @Column(type="json_array") **/
    protected $data;

    public function setPasswordAttribute($value) {
        $this->password = md5($value);
    }
}