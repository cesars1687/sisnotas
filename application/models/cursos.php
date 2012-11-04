<?php
class Cursos extends ActiveRecord\Model {
    # explicit table name since our table is not "books"
   static $table_name = 'cursos';

   # explicit pk since our pk is not "id"
   static $primary_key = 'idCursos';
}