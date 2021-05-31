<?php

namespace PHPMVC\Models;
class EmployeeModel extends AbstractModel
{
    public $id;
    public $name;
    public $age;
    public $address;
    public $tax;
    public $salary;


    protected static $table_name = 'employees';
    protected static $table_shema = array(
        'name' => self::DATA_TYPE_STR,
        'age' => self::DATA_TYPE_INT,
        'salary' => self::DATA_TYPE_DECIMAL,
        'address' => self::DATA_TYPE_STR,
        'tax' => self::DATA_TYPE_DECIMAL
    );

    protected static $primary_key = 'id';

    public function __construct($name, $age, $tax, $salary, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->tax = $tax;
        $this->salary = $salary;
        $this->address = $address;


    }
}