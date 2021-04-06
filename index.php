<?php  
    function myFirstFunction($myname,$mycolor)  
    {
        
        echo "<p> Hi, my name is $myname and my favorite color is $mycolor.</p>" ;
    }

myFirstFunction('arjun','red');
myFirstFunction('jane','blue');

?>
 

 <h1><?php bloginfo('name'); ?></h1>
 <p><?php  bloginfo('description') ;?></p> 


<?php  
    $name = array('Arjun','Malik');
    $count=1;
    while($count<100){
        echo "<li>$count</li>";
        $count++;

    }
?>
<p>My name is <?php echo $name[0]?></p>

