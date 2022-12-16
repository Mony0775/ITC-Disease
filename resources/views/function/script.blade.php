
<script type="text/javascript">
    $(document).ready(function(){
        $('.addToFavBtn').click(function (e) { 
            e.preventDefault();
            var product_id = $(this).closet('.product_data').find('.productid').val();
            alert(product_id);
        });
    });
</script>
