<?php   
    $mysqli=new mysqli("localhost","110403541","az98198506","test");
    if($mysqli->connect_error){
        echo "error";
    }
    $sql="SELECT id,name,score FROM exam WHERE id=?";
    $smt=$mysqli->prepare($sql);
    $smt->bind_param("s",$_GET["q"]);
    $smt->execute();
    $smt->bind_result($id,$name,$score);
    $smt->fetch();
    $smt->close();
    // echo "<table>";
    // echo "<tr>";
    // echo "<th>id</th>";
    // echo "<td>".$id."</td>";
    // echo "<th>name</th>";
    // echo "<td>".$name."</td>";
    // echo "<th>score</th>";
    // if($score<60){
    //     echo "<td><span style=\"color:red;\">".$score."</span></td>";
    // }
    // else{
    //     echo "<td>".$score."</td>";
    // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>hi</title>
        <link rel="stylesheet" href="bitnami.css">
    </head>
    <body>
        <table>
            <tr>
                <td>id<td>
                <td>
                    <?php echo $id; ?>
                </td>
                            
                <td>name<td>
                <td>
                    <?php echo $name; ?>
                </td>

                <td>score<td>
                <td>
                    <?php echo $score; ?>
                </td>
            </tr>
        </table>
    </body>
</html>