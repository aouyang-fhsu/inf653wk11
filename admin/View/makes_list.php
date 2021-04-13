
<section>
    <?php if(!empty($makes)) { ?>
        <section>
            <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php foreach ($makes as $make) : ?>
                <tr>
                    <td><?php echo $make['Make']; ?></td>
                    <td> 
                        <form action="." method="POST">
                            <input type="hidden" name="make_id" value=<?php echo $make['ID'] ?>>
                            <input type='hidden' name="action" value='delete_makes'>
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        <section>                    
    <?php } else { ?>
        <p>No to do list items exist yet.</p>
    <?php } ?>    
</section>

<section>
    <h2>Add Make</h2>
    <form action="." method="POST">
        <label>Make:</label>
        <input type='text' name='makes_name' maxlength='30'>
        <input type='hidden' name="action" value='add_makes'>
        <button type="submit">Add Make</button>
    </form>    
</section>
      