<script>
    $(document).ready(function(){
        stampNum = localStorage.getItem("storage");
        console.log(stampNum);
        $(".list").append("<li id='" + stampNum + "'>" + "Started <?php echo $_POST['projectName']; ?> at <?php echo date('h:i:s A'); ?>" + "</li>");
        stampNum++;
        localStorage.setItem("storage",stampNum);
        console.log(stampNum);
    });
</script>