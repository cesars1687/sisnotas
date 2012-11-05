<?php
class Alumnos extends ActiveRecord\Model {
    # explicit table name since our table is not "books"
   static $table_name = 'alumnos';

   # explicit pk since our pk is not "id"
   static $primary_key = 'idAlumnos';

}