<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php  
                 $sql = "SELECT * FROM meniu";// meniu -> menu
                 $result = $conn->query($sql);
                
                while($meniu = mysqli_fetch_array($result)) {
                    $pavadinimas = $meniu["pavadinimas"];
                    $nuoroda = $meniu["nuoroda"];
                    $target = $meniu["target"];
                    $alt = $meniu["alt"];    


                    echo "<li class='nav-item'>";
                        echo "<a class='nav-link' href='$nuoroda' target='$target' alt='$alt' >$pavadinimas</a> ";
                    echo "</li>";
                }

                ?>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
</nav>