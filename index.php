<?php
include_once ('header.php');
include_once ('post.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php for ($i=0;$i<10;$i++) {?>
            <div class="media">
                <div class="media-left media-top">
                    <img alt="" src="images/girl.jpg" class="media-object" style="width: 150px">
                    <p>
                        Author: Admin<br>
                        Created: 2020-11-10
                    </p>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><a href="">Title </a></h4>
                    sdfsd sdfsdf sdfsdf sdfsdf sdfsdf sdfsdfsdf sdfsdf sdfsdf sdfsd sdfsd sdfsdf
                    sdfsdfsdf sdfsdf sdfsdf sdfsdfs sdfsdf sdfsdf sdfsdfsd dsfsdf sdfsdf sdfsdff
                    sdfsdfsdf sdfsdf sdfsdf sdfsdfs sdfsdf sdfsdf sdfsdfsd dsfsdf sdfsdf sdfsdff
                    sdfsdfsdf sdfsdf sdfsdf sdfsdfs sdfsdf sdfsdf sdfsdfsd dsfsdf sdfsdf sdfsdff
                </div>

            </div>
            <?php } ?>
        </div>
    </div>

</div>
<style>
    }
    body{
        text-align: justify;
    }
    .media-left{
        float: left;
        margin: 0px 0px 50px 50px;
    }
</style>