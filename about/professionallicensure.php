<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>InSite: Professional Licensure</title>
    <?php include('../includes/meta.php'); ?>
</head>
<body ontouchmove="BlockMove(event);">
    <?php include('../includes/header.php'); ?>
    <section>
        <?php include('../includes/menu.php'); ?>
        <article>
            <h1>Professional Licensure</h1>
            <p>InSite Engineering, LLC staff of licensed professionals include:</p>
            <ul>
                <li>New Jersey Professional Planners</li>
                <li>New Jersey Professional Engineers</li>
                <li>Pennsylvania Professional Engineers</li>
                <li>New York – Professional Engineers</li>
                <li>Connecticut – Professional Engineers</li>
                <li>Delaware – Professional Engineers</li>
                <li>Maryland – Professional Engineers</li>
                <li>Colorado – Professional Engineers</li>
                <li>District of Columbia – Professional Engineers</li>
                <li>North Carolina – Professional Engineers</li>
                <li>Massachusettes – Professional Engineers</li>
            </ul>
            <div id="licensemap">
                <img src="../images/licensemap.gif" alt="" class="photo" usemap="#map">
                <div id="colorado" class="stateoverlay">Colorado</div>
            </div>
            <map name="map">
              <area shape="poly" coords="202,205,197,273,290,279,290,208,204,203" href="#" data-id="co" class="state">
              <area shape="poly" coords="528,295,543,294,561,284,588,286,609,297,618,294,629,277,634,261,643,252,634,248,637,240,560,259,553,270,528,290" href="#" data-id="nc" class="state">
              <area shape="poly" coords="554,161,563,202,622,184,632,173,626,164,629,150,621,145,615,141,564,157,561,149,554,161" href="#" data-id="pa" class="state">
              <area shape="poly" coords="558,148,568,141,564,133,577,130,591,119,596,116,595,110,593,104,597,98,606,84,621,78,626,89,629,99,637,115,639,131,643,145,656,142,665,140,651,154,643,156,629,150,615,140,566,156" href="#" data-id="ny" class="state">
              <area shape="poly" coords="638,130,660,123,669,129,684,124,684,104,674,100,663,114,665,106,659,107,635,117,640,134" href="#" data-id="ma" class="state">
              <area shape="poly" coords="644,144,665,135,659,124,639,130,646,146" href="#" data-id="ct" class="state">
              <area shape="poly" coords="625,182,638,194,645,180,659,177,659,166,643,165,639,155,629,149,625,161,632,172,628,180" href="#" data-id="nj" class="state">
              <area shape="poly" coords="575,197,581,204,590,197,599,197,606,203,610,214,623,216,637,211,649,216,658,215,659,208,637,204,629,205,621,185,577,197" href="#" data-id="md" class="state">
              <area shape="circle" coords="612,214,8" href="#" data-id="dc" class="state">
              <area shape="poly" coords="557,152,565,171,581,171,594,160,585,156,569,161,562,155" href="#" data-id="de" class="state">
            </map>
        </article>
    </section>
    <?php include('../includes/footer.php'); ?>
</body>
</html>