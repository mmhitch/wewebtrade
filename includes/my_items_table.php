<table border='1px' cellpadding='5px' cellspacing='5px'>
        <tr>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Year</th>
            <th>Brand Name</th>
            <th>Model</th>
            <th>Quantity</th>
            <th>Value</th>
            <th>Add Expiration</th>
            <th>Description</th>
            <th>Photograph</th>
        </tr>
        <?php
                include 'includes/arrays.php';
                //print_r($my_items);
                echo '<tr>';
                
                        
                        echo '<td>' . $my_items['0'] . '</td>';
                        echo '<td>' . $my_items['1'] . '</td>';
                        echo '<td>' . $my_items['2'] . '</td>';
                        echo '<td>' . $my_items['3'] . '</td>';
                        echo '<td>' . $my_items['4'] . '</td>';
                        echo '<td>' . $my_items['5'] . '</td>';
                        echo '<td>' . $my_items['6'] . '</td>';
                        echo '<td>' . $my_items['7'] . '</td>';
                        echo '<td>' . $my_items['8'] . '</td>';
                        echo '<td>' . $my_items['9'] . '</td>';
                        
                        //foreach ($my_items as $key => $item) {
                        //         //explode(',',$item);
                        //         
                        //         echo $my_items['caregory'];
                        //         echo $key['sub_caregory'];
                        //         echo $item['year'];
                        //         echo $item['brand'];
                                 
                                 
                                 
                        //echo '<tr>';
                        //echo '<td>' . $item['caregory'] . '</td>';
                        //echo '<td>' . $item['sub_caregory'] . '</td>';
                        //echo '<td>' . $item['year'] . '</td>';
                        //echo '<td>' . $item['brand'] . '</td>';
                        //echo '<td>' . $item['model'] . '</td>';
                        //echo '<td>' . $item['quantity'] . '</td>';
                        //echo '<td>' . $item['value'] . '</td>';
                        //echo '<td>' . $item['description'] . '</td>';
                        //echo '<td>' . $item['photo'] . '</td>';
                        //echo '</tr>';
                        
                        
              
                echo '</tr>';
                
                echo '<tr>';
                        echo '<td>' . $my_items['0'] . '</td>';
                        echo '<td>' . $my_items['1'] . '</td>';
                        echo '<td>' . $my_items['2'] . '</td>';
                        echo '<td>' . $my_items['3'] . '</td>';
                        echo '<td>' . $my_items['4'] . '</td>';
                        echo '<td>' . $my_items['5'] . '</td>';
                        echo '<td>' . $my_items['6'] . '</td>';
                        echo '<td>' . $my_items['7'] . '</td>';
                        echo '<td>' . $my_items['8'] . '</td>';
                        echo '<td>' . $my_items['9'] . '</td>';
                echo '<tr>';

        ?>
        <tr>
            <td>Motorcycle</td>
            <td>Off Road</td>
            <td>2001</td>
            <td>Kawasaki</td>
            <td>KX 250</td>
            <td>1</td>
            <td>$1999.00</td>
            <td>2013-03-08</td>
            <td>2 Stroke motocross bike</td>
            <td><a href='#'>Photo</a></td>
            

        </tr>
    </table>