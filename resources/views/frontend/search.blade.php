<!doctype html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search Here</title>
</head>
<body>

    <div class="container">

            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        
                                <?php 
                                    $con = mysqli_connect("localhost","root","","project");

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM blogs WHERE name LIKE '%T%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                
                                                    <h1><?= $items['name']; ?></h1>
                                                    <h3><?= $items['description']; ?></h3>
                                                    
                                                
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                
                                                    <h1 colspan="4">No Record Found</h1>
                                                
                                            <?php
                                        }
                                    }
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>