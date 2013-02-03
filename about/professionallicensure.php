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
            <div id="licensemap">
                <img src="../images/licensemap.gif" alt="" class="photo" usemap="#map">
                <div id="co" class="stateoverlay"><strong>Colorado</strong><br />Professional Engineers</div>
                <div id="ct" class="stateoverlay"><strong>Connecticut</strong><br />Professional Engineers</div>
                <div id="dc" class="stateoverlay"><strong>District of Columbia</strong><br />Professional Engineers</div>
                <div id="de" class="stateoverlay"><strong>Delaware</strong><br />Professional Engineers</div>
                <div id="ma" class="stateoverlay"><strong>Massachusetts</strong><br />Professional Engineers</div>
                <div id="md" class="stateoverlay"><strong>Maryland</strong><br />Professional Engineers</div>
                <div id="nc" class="stateoverlay"><strong>North Carolina</strong><br />Professional Engineers</div>
                <div id="nj" class="stateoverlay"><strong>New Jersey</strong><br />Professional Engineers<br />Professional Planners</div>
                <div id="ny" class="stateoverlay"><strong>New York</strong><br />Professional Engineers</div>
                <div id="pa" class="stateoverlay"><strong>Pennsylvania</strong><br />Professional Engineers</div>
            </div>
            <map name="map">
              <area shape="poly" coords="185,173,179,232,264,235,266,176,187,171" href="#" data-id="co" class="state">
              <area shape="poly" coords="477,254,492,253,510,243,537,245,558,256,567,253,578,236,583,220,592,211,583,207,586,199,509,218,502,229,477,249" href="#" data-id="nc" class="state">
              <area shape="poly" coords="504,135,515,169,563,155,576,151,570,142,573,128,565,123,559,119,508,135,505,127,498,139" href="#" data-id="pa" class="state">
              <area shape="poly" coords="504,128,514,121,510,113,523,110,537,99,542,96,541,90,539,84,543,78,552,64,567,58,572,69,575,79,583,95,585,111,589,125,602,122,611,120,597,134,589,136,575,130,561,120,512,136" href="#" data-id="ny" class="state">
              <area shape="poly" coords="585,112,607,105,616,111,631,106,631,86,621,82,610,96,612,88,606,89,582,99,587,116" href="#" data-id="ma" class="state">
              <area shape="poly" coords="590,125,611,116,605,105,585,111,592,127" href="#" data-id="ct" class="state">
              <area shape="poly" coords="577,156,583,164,588,159,602,156,603,139,586,144,582,134,572,128,568,140,575,151,571,159" href="#" data-id="nj" class="state">
              <area shape="poly" coords="524,166,530,173,539,166,548,166,555,172,559,183,572,185,586,180,598,185,607,184,608,177,586,173,578,174,570,154,526,166" href="#" data-id="md" class="state">
              <area shape="circle" coords="557,179,8" href="#" data-id="dc" class="state">
              <area shape="poly" coords="569,155,577,174,593,174,606,163,597,159,581,164,574,158" href="#" data-id="de" class="state">
            </map>
        </article>
    </section>
    <?php include('../includes/footer.php'); ?>
</body>
</html>