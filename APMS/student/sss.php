<?php
include "../conn.php";
$date =date('d/m/y');
$time = time("s:m");
                                
                               mysqli_query($conn, "insert into submit values('', '$_POST[pt1]', '$_POST[pt1d]','$_POST[pt2]', '$_POST[pt2d]', '$_POST[pt3]','$_POST[pt3d]','sdsd','$date','$time','','','','')");
                               ?>
                               <script type="text/javascript">
                                   alert("successfully sent");
                               </script>
                               <?php
                       

                             ?>