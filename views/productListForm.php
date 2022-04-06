<script src="https://code.jquery.com/jquery-latest.js"></script>
<script src="js/checkbox.js"></script>
<form class='checkbox' id='checkbox' action='/scripts/checkbox' method='POST'>

    <table>
        <tr class='p34'>
            <td class="b">
                <button type='button' class='button' id="ADD" name="ADD" onclick="window.location.href='/add-product'">
                    ADD
                </button>
            </td>
            <td class="b">
                <button type='submit' class='button' id='delete-product-btn' name='btn-delete' value='MASS DELETE'>MASS
                    DELETE
                </button>
            </td>
        </tr>
    </table>
    <table class='pr'>
        <tr class='parent-flex'>
            <?php include dirname(__DIR__) . '/scripts/db_flush.php' ?>
        </tr>
    </table>
</form>