<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <?php require_once "dashboardData.php";
            session_start();?>
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
    <?php if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } ?>

    <div class="main">
        <a href="dashBoard.php?manage=true&id=<?=isset($_GET['id']) ? $_GET['id'] : ''?>" name="category" id="category">Manage Catogery</a>
        <a href="register.php?id=<?=$id?>" name="profile" id="profile">My Profile</a>

        <a href="login.php" name="logout" id="logout" onclick="<?php session_destroy();?>">Log Out</a>


    <br><br>
        <div class="blogPost" id="blogPost" name='blogPost' style="display:block">
        <a href="addBlogPost.php?id=<?=isset($_GET['id']) ? $_GET['id'] :' '?>"><input type="button" value="Add Blog-Post"></a>
           
            <table border="1px">

                <tr>
                    <th>Catogery Id</th>
                    <th>Catogery Name</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Actions</th>
                </tr>
                <?php $query = "SELECT  `bid`,category_id,title,published_at FROM `blog-post`
                                WHERE cat_name=' ' ";
                        $data = mysqli_query($connection, $query); 
                    while ($row =   $data-> fetch_assoc()) : ?>
                <tr>
                <?php foreach($row as $key => $value) :
                    if ($key == "category_id") {
                        switch ($value) {
                            case '1':
                                echo "<td>Education</td>";    
                                break;
                            
                            case '2' :
                                echo "<td>Lifestyle</td>";    
                                break;
                            case '1,2' :
                            echo "<td>Education,Lifestyle</td>";    
                            break;
                        }
                    
                    }else{?>
                    
                    <td><?php echo $value?></td>
                    
                <?php }endforeach; ?>
                <td> <a href="addBlogPost.php?updateid=<?=$row['bid']?>&id=<?=$_GET['id']?>"
                        name="delete" >Update
                     <a href="dashboard.php?deleteid=<?=$row['bid']?>&id=<?=$_GET['id']?>" 
                        name="delete" >Delete</a>
                    </td>      

                </tr>
                <?php endwhile?>
            </table>
        </div>


        <!-- catogery Table -->

        <div class="categories" id="categories" name='categories' style="display:none">

            <a href="addCategory.php?id=<?=isset($_GET['id']) ? $_GET['id'] :' '?>"><input type="button" value="Add Category"></a>
            <table border="1px">

                <tr>
                    <th>Catogery Id</th>
                    <th>Categoty Name</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
                <?php $query = "SELECT `cat_id`,cat_name,created_at  FROM `category`
                                 ";
                        $data = mysqli_query($connection, $query); 
                    while ($row =   $data-> fetch_assoc()) : ?>
                <tr>
                <?php foreach($row as $key => $value) :
            
                    if ($key == "category_id") {
                        switch ($value) {
                            case '1':
                                echo "<td>Education</td>";    
                                break;
                            
                            case '2' :
                                echo "<td>Lifestyle</td>";    
                                break;
                            case '1,2' :
                            echo "<td>Education,Lifestyle</td>";    
                            break;
                        }
                    
                    }else{?>
                    
                    <td><?php echo $value?></td>
                    
                <?php }endforeach; ?>
                <td> 
                        <a href="dashboard.php?deleteCatId=<?=$row['cat_id']?>&id=<?=$_GET['id']?>">Delete </a>
                        <a href="addCategory.php?updateCatId=<?=$row['cat_id']?>&id=<?=$_GET['id']?>">Update </a>

                </td>      

                </tr>
                <?php endwhile?>
            </table>
        </div>


    </div>
    <?php
        if (@$_GET['manage']) {
            echo "<script>
                document.getElementById('blogPost').style.display = 'none';
                document.getElementById('categories').style.display = 'block';
                
            </script>
            " ;

        }
    
    ?>
</body>
</html>