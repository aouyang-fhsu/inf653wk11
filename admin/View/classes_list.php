    
<section>
    <?php if(!empty($classes)) { ?>
        <section>
            <table>
                <tr>
                    <th>Name</th>
                </tr>
                <?php foreach ($classes as $class) : ?>
                <tr>
                    <td><?php echo $class['Class']; ?></td>
                    <td> 
                        <form action="." method="POST">
                            <input type="hidden" name="class_id" value=<?php echo $class['ID'] ?>>
                            <input type='hidden' name="action" value='delete_classes'>
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
    <h2>Add Class</h2>
    <form action="." method="POST">
        <div>
            <label for='add_class'>Class:</label>
            <input id='add_class' type='text' name='class_name' maxlength='30'>
            <input type='hidden' name="action" value='add_classes'>
            <button type="submit">Add Class</button>
        </div>
    </form>    
</section>

 