<?php


namespace PHPMVC\Models;


class UserModel extends AbstractModel
{
    public  $u_id;
    public  $firstName;
    public  $lastName;
    public  $age;
    public  $phone;
    public  $mail;
    public  $pass;
    public  $role;


    public static $tableName = 'user';
    public static $tableSchema = array(
        'firstName' => self::DATA_TYPE_STR,
        'lastName' => self::DATA_TYPE_STR,
        'age' => self::DATA_TYPE_INT,
        'phone' => self::DATA_TYPE_INT,
        'mail' => self::DATA_TYPE_STR,
        'pass' => self::DATA_TYPE_STR,
        'role' => self::DATA_TYPE_STR,
    );

    protected static $primaryKey = 'u_id';
}