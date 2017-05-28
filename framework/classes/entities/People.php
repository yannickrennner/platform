<?php

namespace CASHMusic\Entities;

use CASHMusic\Entities\EntityInterface;
/**
 * @Entity @Table(name="people")
 */

class People extends EntityBase {

    protected $fillable = ['username', 'email_address', 'last_name', 'password', 'data'];

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $username;

    /** @Column(type="string") **/
    protected $email_address;

    /** @Column(type="string", nullable=true) **/
    protected $display_name;

    /** @Column(type="string", nullable=true) **/
    protected $first_name;

    /** @Column(type="string", nullable=true) **/
    protected $last_name;

    /** @Column(type="string", nullable=true) **/
    protected $organization;

    /** @Column(type="string") **/
    protected $password;

    /** @Column(type="json_array", nullable=true) **/
    protected $data;

    /** @Column(type="string", nullable=true) **/
    protected $address_line1;

    /** @Column(type="string", nullable=true) **/
    protected $address_line2;

    /** @Column(type="string", nullable=true) **/
    protected $address_city;

    /** @Column(type="string", nullable=true) **/
    protected $address_region;

    /** @Column(type="string", nullable=true) **/
    protected $address_postalcode;

    /** @Column(type="string", nullable=true) **/
    protected $address_country;

    /** @Column(type="string", nullable=true) **/
    protected $url;

    /** @Column(type="boolean") **/
    protected $is_admin;

    /** @Column(type="string", nullable=true) **/
    protected $api_key;

    /** @Column(type="string", nullable=true) **/
    protected $api_secret;

    /** @Column(type="integer", nullable=true) **/
    protected $creation_date;

    /** @Column(type="integer", nullable=true) **/
    protected $modification_date;

    public function setPasswordAttribute($value) {
        $this->password = md5($value);
    }
}