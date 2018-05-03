<?php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
?>

<html>
    <head>
        <!-- example for jquery.ui.combobox.ajax.js -->
        <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
        <script src="../../assets/js/jquery.min.js"></script>
        <script src="../../assets/js/jquery-ui.min.js"></script>
        <script src="../../assets/js/jquery.ui.combobox.ajax.min.js"></script>
        <script src="../../assets/js/jquery.ui.window.framework.min.js"></script>

        <style>
            .ui-button { margin-left: -1px; }
            .ui-button-icon-only .ui-button-text { padding: 0.1em; } 
            .ui-menu .ui-menu-item { margin-top: 6px; }
            .ui-autocomplete-input { margin: 0; padding: 0.27em 0 0.5em 0.4em; }
            .ui-autocomplete-input {overflow-y: hidden; overflow-x: hidden; width:500px;} 
        </style>
    </head>

    <body>
        <?php
            echo   "<form action='./' id='searchForm' method='post'>
                        <input type='hidden' name='item_id' id='item_id'>
                        Color Selector: 
                        <select id='items' name='items' size='25'>
                            <option selected='selected'></option>
                        </select>
                    </form>";

            if (isset($_POST["item_id"]) && !empty($_POST["item_id"])) {
                echo "The id of the color you selected was " . $_POST['item_id'];
            } else {  
                echo "No color has been selected yet.";
            }        
        ?>

        <script>
            $( document ).ready(function() {
                initializeComboBox('data.php', 'getTestItems', 'item_id', 'Select or type a color..');
                $( "#items" ).combobox();
            });
        </script>
    </body>
</html>