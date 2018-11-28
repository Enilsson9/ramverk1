

<h1>Get weather from IP (JSON)</h1>

<div class="jumbotron">
    <?php if (isset($_GET["ip"])) : ?>
        <?php if ($currentIp !== null) : ?>
        <pre>
            <?php
                $json = array(
                    "latitude" => $weather['latitude'],
                    "longitude" => $weather['longitude'],
                    "timezone" => $weather['timezone'],
                    "currently" => $weather['currently']['summary'],
                    "daily" => $weather['daily']['summary'],
                    "hourly" => $weather['hourly']['summary']
                );


                echo json_encode($json, JSON_PRETTY_PRINT);

            ?>
        </pre>

        <?php elseif ($currentIp === null) : ?>
            <div class="alert alert-danger" role="alert">
              Your IP address is not valid
            </div>
        <?php endif; ?>

        <a href="api"><button class="btn btn-primary btn-lg">Go back</button></a>
    <?php endif; ?>
    <?php if (!isset($_GET["ip"])) : ?>
        <form class="form-signin" method="get">
            <div class="form-group">
                <input class="form-control"  type="text" name="ip" value="<?= $currentIp ?>" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block"  type="submit">Get JSON</button>
        </form>

        <h4> Test routes </h4>

        <p>My place</p>
        <p><a href="?ip=186.151.62.176">api?ip=186.151.62.176</a></p>
        <p>Facebook</p>
        <p><a href="?ip=2a03:2880:2110:df07:face:b00c::1">api?ip=2a03:2880:2110:df07:face:b00c::1</a></p>
        <p>Random</p>
        <p><a href="?ip=4.2.2.2">api?ip=4.2.2.2</a></p>
    <?php endif; ?>
</div>
