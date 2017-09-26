<?php
    require_once('database.php');

    // Get customers
    $query = "SELECT firstName, lastName FROM customers order by lastName;";
    //result set
    $customers = $db->query($query);
?> 
<!-- header information comes from include file -->
    <p><?php include 'header.php'; ?></p>

    <div id="header">
        <h1>Customer Relations</h1>
    </div>

    <div id="main">

        <h1>Customer List</h1>

        <div id="content">
            <!-- display a list of customers -->
         
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Full Name</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo $customer['firstName']; ?></td>
                    <td><?php echo $customer['lastName']; ?></td>
                    <td><?php 
                    $firstName =$customer['firstName'];
                    $lastName =$customer['lastName']; 
                    $fullName = $firstName." ".$lastName;
                    echo $fullName?></td>
                </tr>
                <!-- result set is available -->
                <tr>
                    <td><?php 
                    $firstName =$customer['firstName'];
                    $lastName =$customer['lastName']; 
                    $fullName = $firstName." ".$lastName;
                    echo $fullName?></td>
                    
                    
                </tr>
                <?php endforeach; ?>
            </table>
            </br>
            <table>
                <tr>
                    <th>Full Name</th>
                </tr>
                <!-- result set is NOT available -->
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php 
                    $firstName =$customer['firstName'];
                    $lastName =$customer['lastName']; 
                    $fullName = $firstName.$lastName;
                    echo $firstName?></td>
                    
                    
                </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>

 <!-- shared footer information comes from include file -->
        <p><?php include 'footer.php'; ?></p>
   
