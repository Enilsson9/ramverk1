<h1>Get weather from IP</h1>

<div class="jumbotron">
    <?php if (isset($_GET["ip"])) : ?>
    <table class="table table-striped">
        <?php if ($currentIp !== null) : ?>
        <h1><?= $weatherNow['timezone'] ?></h1>

        <div id="map" class="map"></div>

        <h3>Current Weather</h3>

        <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>

            <tr>
              <th scope="row">Summary</th>
              <td><?= $weatherNow['currently']['summary'] ?></td>
            </tr>

            <tr>
              <th scope="row">Temperature (Fahrenheit)</th>
              <td><?= $weatherNow['currently']['temperature'] ?></td>
            </tr>
        </tbody>
    </table>

    <h3>30 days ago</h3>

    <table  class="table table-striped">
        <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>

            <tr>
              <th scope="row">Summary</th>
              <td><?= $weatherBefore['currently']['summary'] ?></td>
            </tr>

            <tr>
              <th scope="row">Temperature (Fahrenheit)</th>
              <td><?= $weatherBefore['currently']['temperature'] ?></td>
            </tr>

        </tbody>
    </table>

        <?php elseif ($currentIp === null) : ?>
            <div class="alert alert-danger" role="alert">
              Your IP address is not valid
            </div>
        <?php endif; ?>

        <a href="weather"><button class="btn btn-primary btn-lg btn-block">Go back</button></a>

        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                var uluru = {lat: <?= $details["latitude"] ?>, lng: <?= $details["longitude"] ?>};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 10, center: uluru});
                // The marker, positioned at Uluru
                var marker = new google.maps.Marker({position: uluru, map: map});
            }
        </script>


        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMIN51gXuOHEQeNwXi7EJ8Ukm9Y8l1Rrc&callback=initMap">
        </script>

    <?php endif; ?>
    <?php if (!isset($_GET["ip"])) : ?>
        <form class="form-signin" method="get" action="">
            <div class="alert alert-primary" role="alert">
              Get current weather and previous weather (30 days ago)
            </div>

            <div class="form-group">
                    <input class="form-control"  type="text" name="ip" value="<?= $currentIp ?>" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block"  type="submit">Check weather</button>
        </form>

        <h4> Test routes </h4>

        <p>My place</p>
        <p><a href="?ip=186.151.62.176">weather?ip=186.151.62.176</a></p>
        <p>Facebook</p>
        <p><a href="?ip=2a03:2880:2110:df07:face:b00c::1">weather?ip=2a03:2880:2110:df07:face:b00c::1</a></p>
        <p>Random</p>
        <p><a href="?ip=4.2.2.2">weather?ip=4.2.2.2</a></p>


    <?php endif; ?>
</div>
