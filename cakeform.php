<html>
    <head>
        <Title>
            Cake Form
        </Title>
        <link href="cakeform.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<form action="actionpage.php" method="get">
    <div id="wrap" method="post">
        <div>
            <fieldset><legend><h2>Make Your Own Cake!</h2></legend>
            <div class="cont_order" method="get">
                <div class="field_container" method="get">
                    <label> Size for the Cake: </label><br>
                    <input type="radio" name="SelectedCake" value="Round6"> Round Cake 6" - serves 8 people <br>
                    <input type="radio" name="SelectedCake" value="Round8"> Round Cake 8" - serves 12 people <br>
                    <input type="radio" name="SelectedCake" value="Round10"> Round Cake 10" - serves 16 people <br>
                    <input type="radio" name="SelectedCake" value="Round12"> Round Cake 12" - serves 30 people <br>
                </div>

                <div class="field_flavor" method="get">
                    <br><label> Select a Cake Flavor:</label><br>
                    <select name="CakeFlavor">
                    <option value="Flavor" selected="selected"> Select Flavor</option>
                    <option value="Carrot"> Carrot</option>
                    <option value="Chocolate"> Chocolate</option>
                    <option value="Banana"> Banana </option>
                    <option value="Red Velvet"> Red Velvet</option>
                    <option value="Strawberry"> Strawberry</option>
                    <option value="Vanilla">Vanilla</option>
                    <option value="Combo">Combo</option>
                    </select>
                </div>

                <div class="field_fillings" method="get">
                    <br><label>Select Fillings:</label><br>
                    <label> <input type="checkbox" value="Cream" name='Filling'/> Cream</label><br>
                    <label> <input type="checkbox" value="Fudge" name='Filling'/> Fudge</label><br>
                    <label> <input type="checkbox" value="Ganache" name='Filling'/> Ganache</label><br>
                    <label> <input type="checkbox" value="Hazelnut" name='Filling'/> Hazelnut</label><br>
                    <label> <input type="checkbox" value="Mousse" name='Filling'/> Mousse</label><br>
                    <label> <input type="checkbox" value="Pudding" name='Filling'/> Pudding</label><br>
                </div>
                </fieldset>
            </div>
            <fieldset><legend><h2>Contact Details</h2></legend>
            <div class=cont_contacts method="get">
                <label for='name'> Name</label><br>
                    <input type="text" id="name" name='name'/><br>
                <label for='address'> <br>Address</label><br>
                    <input type="text" id="address" name='address'/><br>
                <label for='phonenumber'><br>Phone Number</label><br>
                    <input type="text" id="phonenumber" name='phonenumber'/><br>
            </div>
            </fieldset>
            <div class="button_main">
                <br><input type="submit" class="button" value="Submit"><br><br>
            </div>         
        </div>
    </div>
</form>

</body>
</html>