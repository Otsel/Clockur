<script>
    $(document).ready(function(){
        stampNum = localStorage.getItem("storage");
        projectName = localStorage.getItem("projectName");
        console.log(stampNum);
        console.log(projectName);
        $(".list").append("<li id=" + stampNum + ">" + "Stopped " + projectName + " at <?php $date = new DateTime("now", new DateTimeZone('America/New_York') ); echo $date->format('H:i:s A'); ?>" + "</li>");
        stampNum++;
        localStorage.setItem("storage",stampNum);
        console.log(stampNum);
    });
</script>