<?php
    function link_parse($json_content){
        if($json_content != null){
            $json_prase = json_decode($json_content,true);
            foreach ($json_prase as $key => $value){
                echo '<div class="gd_block">
                    <a href="' . $value["link"] . '">
                        <div class="gd_box">';
                if($value["img"] != null){
                    echo '<img alt="' . $value["name"] . '" src="' . $value["img"] . '" width="50" height="50" style="margin-bottom: 10px">';
                }
                echo '<h3>' . $value["name"] . '</h3>
                            <br>
                            <p>点击进入</p>
                        </div>
                    </a>
                </div>';
            }
        }
    }
?>