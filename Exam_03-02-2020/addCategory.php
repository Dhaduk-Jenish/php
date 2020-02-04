<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ieedge">
    <title>Category</title>
    <style>
        .main{
            text-align : center;
        }
    </style>
    <?php require_once "categoryAdd.php" ?>
</head>
<body>
    <div class="main">
        <form action="" method="POST">
            <div class="catogery" name="category[]">
                <label >Title</label><br>
                    <input type="text" name="category[title]" value="<?=getValue('title')?>">
                    <br><br>
                    
                <label >Content</label><br>
                    <input type="text" name="category[content]"  value="<?=getValue('content')?>"><br><br>

                <label>URL</label><br>
                    <input type="url" name="category[url]"  value="<?=getValue('url')?>"><br><br>
                
                <label >Meta Title</label><br>
                    <input type="text" name="category[metatitle]"  value="<?=getValue('metatitle')?>"><br><br>
                
                <label > Parent Catogery</label> <br>
                    <select name="category[parent]" id="category">
                        <option>Electronics</option>
                        <option>AutoMobile</option>
                    </select>   <br><br>

                <label><b>Image</b></label>
                    <input type="file" accept="image/*" name="category[image]" 
                            id="image" ><br><br>
                    

                <input type="submit" value="Add" name='addcategory'>

            </div>



        </form>


    </div>
</body>
</html>