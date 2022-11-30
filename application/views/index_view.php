<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- cdn datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    
    <title>Codeigniter</title>

    <style>
        body{
            font-family: 'Kanit', sans-serif;

        }
        table{
            text-align: center !important;
        }
    </style>
    
</head>
<body>

    <h3 class="text-center mt-5">รายชื่อพนักงาน</h3>
    <div class="col-10" align="right">
        <a href="<?php echo site_url('add'); ?>" class="btn btn-primary">เพิ่มข้อมูล</a><br><br>
    </div> 
    <div class="container">
        <table id="example" class="table table-sm text-center" cellspacing="0"  align="center">
            <thead>
                <tr class="table-primary text-center">
                    <th>ID</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>อายุ</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $row){ ?>
                <tr>
                    <td><?php echo $row->m_id ?></td>
                    <td><?php echo $row->m_fname ?> </td>
                    <td><?php echo $row->m_lname ?></td>
                    <td><?php echo $row->age ?></td>
                    <td>
                        <a href="<?php echo site_url('add/edit/').$row->m_id; ?>" class="btn btn-warning" style="color: #fff; width: 70px;">แก้ไข</a>
                    </td>
                    <td><a href="<?php echo site_url('add/del/').$row->m_id; ?>" class="btn btn-danger" style="width: 70px" onclick="return confirm('ยืนยันการลบข้อมูลใช่หรือไม่?')">ลบ</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
</body>
</html>

