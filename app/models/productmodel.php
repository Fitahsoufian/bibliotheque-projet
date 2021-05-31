<?php


namespace PHPMVC\Models;



class ProductModel extends AbstractModel
{
  public  $b_id;
  public  $title;
  public  $author;
  public  $summary;
  public  $releaseDate;
  public  $category;

    public static $tableName = 'book';
    public static $tableSchema  = array(
        'title' => self::DATA_TYPE_STR,
        'author' => self::DATA_TYPE_STR,
        'summary' => self::DATA_TYPE_STR,
        'releaseDate' => self::DATA_TYPE_INT,
        'category' => self::DATA_TYPE_STR,
    );
    public static $primaryKey = 'b_id';

}