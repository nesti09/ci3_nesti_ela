<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data User</title>
</head>
<body>
        <h1 class="text-center">Data User</h1>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4 mx-auto mt-5 mb-4">
                            <div class="row">
                                <div class="col-10">
                                    <form method="get" class="d-flex">
                                    <input class="form-control mr-sm-2" type="search" style="width: 370px;" placeholder="Search" name="nama">
                                        <button type="submit" class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="col-2">
                                    <a href="<?php echo base_url('index.php/user/tambah') ?>"><button class='btn btn-secondary'><i class="fas fa-user-plus"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="container mt-4 ">
        <div class="row">
            <div class="col-12">

                <?php if(!empty($data)):?>
                <table class="table table-bordered text-center">
                    <thead style="color: #D3D3D3;" class="bg-secondary">
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>
                            Action
                        </th>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($data AS $key => $value):?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $value['username'] ?></td>
                            <td><?php echo $value['email'] ?></td>
                            <td>
                                <a style='color:blue;' href="<?php echo base_url('index.php/user/edit/'. $value['id']) ?>"><i class="fas fa-edit"></i></a>
                                |
                                <a style='color:red;' href="<?php echo base_url('index.php/user/delete/'. $value['id'])?>"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <?php endif?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist /js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</body>
</html>