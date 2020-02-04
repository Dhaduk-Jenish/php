<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Post</title>
    <style>
        .main{
            text-align : center;
        }
    </style>
    <?php  require_once "addBlogPostData.php";
            $connction = new mysqli("localhost", "root", "", "user_information");
            $query = "SELECT category_id, cat_name FROM `blog-post`";
            $data = mysqli_query($connction, $query);
           
            
    ?>
</head>
<body>
    <div class="main">
        <form action="" method="POST">
            <div class="catogery" name="blogPost[]">
                <label >Title</label><br>
                    <input type="text" name="blogPost[title]" 
                        value="<?=getValue('title')?>">
                    <br><br>
                    
                <label >Content</label><br>
                    <input type="text" name="blogPost[content]"
                        value="<?=getValue('content')?>"><br><br>

                <label>URL</label><br>
                    <input type="url" name="blogPost[url]"
                        value="<?=getValue('url')?>"><br><br>
                
                <label >Published At</label><br>
                    <input type="datetime-local" name="blogPost[datetime]"
                        value="<?=getValue('published_at')?>"><br><br>
                
                <label > Parent Catogery</label> <br>
                <select name="blogPost[parent][]" id="blogPost" multiple>
                    <?php while($row = $data -> fetch_assoc()): 
                            print_r($row);?> 
                        <option value="<?= $row['category_id'] ?>"> <?= $row['cat_name'] ?></option>
                    <?php
                        endwhile?>
                    </select>
                    <br><br>
                <label><b>Image</b></label>
                    <input type="file" accept="image/*" name="blogPost[image]" 
                            id="image" ><br>
                            <?=getValue('image')?>
                    <br><br>
                <input type="submit" value="Submit" name='addBlogPost'>

            </div>



        </form>


    </div>

</body>
</html>