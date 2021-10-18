<div class="panel-body">
    <p>
        Approved Leave 
    </p>
    <table class="table table-hover" id="approvved_leavetable">
        <thead>
            <tr>
                <th>Employee No</th>
                <th class="hidden-xs">Name</th>
                <th>Leave Type</th>
                <th class="hidden-xs">From</th>
                <th>To</th>
                <th class="hidden-xs">Leave Period</th>
                <th>Total Days</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($awardedleaves as $value) {
                ?>
                <tr class="success">
                    <td><?= $value['pin']; ?></td>
                    <td class="hidden-xs"><?= $value['names']; ?></td>
                    <td><?= $value['leavetype']; ?></td>
                    <td class="hidden-xs"><?= $value['leavefrom']; ?></td>
                    <td class=""><?= $value['leaveto']; ?></td>
                    <td class="hidden-xs"><?= $value['leaveperiod']; ?></td>
                    <td class=""><?= $value['leavebal']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#approvved_leavetable').DataTable({
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "pageLength": 7
//            "paging": false,
//            "ordering": false,
//            "info": false
        });
    });
</script>
