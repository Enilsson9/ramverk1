

<h1>Validate IP address (JSON)</h1>

<div class="jumbotron">
    <p>
        <?php
        if (isset($_GET["ip"])) {
            echo json_encode($json, JSON_PRETTY_PRINT);
        }

        ?>
    </p>


    <form class="form-signin" method="get">
        <div class="form-group">
                <input class="form-control"  type="text" name="ip" placeholder="Your IP here" required>
        </div>
        <button class="btn btn-primary btn-lg btn-block"  type="submit">Validate</button>
    </form>

    <h4> Test routes </h4>

    <p>My place</p>
    <p><a href="?ip=186.151.62.176">json?ip=186.151.62.176</a></p>
    <p>Facebook</p>
    <p><a href="?ip=2a03:2880:2110:df07:face:b00c::1">json?ip=2a03:2880:2110:df07:face:b00c::1</a></p>
    <p>Random</p>
    <p><a href="?ip=4.2.2.2">json?ip=4.2.2.2</a></p>
</div>
