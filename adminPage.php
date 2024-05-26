<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM staff_coordinator s ,event_info ef ,student_coordinator st,events e where e.event_id= ef.event_id and e.event_id= s.event_id and e.event_id= st.event_id");
?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cems</title>
<style>
        /* Container styles */

        .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .content-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th, .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .content-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>
    
<body>
<?php include 'utils/adminHeader.php'?>
 
    
        <div class = "content">
            <div class = "container">
            <h1>Event details</h1>
            <?php
if (mysqli_num_rows($result) > 0) {
?>
                <table class="content-table" >
                    <thead>
                        <tr>
                            
                            <th>Event_name</th>
                            <th>No. of Participents</th>
                            <th>Price</th>
                            <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
   
                            <th>Date</th>
                        
                            <th>Time</th>
                            <th>location </th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     $i=0;
                     while($row = mysqli_fetch_array($result)){
                            echo '<tr>';
                
                   
                             echo '<td>' . $row['event_title'] . '</td>';                    
                            echo '<td>' . $row['participents'] . '</td>';
                            echo '<td>' . $row['event_price'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>'.$row['Date'].'</td>';
                            echo '<td>'.$row['time'].'</td>';
                            echo '<td>'.$row['location'].'</td>';
                            
                            echo '<td>'
                        
                            .'<a class="delete" href="deleteEvent.php?id='.$row['event_id'].'">Delete</a> '
                            .'</td>';
                            echo '</tr>';  

                            
                $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
<?php
}

?>             
                <a class="btn btn-default" href = "createEventForm.php">Create Event</a><!--register button-->
            </div>
        </div>
        
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
