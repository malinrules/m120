
<?php 
echo '<div style="padding: 10px;"';
echo '<form>';
echo '<div class="form-row">';
echo '<div class="col">';

echo '<div class="dropdown">';
echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
echo  'Dropdown button';
echo '</button>';
echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">';
echo   '<a class="dropdown-item" href="#">Action</a>';
echo   '<a class="dropdown-item" href="#">Another action</a>';
echo   '<a class="dropdown-item" href="#">Something else here</a>';
echo  '</div>';
echo '</div>';
echo '</div>';
echo '<div class="col">';
echo  '<input type="text" class="form-control" placeholder="Last name">';
echo' </div>';
echo '</div>';
echo '<button style="margin-top: 10px;" type="submit" class="btn btn-primary">Submit</button>';
echo '</form>';
echo '</div>';
?>