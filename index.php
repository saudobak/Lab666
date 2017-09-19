<?php
    require_once('database.php');

    // Get name for current category
    $query = "SELECT firstName, lastName FROM customers order by lastName;";
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
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo $customer['firstName']; ?></td>
                    <td><?php echo $customer['lastName']; ?></td>
                    
                    
                </tr>
                <?php endforeach; ?>
            </table>
            </br>
            <table>
                <tr>
                    <th>Full Name</th>
                </tr>
                <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php 
                    $firstName =$customer['firstName'];
                    $lastName =$customer['lastName']; 
                    $fullName = $firstName.$lastName;
                    echo $fullName?></td>
                    
                    
                </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>

 <!-- shared footer information comes from include file -->
        <p><?php include 'footer.php'; ?></p>
   
