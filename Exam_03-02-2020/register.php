<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Register User</title>
    <style>
        span {
            width: 300px;
            display: inline-block;
        }
    </style>
    <?php   require_once "registerUser.php"; ?>
</head>
<body>
    <div class="main">

        <form action="" method="POST">
            <div name="register[]">
                    
                <span>Prefix </span>
                    <?php    $prefix = ['Mr','Miss', 'Ms', 'Mrs', 'Dr']; ?>
                    <select name="register[prefix]">
                        <?php foreach($prefix as $prefixValue) : ?>
                        <option><?php echo $prefixValue; ?> </optiion>
                            <?php endforeach ?>
                    </select><br><br>
                <span>First Name </span>
                    <input type="text" name='register[firstName]'
                      value="<?= getValue('firstName')?>"  ><br><br>
                <br>
                <span>Last Name </span>
                    <input type="text" name='register[lastName]'
                    value="<?= getValue('lastName')?>"  ><br>
                <span>Birth Date</span>
                    <input type="date" name='register[birthDate]'
                       ><br><br>
                <span>Phone Number </span>
                    <input type="text" name='register[mobile]'
                    value="<?= getValue('mobile')?>"><br><br>
                <span>Email</span>
                    <input type="email" name='register[email]'
                    value="<?= getValue('email')?>" ><br><br>
                <span>Password</span>
                    <input type="text" name='register[password]'
                    value="<?= getValue('password')?>"><br><br>
                <span>Confirm password</span>
                    <input type="text" name='register[confirmPassword]'
                    ><br><br>
                <span>Information</span>
                    <textarea name="register[information]"
                     id="information" cols="20" rows="3"><?= getValue('information')?></textarea><br><br>
                <input type="checkbox" name="terms" id="terms" onclick = 'displayOtherInfo()'> Hereby, I accept Terms & Condition 
                
            </div>
            <div class="button" id="btn">
            <input type="submit" value="Register" name="submit" id="submit"
                class="btn btn-primary">
            </div>
        </form> 


    </div>
    
</body>
</html>