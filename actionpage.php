<html>
<header>
    <title>
        Oders Summary
    </title>
    <link href="summary.css" rel="stylesheet" type="text/css" />
</header>
<body>
<fieldset><legend><h1> Orders Summary</h1></legend>
    <div id="summary">
            <h3>Customer Name: <br><?php echo $_GET["name"]; ?><br></h3>
            <h3>Customer Address: <br><?php echo $_GET["address"]; ?><br></h3>
            <h3>Customer Contact Number: <br><?php echo $_GET["phonenumber"]; ?><br></h3>
            <h3>Cake Size: <br><?php echo $_GET["SelectedCake"]; ?><br></h3>
            <h3>Cake Flavor: <br><?php echo $_GET["CakeFlavor"]; ?><br></h3>
            <h3>Cake Filling: <br><?php echo $_GET["Filling"]; ?><br></h3>
    </div>
</fieldset>
</body>
</html> 