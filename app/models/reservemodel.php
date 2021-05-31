<?php


namespace PHPMVC\Models;



class ReserveModel extends AbstractModel
{
  public  $id;
  public  $title;
  public  $author;
  public  $summary;
  public  $releaseDate;

    public static $tableName = 'reservation';
    public static $tableSchema  = array(
        'title' => self::DATA_TYPE_STR,
        'author' => self::DATA_TYPE_STR,
        'summary' => self::DATA_TYPE_STR,
        'releaseDate' => self::DATA_TYPE_INT,
    );
    public static $primaryKey = 'id';

}