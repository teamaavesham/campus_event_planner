<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Events</title>
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
    <?php
    require_once 'utils/header.php';
    require_once 'utils/styles.php';

    $usn = $_POST['usn'];

    include_once 'classes/db1.php';

    $result = mysqli_query($conn, "SELECT * FROM registered r, staff_coordinator s, event_info ef, student_coordinator st, events e where e.event_id = ef.event_id and e.event_id = s.event_id and e.event_id = st.event_id and r.usn = '$usn' and r.event_id = e.event_id");
    ?>

    <div class="content">
        <div class="container">
            <h1>Registered Events</h1>
            <?php if (mysqli_num_rows($result) > 0) { ?>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Student Co-ordinator</th>
                            <th>Staff Co-ordinator</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['event_title'] . '</td>';
                            echo '<td>' . $row['st_name'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>' . $row['location'] . '</td>';
                            echo '</tr>';
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            <?php } else {
                echo 'Not Yet Registered for any events';
            } ?>
        </div>
    </div>

    <?php include 'utils/footer.php'; ?>
</body>
</html>
