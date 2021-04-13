

<h1>Add Vehicle</h1>
<form action="." method="POST">
<input type='hidden' name='action' value='insert_vehicle'>
    <div>
        <label for='make_drop_down'>Make:</lable>
        <select id='make_drop_down' name='make_id'>
            <option value=''selected>Select a Make</option>
            <?php foreach($makes as $make) :?>
                <option value=<?php echo $make['ID']; ?>><?php echo $make['Make']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>            
        <label for='type_drop_down'>Type:</label>
        <select id='type_drop_down' name='type_id'>
            <option value=''selected>Select a Type</option>
            <?php foreach($types as $type) :?>
                <option value=<?php echo $type['ID']; ?>><?php echo $type['Type']; ?></option>
            <?php endforeach; ?>
        </select>            
    </div>
    <div>        
        <label for='class_drop_down'>Class:</label>
        <select id='class_drop_down' name='class_id'>
            <option value=''selected>Select a Class</option>
            <?php foreach($classes as $class) :?>
                <option value=<?php echo $class['ID']; ?>><?php echo $class['Class']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>            
    <label for='year'>Year:</label>
    <input id='year' type='number' name='year' min='1900' max=2100?>

    <label for='model'>Model:</label>
    <input id='model' type='text' name='model' maxlength='30'?>

    <label for='price'>Price:</label>
    <input id='price' type='number' name='price' min='0' max=9999999?>
    <button type="submit">Submit</button>        
</form>
