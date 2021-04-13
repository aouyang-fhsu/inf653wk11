 
<section>
    <?php if(!empty($types)) { ?>
        <section>
            <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php foreach ($types as $type) : ?>
                <tr>
                    <td><?php echo $type['Type']; ?></td>
                    <td> 
                        <form action="." method="POST">
                            <input type="hidden" name="type_id" value=<?php echo $type['ID'] ?>>
                            <input type='hidden' name='action' value='delete_types'>
                            <button type="submit">Delete</button>
                    </td>
                    </form></td>
                </tr>
                <?php endforeach; ?>
            </table>
        <section>                    
    <?php } else { ?>
        <p>No to do list items exist yet.</p>
    <?php } ?>    
</section>

<section>
    <h2>Add Type</h2>
    <form action="." method="POST">
        <div>
            <label for='add_type'>Type:</label>
            <input id='add_type' type='text' name='type_name' maxlength='30'>
            <input type='hidden' name="action" value='add_types'>
            <button type="submit">Add Type</button>
        </div>
    </form>    
</section>

 