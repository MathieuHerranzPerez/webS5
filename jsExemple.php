<?php
    require_once("./core/util.php");
?>
<!doctype html>
<?php
    displayHeader("Mathieu HP Accueil");
?>
<body onload="readStyleCookie()">
<?php
    displayMenu("index");
?>
    <div class="container">
        <button id="btnFadeIn">fadeIn()</button>
        <button id="btnFadeOut">fadeOut()</button>
        <button id="btnSlideDown">slideDown()</button>
        <button id="btnSlideUp">slideUp()</button>
        <button id="btnToggle">toggle()</button>
        <button id="btnAnimate">animate()</button>
        <p id="paragraphe">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
            consectetur enim vitae nulla tincidunt, vitae aliquet est auctor.
            Nam blandit nunc a lobortis sodales. Etiam efficitur sagittis felis,
            quis euismod nibh lacinia at. Nam faucibus turpis eget luctus
            imperdiet. In faucibus condimentum malesuada. Integer sit amet ultricies nulla,
            ut varius lectus. Nunc pulvinar feugiat mauris vehicula porta.
            Praesent eu mi sit amet nisi tristique gravida. Nullam id massa
            nec magna tincidunt lacinia. Nunc ac eleifend ex. Maecenas non cursus
            dolor, id hendrerit orci. Duis non elit non ipsum tincidunt egestas.
            Pellentesque nunc sem, congue eget enim ultrices, pellentesque blandit
            lorem. Etiam ac aliquet ex. Quisque eget magna pharetra, fringilla ligula
            non, sodales dolor. Maecenas diam eros, malesuada pharetra consequat vel,
            malesuada in nunc.
        </p>
        <div id="carre" style="background-color: orange; height: 100px; width: 100px;"></div>
    </div>

<?php
    displayFooter();
?>
<script>
    $('#btnFadeIn').click(function(){
        $('#paragraphe').fadeIn('slow');
    });
    $('#btnFadeOut').click(function(){
        $('#paragraphe').fadeOut('slow');
    });
    $('#btnSlideDown').click(function(){
        $('#paragraphe').slideDown('slow');
    });
    $('#btnSlideUp').click(function(){
        $('#paragraphe').slideUp('slow');
    });
    $('#btnToggle').click(function(){
        $('#paragraphe').toggle('slow');
    });
    $('#btnAnimate').click(function(){
        $('#carre').animate({
            height: '300px',
            opacity: '0.4'}, "slow");
        $('#carre').animate({
            width: '300px',
            opacity: '0.8'}, "slow");
        $('#carre').animate({
            height: '100px',
            opacity: '0.4'}, "slow");
        $('#carre').animate({
            width: '100%',
            opacity: '0.8'}, "slow");
        $('#carre').animate({
            left: '250px',
            height: '+=150px',
            width: '+=150px'}, "slow");
        $('#carre').animate({
            height: '100px',
            opacity: '1',
            width: '100px'}, "slow");
    });
</script>

</body>
</html>