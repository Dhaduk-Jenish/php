<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <?php require_once "dataManagement.php";
        require_once 'databaseOfForm.php' ?>

    <style>
        span {
            width: 300px;
            display: inline-block;
        }
    </style>
</head>

<body>

    <p class="main">
        <form action="modifiedForm.php" method="POST">

            <div class="accountDetails" name="account[]">
               
                <h2>Account Details</h2>
                    
                <span>Prefix </span>
                    <?php    $prefix = ['Mr','Miss', 'Ms', 'Mrs', 'Dr']; ?>
                    <select name="account[prefix]">
                        <?php foreach($prefix as $prefixValue) : ?>
                        <option value="<?php echo $prefixValue; ?>" <?php
                                        if ($prefixValue == getValue('account' , 'prefix')) {
                                            echo 'selected';
                                        }
                                    ?>><?php echo $prefixValue; ?> </optiion>
                            <?php endforeach ?>
                    </select><br>
                <span>First Name </span>
                    <input type="text" name='account[firstName]'
                        value="<?php echo getValue('account' , 'firstName')?>"><br>
                <br>
                <span>Last Name </span>
                    <input type="text" name='account[lastName]'
                        value="<?php echo getValue('account' , 'lastName')?>"><br>
                <span>Birth Date</span>
                    <input type="date" name='account[birthDate]'
                        value="<?php echo getValue('account' , 'birthDate')?>"><br>
                <span>Phone Number </span>
                    <input type="text" name='account[phoneNumber]'
                        value="<?php echo getValue('account' , 'phoneNumber')?>"><br>
                <span>Email</span>
                    <input type="email" name='account[email]' value="<?php echo getValue('account' , 'email')?>"><br>
                <span>Password</span>
                    <input type="text" name='account[password]'
                        value="<?php echo getValue('account' , 'password')?>"><br>
                <span>Confirm password</span>
                    <input type="text" name='account[confirmPassword]'
                        value="<?php echo getValue('account' , 'confirmPassword')?>"><br>
            </div>

            <div class="addressInformation" name=address[]>
                
                <h2>Address Information</h2>
                <span>Address Line 1</span>
                    <input type="text" name='address[addressLine1]'
                        value="<?php echo getValue('address' , 'addressLine1')?>"><br>
                <span>Address Line 2</span>
                    <input type="text" name='address[addressLine2]'
                        value="<?php echo getValue('address' , 'addressLine2')?>"><br>
                <span>Company</span>
                    <input type="text" name='address[company]'
                        value="<?php echo getValue('address' , 'company')?>"><br>
                <span>City</span>
                    <input type="text" name='address[city]'
                        value="<?php echo getValue('address' , 'city')?>"><br>
                <span>State</span>
                    <input type="text" name='address[state]'
                        value="<?php echo getValue('address' , 'state')?>"><br>                                                
                <span>Country</span>
                    <?php $country = ['India','Sri-Lanka','China','Nepal']?>
                    <select name="address[country]">  
                        <?php foreach($country as $countryValue) : ?>
                        <option value="<?php echo $countryValue; ?>"
                                    <?php
                                        $select = ($countryValue == getValue('address' , 'country') )
                                                ? 'selected'
                                                : '';
                                        echo $select
                                        
                                    ?>
                                    ><?php echo $countryValue; ?> </optiion>
                            <?php endforeach ?>  

                    </select><br>
                <span>Postal Code</span>
                    <input type="text" name='address[postalCode]'
                        value="<?php echo getValue('address' , 'postalCode')?>"><br>   
                <input type="checkbox" name="otherInfo" id="otherInfo" onclick = 'displayOtherInfo()'>Other Information 

            </div>
            
            <div class="otherInformation" id="otherInformation" name="other[]" style='display:none'>
            
                <h2>Other Information</h2>
                <span>Describe YourSelf</span>
                    <textarea name="other[describeYourself]" id="describe" cols="20" rows="7" wrap="virtual">
                            <?php echo implode(getOther('other' , 'describeYourself'))?>
                    </textarea><br>
                <span>Profile Image : </span>
                    <input type="file" accept="image/*" name="other[profileImage]" id="profileImage" >

                <br>
                <span>Certificate Upload : </span>
                    <input type="file" accept=".pdf" name="other[certificate]" id="certificate"> <br>
                
                <span>How long have you been in business?</span>
                        <?php $business = ['UNDER 1 YEAR ','1-2 YEAR','2-5 YEAR','5-10 YEAR','OVER 10 YEAR'] ?>
                        <?php foreach($business as $businessValue) :    ?>
                            <?php $check = (array_intersect(getOther('other','business') , [$businessValue]) )
                             ? 'checked' : '';   
                                    ?>
                            <input type="radio" name="other[business]" 
                                        value="<?php echo $businessValue ?>" 
                                        <?php echo $check ?>
                            ><?php echo $businessValue ?>
                        <?php endforeach;  ?><br>
               
                <span>Number of unique clients you see each week?</span>
                    <?php $clients = ['1-5','6-10','11-15','15+']?>
                    <select name="other[clients]">  
                        <?php foreach($clients as $clientsValue) : ?>
                            <?php
                                $select = (array_intersect(getOther('other','clients') , [$clientsValue]) )
                                         ? 'selected' : '';
                                    ?>
                        <option value="<?php echo $clientsValue; ?>"
                                   <?php echo $select?>
                                    ><?php echo $clientsValue; ?> </optiion>
                            <?php endforeach ?>
                    </select><br>

                    <span>How do you like us to get in touch with you?</span>
                        <?php $getInTouch = ['Post', 'Email', 'SMS', 'Phone']; ?>        
                        <?php  foreach($getInTouch as $howInTouch) : 
                                $check = (array_intersect(getOther('other','getInTouch') , [$howInTouch]) ) ? 'checked' : '';  ?>
                            <input type="checkbox" name="other[getInTouch][]" value="<?php echo $howInTouch?>"
                                        <?php  echo $check ;?>>  <?php echo $howInTouch?>
                                        
                        <?php  endforeach  ?>  <br>
                    
                    <span>Hobbies ?</span>
                        <select name="other[hobbies][]" multiple >
                            <?php $hobbies = ['Listening to Music', 'Travelling', 'Sports', 'Blogging','Art']; ?>
                                <?php    foreach($hobbies as $hobbiesValue) :  
                                   $select = (array_intersect(getOther('other','hobbies') , [$hobbiesValue]) )? 'selected' : ''; ?>
                                    <option value="<?php echo $hobbiesValue?>" 
                                            <?php echo $select; ?>><?php echo $hobbiesValue?></option>
                            <?php  endforeach  ?>  
                        </select>
                    
            </div>





            <input type="submit" value="Submit" name='submit' onclick="checkValidation()">
        </form>
    </div>
    <script type="text/javascript" src="modifiedForm.js" ></script>
</body>

</html>