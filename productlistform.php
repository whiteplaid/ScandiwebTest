<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/a.js"></script>
<form class='checkbox' id='checkbox' action='checkbox' method='POST'>
   
    <table>
        <tr class = 'p34'>
        <td class="b"><button type='button' class='button' id="ADD" name="ADD" onclick="window.location.href='/add-product'">ADD</button></td>
        <td class="b"><button type='submit' class='button' id='delete-product-btn' name='btn-delete' value='MASS DELETE'>MASS DELETE</button></td>
        </tr>
    </table>
        <table class='pr'>
            <tr class='parent-flex'>
            <?php while ($object = $result->fetch_object()){
                echo "<td><div class='card'>";
                    echo "<input type='checkbox' id='dcheck' class='delete-checkbox' value='$object->sku' name='sku[]'>";echo"</input>";   
                        echo "<ul class='list-unstyled'>";
                            echo "<li>"; echo $object->sku; echo "</li>";
                            echo "<li>"; echo $object->name; echo"</li>";
                            echo "<li>"; echo $object->price." $"; echo"</li>";
                            echo "<li>"; echo $object->size_type.": ".$object->size." ".$object->unit; echo"</li>";
                        echo "</ul>";
                        echo "</div></td>";
                        
            }
            echo "</tr>";
            ?>
        </table>
</form>