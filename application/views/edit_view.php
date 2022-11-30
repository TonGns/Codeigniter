<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">

    <title>Edit Member</title>
    <style>
        body{
            font-family: 'Kanit', sans-serif;

        }
    </style>
</head>

<body>


    

    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <h3 class="text-center mt-4 my-4">แก้ไขมูลพนักงาน</h3>
                    <form class="form-card" action="<?php echo site_url('Add/editdata'); ?>" method="post">
                        <div class="row justify-content-evenly text-left">
                            <div class="form-group col-sm-4 flex-column d-flex my-3">
                                <input type="text" class="form-control ms-4" placeholder="ชื่อพนักงาน" name="m_fname" value="<?php echo $query->m_fname; ?>">
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex my-3">
                                <input type="text" class="form-control" placeholder="นามสกุลพนักงาน" name="m_lname" value="<?php echo $query->m_lname; ?>">
                            </div>
                        </div>
                        <div class="row justify-content-evenly text-left">
                            <div class="form-group col-sm-4 flex-column d-flex my-3"> 
                               <input type="number" class="form-control" name="age" placeholder="อายุ" value="<?php echo $query->age; ?>">
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-3"> 
                                <a href="<?php echo site_url(''); ?>" class="btn btn-secondary">ยกเลิก</a>
                                <button type="submit" class="btn btn-primary">บันทึก</button> 
                                <input type="hidden" name="m_id" value="<?php echo $query->m_id; ?>">
                            </div>
                        </div><br>
                    </form>
   
                </div>
            </div>
        </div>
    </div>



    
</body>

</html>