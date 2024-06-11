<?php include("header.php"); ?>
<div class="wrap">
    <div class="grid-container">
        <div class="grid-con" style="height: auto;">
            <div class="grid-block">    
                <div class="index-intro-text" style="direction:ltr">
                    <h1 style="font-size: 28px;">Director's Message</h1><br>
                    <div>
                        <p id="message">
                            <img src="images/fac/director.jpeg" style="float:right;margin:10px; width:300px; padding: 10px 10px 10px 10px; border-radius: 50%;">
                            IIT Patna is trying its best to serve the nation by all possible means. In this respect, we aim to provide the industry with a technically high-quality employee pool that lends itself to the growth of various reputed organizations and contributes to our nation-building process. IIT Patna seeks to improve upon this goal every year, the latest developments being the addition of new courses and skill sets which has been designed keeping in view of the market demands and mandate of NEP,2020.
                        </p>
                        <span class="read-more">
                            What is also encouraging is the students’ participation in various technological, innovative ventures, and socio-cultural events in national and international events, considering the importance of these experiences in shaping up their personalities as individuals. IIT Patna invites the recruiters to the Campus Recruitment Programme and gives this batch of graduating students an opportunity to prove themselves and add value to the organisations they join. We hope this will be a pleasant experience for the recruiters and a step forward in improving upon the past relations and building up new ones. I welcome you to become a part of our story and to form a long-lasting association with the institute. Prof. T.N. Singh, Director, Indian Institute of Technology Patna
                        </span>
                        <span class="read-more-btn" onclick="toggleReadMore()">... read more</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-con-2">
            <?php include("panel.php"); ?>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>

<script>
    function toggleReadMore() {
        const readMoreText = document.querySelector('.read-more');
        const readMoreBtn = document.querySelector('.read-more-btn');
        if (readMoreText.style.display === "none") {
            readMoreText.style.display = "inline";
            readMoreBtn.style.display = "none";
        } else {
            readMoreText.style.display = "none";
            readMoreBtn.style.display = "inline";
        }
    }

    document.addEventListener("DOMContentLoaded", function() {
        const message = document.getElementById('message');
        const fullText = message.innerHTML;
        const charLimit = 300; // Increase the limit to 300 characters

        if (fullText.length > charLimit) {
            message.innerHTML = fullText.substring(0, charLimit);
            document.querySelector('.read-more').style.display = "inline";
        } else {
            document.querySelector('.read-more-btn').style.display = "none";
        }
    });
</script>
