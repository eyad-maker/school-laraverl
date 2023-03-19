<?php

namespace App\Repository;


interface StudentRepositoryInterface
{
      // Get Add Form Student
      public function Create_Student();
      //  Get_Student
      public function Get_Student();
      // Get classrooms
      public function Get_classrooms($id);

      //Get Sections
      public function Get_Sections($id);
      public function Store_Student($request);
      // Edit_Student
      public function Edit_Student($id);
       //Update_Student
      public function Update_Student($request);
      //Delete_Student
    public function Delete_Student($request);

    

}