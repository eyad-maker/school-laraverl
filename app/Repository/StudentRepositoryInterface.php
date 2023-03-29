<?php

namespace App\Repository;


interface StudentRepositoryInterface
{
      // Get Add Form Student
      public function Create_Student();
      //  Get_Student
      public function Get_Student();
       // Show_Student
      public function Show_Student($id);
      // Get classrooms
      public function Get_classrooms($id);

      //Get Sections
      public function Get_Sections($id);
      //Upload_attachment
      public function Upload_attachment($request);
      public function Store_Student($request);
      // Edit_Student
      public function Edit_Student($id);
       //Update_Student
      public function Update_Student($request);
      //Delete_Student
    public function Delete_Student($request);
     //Download_attachment
     public function Download_attachment($studentsname,$filename);
     //Delete_attachment
    public function Delete_attachment($request);


    

}