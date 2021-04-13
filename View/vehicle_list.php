<?php 
    include('header.php'); 
?>
<form  action="." method="POST">

    <select name='make_id'>
        <option value="">View All Makes</option>
        <?php foreach ($makes as $make) : ?>
            <option value=<?php echo $make['ID']; ?>><?php echo $make['Make']; ?></option>
        <?php endforeach; ?>
    </select>

    <select name='class_id'>
        <option value="">View All Classes</option>
        <?php foreach ($classes as $class) : ?>
            <option value=<?php echo $class['ID']; ?>><?php echo $class['Class']; ?></option>
        <?php endforeach; ?>
    </select>

    <select name='type_id'>
        <option value="">View All Types</option>
        <?php foreach ($types as $type) : ?>
            <option value=<?php echo $type['ID']; ?>><?php echo $type['Type']; ?></option>
        <?php endforeach; ?>
    </select>



    <p>Sort By: </p>
    <input type="radio" id="sort_price" name="sort_by" value="Price" <?php if($sort_by !== 'Year') {?>checked <?php } ?>>
    <label for="sort_price">Price</label>
    <input type="radio" id='sort_year' name='sort_by' value='Year' <?php if($sort_by === 'Year') {?>checked <?php } ?>>
    <label for="sort_year">Year</label>
    <button type="submit">Submit</button>

</form>    
<section >
    <?php if(!empty($results)) { ?>
        <section>
            <table>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($results as $result) : ?>
                <tr>
                    <td><?php echo $result['Year']; ?></td>
                    <td><?php echo $result['Make']; ?></td>
                    <td><?php echo $result['Model']; ?></td>
                    <td><?php echo $result['Type']; ?></td>
                    <td><?php echo $result['Class']; ?></td>
                    <td><?php echo $result['Price']; ?></td>
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <section>                    
    <?php } else { ?>
        <p>No to do list items exist yet.</p>
    <?php } ?>    
</section>

 