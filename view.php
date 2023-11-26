
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <title>Document</title>
</head>
    <?php
        require_once('database.php');
        $dataIncomes = $database->readIncomes();
        $dataExpenses = $database->readExpenses();
    ?>
<body>
    <header>
        <?php
            include('./includes/global-nav.php');
        ?>
    </header>
    <main class="tables" >
        <section class="table-incomes" >
            <h2>INCOMES</h2>
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Description</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Option</th>
                        <th>Amount</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($dataIncomes)) { ?>
                        <tr>
                            <!-- <td><?php echo $row['input_id']; ?></td> -->
                            <td><?php echo $row['input_description']; ?></td>
                            <td><?php echo $row['input_date']; ?></td>
                            <td><?php echo $row['input_type']; ?></td>
                            <td><?php echo $row['input_option']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo $row['input_comment']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
            
        <section class="table-expenses" >
            <h2>EXPENSES</h2>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <!-- <th>ID</th> -->
                        <th>Description</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Option</th>
                        <th>Amount</th>
                        <th>Comment</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($dataExpenses)) { ?>
                        <tr>
                            <!-- <td><?php echo $row['input_id']; ?></td> -->
                            <td><?php echo $row['input_description']; ?></td>
                            <td><?php echo $row['input_date']; ?></td>
                            <td><?php echo $row['input_type']; ?></td>
                            <td><?php echo $row['input_option']; ?></td>
                            <td><?php echo $row['amount']; ?></td>
                            <td><?php echo $row['input_comment']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
       
    </main>

    <footer>
        <?php
        include('./includes/footer-nav.php');
        ?>
    </footer>

    <script>
     
    </script>
    

</body>
</html>