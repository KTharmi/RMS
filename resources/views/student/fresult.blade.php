@extends('student/app')
 @section('main-contend')
 <?php
 $que1=mysqli_query($con,"select Course_Code,credit,semester,Level,Result,credit*gpv from results where Index_no='".$stu['Index_no']."'");
   $row1= mysqli_num_rows($que1);
     if(!$row1)
     {
 echo "<h3><font color='red'>No any results found</font></h3>";

     }
      else{
 ?>
 <div class="row">

     <div class="col-sm-4">
     <h3><a style="color:#000" href="generate_pdf.php?student_id=<?php echo $stu['id']; ?>"><span class="glyphicon glyphicon-print"></span> Download PDF</a></h3>
   </div>

 </div>

 <div class="row">
 <div class="col-sm-12">

 <div class="panel panel-primary">
 <div class="panel-heading"><span class="glyphicon glyphicon-check">Your Results</span>


 </div>
 <div class="panel-body">



   <div class="form-group">


   <table class="table table-responsive table-hover">
                         <thead>
                             <tr>
                                 <th>ID</th>
                                 <th>Course_Code</th>
                                 <th>semester</th>
                                 <th>Credit_Value</th>
                                 <th>Semester</th>
                                 <th>Level</th>
                                 <th>Result</th>
                                 <th>Total<br />(Gained)</th>
                                 <th>GPA</th>
                             </tr>
     <?php

     echo $inst['Index_no'];

 error_reporting(1);
          $rec_limit =20;

          /* Get total number of records */
   $sql = "SELECT count(Course_Code)from results where Index_no='".$stu['Index_no']."'";
          $retval = mysqli_query($con,$sql);

          if(! $retval )
           {
             die('Could not get data: ' . mysqli_error());
          }
          $row = mysqli_fetch_array($retval, MYSQL_NUM );
          $rec_count = $row[0];

          if( isset($_GET{'pagi'} ) ) {
             $pagi = $_GET{'pagi'} + 1;
             $offset = $rec_limit * $pagi ;
          }else {
             $pagi = 0;
             $offset = 0;
          }


          $left_rec = $rec_count - ($pagi * $rec_limit);
          $sql = "select Course_Code,credit,semester,Level,Result,credit*gpv from results where Index_no='".$stu['Index_no']."'".
             "LIMIT $offset, $rec_limit";

          $retval = mysqli_query($con, $sql);

          if(! $retval )
           {
             die('Could not get data: ' . mysqli_error());
          }

      $inc=1;
      $i=1;
     while($rows = mysqli_fetch_array($retval, MYSQL_ASSOC))
     {
     echo "<td>".$i++."</td>";


     $sem=mysqli_query($con,"select * from semester where sem_id='".$rows['sem_id']."'");
     $sem1=mysqli_fetch_array($sem);

     //echo "<td>".$sem1['name']."</td>";

     echo "<td>".$rows['sub1']."</td>";
     echo "<td>".$rows['sub2']."</td>";
     echo "<td>".$rows['sub3']."</td>";
     echo "<td>".$rows['sub4']."</td>";
     echo "<td>".$rows['sub5']."</td>";
     echo "<td>".$rows['sub6']."</td>";




 //get full marks of each subject
 $q2=mysqli_query($con,"select * from subject where sem_id='".$rows['sem_id']."'");
 $r2=mysqli_fetch_array($q2);
 $total_marks=$r2['marks1']+$r2['marks2']+$r2['marks3']+$r2['marks4']+$r2['marks5']+$r2['marks6'];








     ?>

  </tr>
  <?php }


         ?>

 </table>
     </div>
 </div>

     </div>	<?php }?>

  @endsection
