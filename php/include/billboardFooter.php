<script>
$('#fileupload').change(function(){
    var sel = $(this).val();
    $('.files').append('<p>' + sel + '</p>');
});
</script>
