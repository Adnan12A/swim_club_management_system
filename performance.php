<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>
<div class="container">
    <!-- Main Content -->
    <div class="mt-4">
        <!-- Performance Data Tables -->
        <h2 style="padding:20px;text-align:center;">Swimmer Performance</h2>

        <!-- Table for swimmers -->
        <div id="swimmer-content" style="margin-bottom:100px;">
            <table class="table table-striped table-bordered" id="swimmer-table">
                <thead>
                    <tr>
                        <th class="sorting">Swimmer</th>
                        <th class="sorting">Date</th>
                        <th class="sorting">Event</th>
                        <th class="sorting">Time</th>
                        <th class="sorting">Rank</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>2023-05-01</td>
                        <td>100m Freestyle</td>
                        <td>1:00.20</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>2023-05-02</td>
                        <td>200m Backstroke</td>
                        <td>2:15.45</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>2023-05-03</td>
                        <td>50m Butterfly</td>
                        <td>0:25.80</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Sarah Thompson</td>
                        <td>2023-05-04</td>
                        <td>400m Freestyle</td>
                        <td>4:20.10</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>David Wilson</td>
                        <td>2023-05-05</td>
                        <td>100m Breaststroke</td>
                        <td>1:10.35</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Emily Davis</td>
                        <td>2023-05-06</td>
                        <td>200m Individual Medley</td>
                        <td>2:30.90</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Daniel Roberts</td>
                        <td>2023-05-07</td>
                        <td>50m Freestyle</td>
                        <td>0:22.15</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>Olivia Adams</td>
                        <td>2023-05-08</td>
                        <td>200m Breaststroke</td>
                        <td>2:35.75</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Matthew Harris</td>
                        <td>2023-05-09</td>
                        <td>100m Backstroke</td>
                        <td>1:05.60</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Lily Thompson</td>
                        <td>2023-05-10</td>
                        <td>400m Individual Medley</td>
                        <td>4:55.40</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>2023-05-02</td>
                        <td>200m Backstroke</td>
                        <td>2:15.45</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>2023-05-03</td>
                        <td>50m Butterfly</td>
                        <td>0:25.80</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Sarah Thompson</td>
                        <td>2023-05-04</td>
                        <td>400m Freestyle</td>
                        <td>4:20.10</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>David Wilson</td>
                        <td>2023-05-05</td>
                        <td>100m Breaststroke</td>
                        <td>1:10.35</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Emily Davis</td>
                        <td>2023-05-06</td>
                        <td>200m Individual Medley</td>
                        <td>2:30.90</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Daniel Roberts</td>
                        <td>2023-05-07</td>
                        <td>50m Freestyle</td>
                        <td>0:22.15</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>Olivia Adams</td>
                        <td>2023-05-08</td>
                        <td>200m Breaststroke</td>
                        <td>2:35.75</td>
                        <td>2nd</td>
                    </tr>
                    <tr>
                        <td>Matthew Harris</td>
                        <td>2023-05-09</td>
                        <td>100m Backstroke</td>
                        <td>1:05.60</td>
                        <td>3rd</td>
                    </tr>
                    <tr>
                        <td>Lily Thompson</td>
                        <td>2023-05-10</td>
                        <td>400m Individual Medley</td>
                        <td>4:55.40</td>
                        <td>1st</td>
                    </tr>
                    <tr>
                        <td>Christopher Lee</td>
                        <td>2023-05-11</td>
                        <td>200m Freestyle</td>
                        <td>1:55.75</td>
                        <td>2nd</td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>

<!-- Include jQuery and DataTables library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTables for swimmer table
        $('#swimmer-table').DataTable();
    });
</script>