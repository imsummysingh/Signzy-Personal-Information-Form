<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <style>
        .btn{
            padding-top=12px;
            margin-top=12px;
        }
    </style>

</head>
<body class="bg-light">
    <div class="container">
        <form action="" method="post">

        <?php
            //for converting php into pdf
            require('fpdf.php');

            $name = $_REQUEST['name'];

            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn,'signzy');

            class PDF extends FPDF
            {
                function Header()
                {
                    $this->SetFont('Arial','B',12);
                    $this->Cell(12);
                    $this->Ln(5);
                    $this->Cell(100,10,'Personal Information',0,1);
                    $this->SetFillColor(108,180,255);
                    $this->SetDrawColor(50,50,100);   
                    $this->cell(40,5,'Name',1,0,'',true);
                    $this->cell(25,5,'Username',1,0,'',true);
                    $this->cell(65,5,'Phone No',1,0,'',true);
                    $this->Cell(65,5,'Email',1,0,'',true);
                    $this->Cell(60,5,'Address',1,1,'',true); 

                }

                function Footer()
                {
                    $this->SetY(-15);
                    $this->SetFont('Arial','B',12);

                }
            }
            $pdf=new PDF('p','mm','A4');
            $pdf->AliasNbPages('{pages}');
            $pdf->AddPage(); 
            $this->SetFont('Arial','B',12);
            $this->SetDrawColor(50,50,100);

            $query=mysqli_query($conn,"SELECT `name`, `username`, `phone_no`, `email`, `address` FROM `personal_information` WHERE name='".$name."");
            
            while($data=mysqli_fetch_array($query))
            {
                $pdf->cell(40,5,$data['name'],1,0);
                $pdf->cell(25,5,$data['username'],1,0);
                $pdf->cell(65,5,$data['phone_no'],1,0);
                $pdf->Cell(65,5,$data['email'],1,0);
                $pdf->Cell(60,5,$data['address'],1,1); 
            }
            $pdf->Output();
        ?>

        <div class="form-group">
            <label>Search By Name:<label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter the Name" autocomplete="off" required>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Download the Data</button>

        <button class="btn btn-lg btn-primary btn-block" onclick="location.href='index.php';" type="submit">Back to Home</button>
        
        </form>
    </div>

</body>
</html>

