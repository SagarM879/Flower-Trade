<?php
                if(isset($_POST["log"]))
                {
                  session_destroy();
                
                }
                header('location:register.html');
  ?>