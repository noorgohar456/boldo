
        <nav class ="navbar navbar-expand-lg navbar-dark bg-dark" >
            <div class="collapse navbar-collapse" id="navbarColor02">
                    
                <a class="navbar-brand" href="index.php">BolDo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
 
                
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="posts.php">New Posts</a>
                        </li>
                        <?php
                        if(isset($_SESSION['logged'])) 
                        if($_SESSION['logged']==true){
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link'  href='create_post.php'>Create Post</a>";
                        echo "</li>";
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link'  href='myposts.php'>My Publications</a>";
                        echo "</li>";
                        echo "<li class='nav-item'>";
                        echo "<a class='nav-link'  href='logout.php'>Logout</a>";
                        echo "</li>";
                        
                        }
                        ?>
                                   
                    </ul>
                    </div>
            </div>
        </nav>
   
