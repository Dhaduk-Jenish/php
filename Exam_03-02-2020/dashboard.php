<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <?php require_once "dashboardData.php"?>
    <style>
        #profile{
            background-color: blueviolet;
            color: black;
            
            display: inline-block;
            
        }
        #category{
            background-color: lightcyan;
            color: black;
            
            display: inline-block;
            
        }
        #logout{
            background-color:pink;
            color: black;
            
            display: inline-block;
            
        }
    </style>
</head>
<body>
    <?php if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }?>

    <div class="main">
        <a href="addCategory.php" name="category" id="category">Manage Catogery</a>
        

    <a href="register.php?id=<?=$id?>" name="profile" id="profile">My Profile</a>

        <a href="login.php" name="logout" id="logout">Log Out</a>


    <table border="1px">

        <tr>
            <th>Catogery Id</th>
            <th>Catogery Name</th>
            <th>Created Date</th>
            <th>Action</th>
        </tr>
        <?php while ($row =   $data-> fetch_assoc()) : ?>
        <tr>
        <?php foreach($row as $value) :?>
            <td><?php echo $value?></td>
            
        <?php endforeach; ?>
        <td> <a href="dashboard.php?deleteid=<?=$row['id']?>" name="delete" >Delete</a>

        </tr>
        <?php endwhile?>
    </table>

    </div>
</body>
</html>