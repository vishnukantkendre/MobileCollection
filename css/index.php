
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          
            <?php  
        // servername => localhost
        // username => root
        // password => empty
        // database name => contact
            
        //mysqli connect() Function:opens a new connection to the MySQL server.
            //mysqli_connect(host, username, password, dbname, port, socket)
            
        $conn = mysqli_connect("localhost", "root", "contact");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());//connect_error() Function:Return the error description from the last connection error, if any
        }
         
        // Taking all 2 values from the form data(input)
        if($_POST['submit'])
        {
        $username =  $_REQUEST['username'];//$_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
        $mobile = $_REQUEST['mobile'];
        $email = $_REQUEST['email'];
        $suggestion = $_REQUEST['suggestion'];
       
        // Performing insert query execution
        // here our table name is IT
        $sql = "INSERT INTO feedback  VALUES ('$username','$mobile','$email','$suggestion')";
        //The INSERT INTO statement is used to insert new records in a table.
           /* INSERT INTO table_name (column1, column2, column3, ...)
            VALUES (value1, value2, value3, ...); 
or  
            INSERT INTO table_name VALUES (value1, value2, value3, ...);            */
         
        mysqli_query($conn, $sql);
            header('location: index.html');
        }
        // Close connection
        mysqli_close($conn);
        ?>
        
    </body>
</html>
